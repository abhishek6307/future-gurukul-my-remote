@extends('frontend.main_master')
@section('content')

@section('title')
My Cart Page 
@endsection

  <section class="h-100 blue-color">
        <div class="container py-5">
        <form action="{{ route('make.course.payment') }}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}


            <input type="hidden" name="id" class="form-control id"  value="{{ $course->id }}">

            <input type="hidden" name="amount" class="form-control amount"  value="{{ $course->discount_price }}"> 

            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Cart - items</h5>
                        </div>

                        <div class="card-body" id="cartCourse">
                   			
                   			 <div class="row">
                                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                   
                                    <div class="bg-image hover-overlay hover-zoom ripple rounded"
                                        data-mdb-ripple-color="light">
                                        <img src="{{ asset($course->course_thambnail) }}"
                                            class="w-100" alt="Image" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                        </a>
                                    </div>
                                 
                                </div>

                                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                               
                                    <p><strong>{{$course->course_name}}</strong></p>
                                   
                                    <button type="button" class="btn btn-primary btn-sm me-1 mb-2"
                                        data-mdb-toggle="tooltip" title="Remove item">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                  
                                  
                                </div>


                                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                           
                                    <p class="text-start text-md-center">
                                    
                                            <strong>Price: </strong>
                                           {{$course->discount_price}}
                                       
                                    </p>
                                   
                                </div>
                            </div>
                            

                            <hr class="my-4" />
    
                        </div>

                    </div>
                    <div class="card mb-4">
                        <div class="card-body"  id="couponField">
                

                <div class="row">
				@if(Session::has('coupon'))

				@else

				<div>
					
						<span class="estimate-title" style="color:#017ddd">Discount Code</span>
								<p>Enter your coupon code if you have one...</p>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<div class="form-group">
						<input type="text" class="form-control unicase-form-control text-input" placeholder="You Coupon.." id="coupon_name">
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-12">
					<div class="clearfix pull-right">
						<button type="submit" class="btn-upper btn btn-primary" onclick="applyCoupon()">APPLY COUPON</button>
					</div>
				</div>
				
				
				
				
			
			@endif


      </div><!-- /.estimate-ship-tax -->
                        </div>
                    </div>

                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body">
                            <p><strong>We accept</strong></p>
                            <img class="me-2" width="45px"
                                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                                alt="Visa" />
                            <img class="me-2" width="45px"
                                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                                alt="American Express" />
                            <img class="me-2" width="45px"
                                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                                alt="Mastercard" />
                            <img class="me-2" width="45px"
                                src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_111x69.jpg"
                                alt="PayPal acceptance mark" />
                        </div>
                    </div>

                </div>


                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Summary</h5>
                        </div>
                        <div class="card-body" id="couponCalCourse">
                          
                        	<ul class="list-group list-group-flush">
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                     Subtotal
                                    <span>₹ {{$course->discount_price}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Shipping
                                    <span>FREE</span>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Total amount</strong>
                                        <strong>
                                            <p class="mb-0">(including All Tax)</p>
                                        </strong>
                                    </div>
                                    <span><strong>₹ {{$course->discount_price}}</strong></span>
                                </li>
                            </ul>

                                <button type="submit" class="btn btn-primary btn-lg btn-block pay">PROCCED TO CHEKOUT</button>
                           

                            
                        </div>

                    </div>
                </div>
            </div>
        </form>
      </div>
    </section>


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
        var id = $('.id').val();
        var amount = $('.amount').val();
        var mobile = $('.mobile').val();
        var email = $('.email').val();
        if(name == "" || mobile == "" || email== "" ){
            alert("Please fill all the fields");
            return false;
        }
        e.preventDefault();
        $.ajax({
           type:'POST',
           url:"{{route('make.course.payment')}}",
           data: {
            '_token':'{{ csrf_token() }}',
            'name': $('.name').val(),
            'id': $('.id').val(),
            'amount': $('.amount').val(),
            'mobile': $('.mobile').val(),
            'email': $('.email').val(),
           
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




@endsection