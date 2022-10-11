@extends('frontend.main_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('title')
My Checkout
@endsection

<div class="container-fluid  form-shipping" >
    <div class="row">
          <h4 style="margin-left:-10px;font-size:1.4rem; font-weight:600; color: #017ddd;">Shipping Details</h4>
        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
        

             <form action="{{ route('make.payment') }}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}

                @if($message = Session::get('message'))
                    <p>{!! $message !!}</p>
                    <?php Session::forget('success'); ?>
                @endif

                <div class="row">
                   

                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Full Name</label>
                          <input type="text" name="name" class="form-control name"  placeholder="Full Name" value="{{ Auth::user()->name }}" required="">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Email</label>
                          <input type="email" class="form-control email" placeholder="Email" value="{{ Auth::user()->email }}" required="">

                        </div>
                      </div>
                 

                    <div class="form-row">
                        <div class="form-group col-6">
                          <label for="inputEmail4">Mobile Number</label>
                          <input type="text" name="mobile" class="form-control mobile" maxlength="10" placeholder="Phone" value="{{ Auth::user()->phone }}" required="">
                        </div>
                        <div class="form-group col-6">
                          <label for="inputPassword4">Country</label>
                        <select name="division_id" class="form-control division_id" required="" >
                                <option value="" selected="" disabled="">--Country--</option>
                                @foreach($divisions as $item)
                     <option value="{{ $item->id }}">{{ $item->division_name }}</option>    
                                @endforeach
                            </select>

                        </div>
                  </div>

                    <div class="form-group col-md-12">
                        <label for="inputAddress">Address</label>
                        <input type="text" name="notes" class="form-control notes" placeholder="Address" required>
                    </div>


                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputCity">State</label>
                        <select name="district_id" class="form-control district_id" required="" >
                                <option value="" selected="" disabled="">--State--</option>
                                 
                            </select>
                            @error('district_id') 
                         <span class="text-danger">{{ $message }}</span>
                         @enderror 
                        </div>

                        <div class="form-group col-md-4">
                          <label for="inputState">State</label>
                           <select name="state_id" class="form-control state_id" required="" >
                                <option value="" selected="" disabled="">--District--</option>
                                 
                            </select>
                         @error('state_id') 
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                        </div>

                        <div class="form-group col-md-2">
                          <label for="inputZip">Pin Code</label>
                            <input type="text" name="post_code" class="form-control post_code" placeholder="Post Code"  required="">
                        </div>

                        <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Save This Address
                          </label>
                        </div>
                      </div>
                      </div>     
                </div>
            </form>

        </div>

<div class="col-lg-4 col-md-4 col-sm-12 col-12">
        
<div class="card">
  <h5 class="card-header">Checkout Progress</h5>
  <div class="card-body">
   

    <ul class="list-group list-group-flush">


            @foreach($carts as $item)

                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0"> <strong><img src="{{ asset($item->options->image) }}" style="height: 50px; width: 50px;"> </strong>{{ $item->name }}
                  </li>


                    @endforeach 


                        @if(Session::has('coupon'))

                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                     <strong>SubTotal: </strong> ₹{{ $cartTotal }}
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                   <strong>Coupon Name : </strong> {{ session()->get('coupon')['coupon_name'] }}
( {{ session()->get('coupon')['coupon_discount'] }} % )

                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                <strong>Coupon Discount : </strong> ₹{{ session()->get('coupon')['discount_amount'] }} 
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                               <strong>Grand Total : </strong> ₹{{ session()->get('coupon')['total_amount'] }} 
                                </li>

                                @else

                                 <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                              <strong>SubTotal: </strong> ₹{{ $cartTotal }}  
                                </li>

                                 <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                              <strong>Grand Total : </strong> ₹{{ $cartTotal }}
                                </li>
                                @endif 
                            </ul>
              </div>
            </div>
              <div style="padding-top: 10px;">
                    <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block pay">Pay</button>
                </div></div>
        </div>
              
                
    </div>
    <div class="panel panel-primary" style="margin-top:110px;">
        
        <div class="panel-body">
           
        </div>
    </div>
</div>   

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    @if(env('PAYTM_ENVIRONMENT')=='production')
        <script type="application/javascript" crossorigin="anonymous" src="https:\\securegw.paytm.in\merchantpgpui\checkoutjs\merchants\<?php echo env('PAYTM_MERCHANT_ID')?>.js" ></script>
    @else
       <script type="application/javascript" crossorigin="anonymous" src="https:\\securegw-stage.paytm.in\merchantpgpui\checkoutjs\merchants\<?php echo env('PAYTM_MERCHANT_ID')?>.js" ></script>
    @endif    

    <script type="text/javascript">
    //function openJsCheckout(){ 
    $(".pay").click(function(e){    
        var name = $('.name').val();
        var mobile = $('.mobile').val();
        var email = $('.email').val();
        var division_id = $('.division_id').val();
        var district_id = $('.district_id').val();
        var state_id = $('.state_id').val();
        var post_code = $('.post_code').val();
        var notes = $('.notes').val();
        if(name == "" || mobile == "" || email== "" ){
            alert("Please fill all the fields");
            return false;
        }
        e.preventDefault();
        $.ajax({
           type:'POST',
           url:"{{route('make.payment')}}",
           data: {
            '_token':'{{ csrf_token() }}',
            'name': $('.name').val(),
            'mobile': $('.mobile').val(),
            'email': $('.email').val(),
            'division_id': $('.division_id').val(),
            'district_id': $('.district_id').val(),
            'state_id': $('.state_id').val(),
            'notes': $('.notes').val(),
            'post_code': $('.post_code').val(),
            },
           success:function(data) {
            $('.paytm-pg-loader').show();
            $('.paytm-overlay').show();
        if(data.txnToken == ""){
                alert(data.message);
                $('.paytm-pg-loader').hide();
                $('.paytm-overlay').hide();
                return false;
            }
            invokeBlinkCheckoutPopup(data.orderId,data.txnToken,data.amount)
           }
        });
    
  });

    function invokeBlinkCheckoutPopup(orderId,txnToken,amount){
        window.Paytm.CheckoutJS.init({
            "root": "",
            "flow": "DEFAULT",
            "data": {
                "orderId": orderId,
                "token": txnToken,
                "tokenType": "TXN_TOKEN",
                "amount": amount,
            },
            handler:{
                    transactionStatus:function(data){
                } , 
                notifyMerchant:function notifyMerchant(eventName,data){
                    if(eventName=="APP_CLOSED")
                    {
                      $('.paytm-pg-loader').hide();
                      $('.paytm-overlay').hide();
                      //location.reload();
                    }
                    console.log("notify merchant about the payment state");
                } 
                }
        }).then(function(){
            window.Paytm.CheckoutJS.invoke();
        });
    }

</script> 


 <script type="text/javascript">
      $(document).ready(function() {
        $('select[name="division_id"]').on('change', function(){
            var division_id = $(this).val();
            if(division_id) {
                $.ajax({
                    url: "{{  url('/district-get/ajax') }}/"+division_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                        $('select[name="state_id"]').empty(); 
                       var d =$('select[name="district_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="district_id"]').append('<option value="'+ value.id +'">' + value.district_name + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });



 $('select[name="district_id"]').on('change', function(){
            var district_id = $(this).val();
            if(district_id) {
                $.ajax({
                    url: "{{  url('/state-get/ajax') }}/"+district_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                       var d =$('select[name="state_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="state_id"]').append('<option value="'+ value.id +'">' + value.state_name + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });
 

    });
    </script>


@endsection