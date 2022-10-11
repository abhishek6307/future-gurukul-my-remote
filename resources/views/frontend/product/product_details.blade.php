@extends('frontend.main_master')
@section('content')

@section('title')
{{ $product->product_name_en }} Product Details
@endsection

<style>
	.checked {
  color: #017ddd;
}

</style>

                
 

@php 
	$reviewcount = App\Models\Review::where('product_id',$product->id)->where('status',1)->latest()->get();

	$avarage = App\Models\Review::where('product_id',$product->id)->where('status',1)->avg('rating');

@endphp


 

        @php
        $amount = $product->selling_price - $product->discount_price;
        $discount = round(($amount/$product->selling_price) * 100);
        @endphp 


<section style="background-color: white; margin-top: 20px;">

    <div id="products" class="min-vh-100 position-relative">
        <div>
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="https://www.avishkaar.cc" target="_self" class="">Kits</a></li>
                    <li class="breadcrumb-item active"><span aria-current="location">{{$product->product_name_en}}</span></li>
                </ol>
            </div>

            <div class="pb-lg-5 py-2">
                <div class="position-relative container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="d-none d-sm-block col-lg-2 col-3">
                                    <div class="d-flex flex-column align-items-center" style="gap:.5rem;">

				     @foreach($multiImag as $img)
					   <div class="slideshow-img pointer active-img" id="slide{{ $img->id }}">
						 <a data-title="Gallery" href="{{asset($img->photo_name)}} "> 
							<img alt="FG img" src="{{ asset($img->photo_name ) }} " data-echo="{{ asset($img->photo_name ) }} " width="65" height="65" class="img-thumbnail"> </a>
							</div><!-- /.single-product-gallery-item -->
				         @endforeach
									
                                    </div>
                                </div>

                                <div class="d-none d-sm-block col-lg-10 col-9">
                                    <div class="" style=""><img
                                            src="{{ asset($product->product_thambnail) }}"
                                            alt="FG image" width="445" height="445" class="img-fluid"></div>
                                </div>
                            </div>
                        </div>

                        <div class="mobile-images">
                            <div class="d-sm-block col-lg-10 col-9" style="width: 100%; justify-content:center">
                                <div><img src="{{ asset($product->product_thambnail) }}" alt="FG image" width="100%" height="445" class="img-fluid"></div>
                            </div>


                            <div class="d-sm-block col-lg-2" style="margin: 20px 0;">
                                <div class="d-flex flex-row align-items-center" style="gap:.5rem;">
                               


                          @foreach($multiImag as $img)
							   <div class="slideshow-img pointer active-img" id="slide{{ $img->id }}">
								 <a data-title="Gallery" href="{{asset($img->photo_name)}} "> 
									<img alt="" src="{{ asset($img->photo_name ) }} " data-echo="{{ asset($img->photo_name ) }} " width="65" height="65" class="img-thumbnail"> </a>
									</div><!-- /.single-product-gallery-item -->
				         @endforeach

                                </div>
                            </div>

                            
                        </div>

                        <div class="mt-lg-0 mt-2 col-lg-6 col-xl-5 offset-xl-1">
                            <h1 class="h2 font-poppins">{{$product->product_name_en}}</h1>
                            <div class="h5 mb-0 font-weight-normal">{{$product->short_descp_en}}</div>
                            <br>
                            <div class="d-flex align-items-center" style="gap:.5rem;">
                               <div class="col-8">
						 
   @if($avarage == 0)
 <span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
   @elseif($avarage == 1 || $avarage < 2)
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
   @elseif($avarage == 2 || $avarage < 3)
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
  @elseif($avarage == 3 || $avarage < 4)
  <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>

  @elseif($avarage == 4 || $avarage < 5)
  <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
  @elseif($avarage == 5 || $avarage < 5)
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
   @endif


					</div>
                            </div>
                            <br>

                            <div class="d-flex align-items-center" style="gap:1rem;">
                                <div class="h5 font-weight-bold mb-0">₹ {{$product->discount_price}}/-</div>
                                <div class="text-muted">
                                    <span class="slash-price">₹ {{$product->selling_price }} /-</span>
                                </div>
                                <div class="text-blue">({{$discount}} % off)</div>
                            </div>

                            <div class="d-flex align-items-md-center flex-md-row flex-column my-3 flex-wrap">
                                <div class="whatsapp-sharer  pr-md-2 mb-3 mb-md-0">
                                    <a>
                                        <div class="d-flex align-items-center pointer" style="gap: .3rem;">
                                            <i class="fab fa-2x fa-whatsapp text-success"></i>
                                            <span>Share with Friends</span>
                                        </div>

                                    </a>
                                </div>

                                <div class="delivery-icon pl-md-2">
                                    <div class="d-flex align-items-center pointer" style="gap: .3rem;">
                                        <img src="https://avishkaar-images.s3.ap-south-1.amazonaws.com/misc/shop/trucki-icon.svg"
                                            alt="truck icon">
                                        <span>Deliver in 5-7 Business days</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row d-none d-lg-block">
                                <div class="col-lg-10">
                                    <div>
                                        <div class="mb-2">
                                            <button type="button"
                                                class="btn font-weight-bold btn-darkblue btn-block rounded-pill collapsed"
                                                style="box-shadow: rgb(255, 255, 255) 0px 0px; overflow-anchor: none;"
                                                aria-expanded="false" aria-controls="sidebar" data-toggle="modal" data-target="#exampleModal" id="{{ $product->id }}" onclick="productView(this.id)">
                                                Add to Cart</button>

                                            <button type="button" style="margin: 10px 0;"
                                                class="btn shadow-sm font-weight-bold btn-blue btn-block rounded-pill" data-toggle="modal" data-target="#exampleModal" id="{{ $product->id }}" onclick="productView(this.id)">Buy
                                                Now</button>
                                        </div>
                                    </div>
                                    <p class="text-muted text-center mt-4">Are you a schools owner? </br><a href="/products/abot-business-bundle"
                                            class="text-primary text-underline">Know about FG Lab</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section id="about-the-product" style="background-color: #eaeaea">
                <div class="container">
                    <h2 class="text-center mb-4 font-poppins">About the Product</h2>
                    <div class="row align-items-center">
                        <div class="text-lg-left text-center col-lg-6">
                          
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/iAeO-TFTOGM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        </div>

                        <div class="mt-4 mt-lg-0 col-lg-6">
                           
                     {!! $product->long_descp_en !!}
                           
                        </div>
                    </div>
                </div>
            </section>


            <section id="review-card" class="text-center text-white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="card border-0 review-card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h5>Bought ABot Already?</h5>
                                        <p>
                                            We would love to know how your experience was and help you out, in case of
                                            problems.
                                        </p> <br>
                                        <div class="d-flex flex-column justify-content-center flex-md-row align-items-center review-question">

                                      <ul id="product-tabs" class="nav">
								
									<li><a data-toggle="tab" href="#review" type="button" class="btn px-5 btn-blue rounded-pill">Write a review</a> </li>

									<li> <a data-toggle="tab" href="#tags" type="button"
	                                                class="btn px-5 btn-light rounded-pill"> Ask a question
	                                            </a></li>
							</ul></div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>



<div class=" product-review-section">
					<div class="row">
						<div class="col-sm-9">
					<div class="tab-content">
								

<div id="review" class="tab-pane ">
	<div class="product-tab">
												
		<div class="product-reviews">
			

@php
$reviews = App\Models\Review::where('product_id',$product->id)->latest()->limit(5)->get();
@endphp			

	<div class="reviews">
		 
		@foreach($reviews as $item)
		@if($item->status == 0)

		@else

		<div class="review">

        <div class="row">
			<div class="col-md-6">
			<img style="border-radius: 50%" src="{{ (!empty($item->user->profile_photo_path))? url('upload/user_images/'.$item->user->profile_photo_path):url('upload/no_image.jpg') }}" width="40px;" height="40px;"><b> {{ $item->user->name }}</b>


 @if($item->rating == NULL)
 <span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
 @elseif($item->rating == 1)
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
 @elseif($item->rating == 2)
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>

 @elseif($item->rating == 3)
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>

 @elseif($item->rating == 4)
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
 @elseif($item->rating == 5)
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>

@endif



			</div>

			<div class="col-md-6">
				
			</div>			
		</div> <!-- // end row -->



			<div class="review-title"><span class="summary">{{ $item->summary }}</span><span class="date"><i class="fa fa-calendar"></i><span> {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }} </span></span></div>
			<div class="text">"{{ $item->comment }}"</div>
		 </div>

		 @endif
	@endforeach
	</div><!-- /.reviews -->


		</div><!-- /.product-reviews -->
										

										
<div class="product-add-review">
	<h4 class="title">Write your own review</h4>
	<div class="review-table">
		 
	</div><!-- /.review-table -->
											
		<div class="review-form">
			@guest
<p> <b> For Add Product Review. You Need to Login First <a href="{{ route('login') }}">Login Here</a> </b> </p>

			@else 

			<div class="form-container">

  <form role="form" class="cnt-form" method="post" action="{{ route('review.store') }}">
  	@csrf

  	<input type="hidden" name="product_id" value="{{ $product->id }}">


<table class="table">	
	<thead>
		<tr>
			<th class="cell-label">&nbsp;</th>
			<th>1 </th>
			<th>2 </th>
			<th>3 </th>
			<th>4 </th>
			<th>5 </th>
		</tr>
	</thead>	
	<tbody>
		<tr>
			<td class="cell-label">Stars</td>
			<td><input type="radio" name="quality" class="radio" value="1"></td>
			<td><input type="radio" name="quality" class="radio" value="2"></td>
			<td><input type="radio" name="quality" class="radio" value="3"></td>
			<td><input type="radio" name="quality" class="radio" value="4"></td>
			<td><input type="radio" name="quality" class="radio" value="5"></td>
		</tr>
		 
	</tbody>
</table>
 


	
	<div class="row">
		<div class="col-sm-6">
			 
			<div class="form-group">
				<label for="exampleInputSummary">Summary <span class="astk">*</span></label>
	 <input type="text" name="summary" class="form-control txt" id="exampleInputSummary" placeholder="">
			</div><!-- /.form-group -->
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label for="exampleInputReview">Review <span class="astk">*</span></label>
 <textarea class="form-control txt txt-review" name="comment" id="exampleInputReview" rows="4" placeholder=""></textarea>
			</div><!-- /.form-group -->
		</div>
	</div><!-- /.row -->
	
	<div class="action text-center">
		<button type="submit" class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
	</div><!-- /.action -->

</form><!-- /.cnt-form -->
			</div><!-- /.form-container -->

   @endguest


		</div><!-- /.review-form -->

	</div><!-- /.product-add-review -->										
	
</div><!-- /.product-tab -->
</div><!-- /.tab-pane -->

<div id="tags" class="tab-pane">
<div class="container">
	
<div class="card">
  <h5 class="card-header">Contact Us Any time</h5>
  <div class="card-body">
    <h5 class="card-title">Please contact us on given contact details. We would love to resolve your every query.</h5>
    <p class="card-text">Whatsap: 6387894347</p>
    <p class="card-text">Call: 6387896861</p>
    <p class="card-text">Email: official@gmail.com</p>
    
  </div>
</div>

									</div><!-- /.product-tab -->
								</div><!-- /.tab-pane -->

							</div><!-- /.tab-content -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.product-tabs -->





            <div class="bottom-nav d-block d-lg-none">
                <div class="row">
                    <div class="col-10">
                        <div class="row">
                            <div class="pr-0 col"><button type="button"
                                    class="btn font-weight-bold btn-darkblue btn-block rounded-pill collapsed"
                                    aria-expanded="false" aria-controls="sidebar" style="overflow-anchor: none;" data-toggle="modal" data-target="#exampleModal" id="{{ $product->id }}" onclick="productView(this.id)">Add to
                                    Cart</button></div>
                            <div class="col"><button type="button"
                                    class="btn shadow-sm font-weight-bold btn-blue btn-block rounded-pill" data-toggle="modal" data-target="#exampleModal" id="{{ $product->id }}" onclick="productView(this.id)">Buy
                                    Now</button></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</section>


@endsection