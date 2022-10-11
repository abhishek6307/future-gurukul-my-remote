@extends('frontend.main_master')
@section('content')

@section('title')
My Cart Page 
@endsection

  <section class="h-100 blue-color">
        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Cart - items</h5>
                        </div>

                        <div class="card-body" id="cartPage">
                   
    
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
                        <div class="card-body" id="couponCalField">
                          

                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection