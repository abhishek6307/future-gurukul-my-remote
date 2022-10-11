@extends('frontend.main_master')
@section('content')
@section('title')
Future Gurukuls - Robotics & Coding For Kids
@endsection


    <div class="position-relative overflow-hidden">
        <main>
            <div>
                <div class="row">
                    <div class="col-md-12 col-12 shop-banner">
                       <img src="{{asset('fronten/assets/images/banner/banner2.png')}}" style="width: 100%;">
                    </div>
                </div>
            </div>
        </main>

        <section id="products" class="mt-3">
            <div class="mb-3 container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#" target="_self" class="">Home</a>
                    </li>

                    <li class="breadcrumb-item active">
                        <span aria-current="location">Kits</span>
                    </li>
                </ol>
            </div>

            
                    <div class="container">
                        <div class="row shop-page-buttons">
                            <div class="col-lg-10 col-md-8 col-sm-6 col-xs-6">
                                <div class="shop-page-buttons-content"><a>Robotics</a></div>
                                 <div class="shop-page-buttons-content"><a>IoT</a></div>
                                <div class="shop-page-buttons-content"><a>Drone</a></div>
                            </div>

                            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 shop-page-buttons-age"><select class="custom-select">
                            <option value="" selected="selected">Sort by Age</option>
                            <option value="5">5+</option>
                            <option value="8">8+</option>
                            <option value="10">10+</option>
                        </select></div>
                            
                        </div>

                    </div>
                   <!--- <div class="ml-auto"><select class="custom-select">
                            <option value="" selected="selected">Sort by Age</option>
                            <option value="5">5+</option>
                            <option value="8">8+</option>
                            <option value="10">10+</option>
                        </select></div>   --->
            

            <div class="container">
                <div class="row">
                    @foreach($catwiseProduct as $product)

                    @php
                      $subid=$product->subcategory_id;
                      $subcatid = App\Models\SubCategory::where('id',$subid)->first(); 

                      $subsubid=$product->subsubcategory_id;
                      $subsubcatid = App\Models\SubSubCategory::where('id',$subsubid)->first();

                    @endphp 
                    <div class="mb-4 px-2 px-lg-3 col-lg-4 col-xl-3 col-6">
                        <div class="card h-100">
                            <div class="row mt-4">
                                <div class="col-sm-12"  style="text-align: center;"><a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}" class=""><img
                                            src="{{ asset($product->product_thambnail) }}"
                                            alt="FG" class="img-fluid" style="width: 95%; height:85%;"></a></div>
                            </div>
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-sm-8">
                                        <div class="categories">
                                            <div class="category-item kit-type"
                                                style="color: #017DDD; border: 1px solid #017DDD;">
                                                 {{ $subsubcatid->subsubcategory_name_en}}
                                            </div>
                                            <div class="category-item age-group">
                                                {{ $subcatid->subcategory_name_en}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 mt-2 mt-md-0">
                                        <div class="d-flex align-items-center"><i
                                                class="fa-star text-warning fas fa-sm"></i> <i
                                                class="fa-star text-warning fas fa-sm"></i> <i
                                                class="fa-star text-warning fas fa-sm"></i> <i
                                                class="fa-star text-warning fas fa-sm"></i> <i
                                                class="fa-star text-warning fas fa-sm"></i></div>
                                    </div>
                                </div> <br> <a href="#" class="">
                                    <div class="h5">{{ $product->product_name_en }}</div>
                                </a>
                                <p style="font-weight:300; font-size: 0.8rem; color: #505050;">
                                    {{ $product->short_descp_en }}
                                </p>
                                <div class="d-flex align-items-center prices" style="gap: 0.8rem;">
                                    <div class="text-muted"><span class="slash-price">₹ {{ $product->selling_price }} /-</span></div>
                                    <div class="h5 font-weight-normal mb-0">
                                        ₹ {{ $product->discount_price }} /-
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent border-0"><button href="{{ route('mycart') }}"
                                    class="btn btn-blue btn-block rounded-pill" type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal" id="{{ $product->id }}" onclick="productView(this.id)">
                                    Buy Now
                                </button>
                             
                            </div>
                           
                        </div>
                    </div>
                     @endforeach

                </div>
            </div>
        </section>
    </div>

@endsection