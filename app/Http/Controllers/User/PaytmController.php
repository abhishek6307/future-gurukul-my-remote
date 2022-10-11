<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Paytm;

use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\ShipDivision;
use App\Models\ShipState;
use App\Models\ShipDistrict;
use Illuminate\Support\Facades\Session;
use Auth;
use Carbon\Carbon;
use App\Models\Course;
use App\Models\Enroll;
use App\Models\EnrolledCourse;

use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;

class PaytmController extends Controller
{
    // display a form for payment
    public function initiate()
    {
         return view('frontend.checkout.checkout_view');
    }

    public function pay(Request $request)
    {


         if (Session::has('coupon')) {
            $total_amount = Session::get('coupon')['total_amount'];
        }else{
            $total_amount = round(Cart::total());
        }


        $data = array();
        $data['shipping_name'] = $request->name;
        $data['shipping_email'] = $request->email;
        $data['shipping_phone'] = $request->phone;
        $data['post_code'] = $request->post_code;
        $data['division_id'] = 1;
        $data['district_id'] = 1;
        $data['state_id'] = 1;
        $data['notes'] = $request->notes;

        $cartTotal = Cart::total();

        $order_id = Order::insertGetId([
        'user_id' => Auth::id(),
        'division_id' => $request->division_id,
        'district_id' => $request->district_id,
        'state_id' => $request->state_id,
        'name' => $request->name,
        'email' => Auth::user()->email,
        'phone' => $request->mobile,
        'post_code' => $request->post_code,
        'notes' => $request->notes,

        'payment_type' => 'online',
        'payment_method' => 'paytm',
        
        'transaction_id' =>'YB'.mt_rand(1000000,99999999),
        'currency' => 'INR',
        'amount' => $total_amount,
        'order_number' => 'ORDER'.mt_rand(1000,9999),

        'invoice_no' => 'FG'.mt_rand(10000000,99999999),
        'order_date' => Carbon::now()->format('d F Y'),
        'order_month' => Carbon::now()->format('F'),
        'order_year' => Carbon::now()->format('Y'),
        'status' => 'tried',
        'created_at' => Carbon::now(),   

     ]);


        $carts = Cart::content();
        foreach ($carts as $cart) {
        OrderItem::insert([
            'order_id' => $order_id, 
            'product_id' => $cart->id,
            'color' => $cart->options->color,
            'size' => $cart->options->size,
            'qty' => $cart->qty,
            'price' => $cart->price,
            'created_at' => Carbon::now(),

        ]);
     }


        $amount = 1; //Amount to be paid

        $payment = Paytm::with('receive');

        $payment->prepare([
            'order' => 'ORDER'.mt_rand(1000,9999), 
            'user' => Auth::id(),
            'mobile_number' => Auth::user()->phone,
            'email' =>Auth::user()->email, // your user email address
            'amount' => $amount, // amount will be paid in INR.
            'callback_url' => url('/user/payment/status') // callback URL
        ]);
        
        $response =  $payment->receive();  // initiate a new payment
        return $response;
    }

    public function paymentCallback()
    {
        
        $transaction = Paytm::with('receive');

        $response = $transaction->response();
        
        $order_id = $transaction->getOrderId(); // return a order id
      
        $transaction->getTransactionId(); // return a transaction id
        // update the db data as per result from api call

        $id = Auth::id();
        $key = Order::where('user_id', $id)->latest()->first();
        $state = ShipDistrict::findOrFail($key->district_id);
        $dist = ShipState::findOrFail($key->state_id);
        if ($transaction->isSuccessful()) {

            Order::where('id', $key->id)->update([
                'transaction_id' => $transaction->getTransactionId(),
                'order_number' => $transaction->getOrderId(),
                'status' => 'pending',
                
               ]);

               // Start Send Email 
          $invoice = Order::findOrFail($key->id);
          
          $data = [
            'invoice_no' => $invoice->invoice_no,
            'amount' => $invoice->amount,
            'name' => $invoice->name,
            'email' => $invoice->email,
            'state' =>  $state->district_name,
            'district' => $dist->state_name,
            'address' => $invoice->notes,
            'pincode' => $key->post_code,
            'date' => Carbon::now()->format('d F Y'),

          ];

      Mail::to($invoice->email)->send(new OrderMail($data));

        if (Session::has('coupon')) {
           Session::forget('coupon');
          }

         Cart::destroy();

          //Transaction Successful
          $notification = array(
            'message' => 'Your Order Place Successfully',
            'alert-type' => 'success'
        );

          return redirect()->route('fg')->with($notification);

        } else if ($transaction->isFailed()) {
           
          //Transaction Successful
          $notification = array(
            'message' => 'Your Payment is failed',
            'alert-type' => 'error'
        );

          return redirect()->route('fg')->with($notification);

            
        } else if ($transaction->isOpen()) {
             return redirect(route('fg'))->with('message', "Your payment is processing.");
        }
        $transaction->getResponseMessage(); //Get Response Message If Available
    }




    //course payment

        public function initiateCourse()
    {
         return view('frontend.checkout.checkout_view');
    }

    public function payCourse(Request $request)
    {


        // if (Session::has('coupon')) {
           // $total_amount = Session::get('coupon')['total_amount'];
       // }else{
           // $total_amount = round(Cart::total());
        //}


        $course_id = Enroll::insertGetId([
        'user_id' => Auth::id(),
        'course_id' => $request->id,
        'payment_type' => 'online',
        'transaction_id' =>'YB'.mt_rand(1000000,99999999),
        'currency' => 'INR',
        'amount' => $request->amount,
        'invoice_no' => 'FG'.mt_rand(10000000,99999999),
        'order_date' => Carbon::now()->format('d F Y'),
        'status' => 'try',
        'created_at' => Carbon::now(),   

     ]);


        $amount = 1; //Amount to be paid

        $payment = Paytm::with('receive');

        $payment->prepare([ 
            'order' => 'ORDER'.mt_rand(1000,9999),
            'user' => Auth::id(),
            'mobile_number' => Auth::user()->phone,
            'email' =>Auth::user()->email, // your user email address
            'amount' => $amount, // amount will be paid in INR.
            'callback_url' => url('/course/payment/status')  // callback URL
        ]);
        
        $response =  $payment->receive();  // initiate a new payment
        return $response;
    }

        public function paymentCallbackCourse()
    {
        
        $transaction = Paytm::with('receive');

        $response = $transaction->response();
        
        $order_id = $transaction->getOrderId(); // return a order id
      
        $transaction->getTransactionId(); // return a transaction id
        // update the db data as per result from api call

        $id = Auth::id();
        $key = Enroll::where('user_id', $id)->latest()->first();
        if ($transaction->isSuccessful()) {

            Enroll::where('id', $key->id)->update([
                'transaction_id' => $transaction->getTransactionId(),
                'status' => 'paid',
                
               ]);



            EnrolledCourse::insert([
            'user_id' => $key->user_id,
            'course_id' => $key->course_id,
            'created_at' => Carbon::now(), 

        ]);

               // Start Send Email 
          $invoice = Enroll::findOrFail($key->id);
          
          $data = [
            'invoice_no' => $invoice->invoice_no,
            'amount' => $invoice->amount,
            'name' => $invoice->name,
            'email' => $invoice->email,
            'date' => Carbon::now()->format('d F Y'),

          ];

      Mail::to($invoice->email)->send(new OrderMail($data));

        if (Session::has('coupon')) {
           Session::forget('coupon');
          }

         Cart::destroy();

          //Transaction Successful
          $notification = array(
            'message' => 'Your Course Enrolled Successfully',
            'alert-type' => 'success'
        );

          return redirect()->route('fg')->with($notification);

        } else if ($transaction->isFailed()) {
           
          //Transaction Successful
          $notification = array(
            'message' => 'Your Payment is failed',
            'alert-type' => 'error'
        );

          return redirect()->route('fg')->with($notification);

            
        } else if ($transaction->isOpen()) {
             return redirect(route('fg'))->with('message', "Your payment is processing.");
        }
        $transaction->getResponseMessage(); //Get Response Message If Available
    }


}
