@extends('frontend.main_master')
@section('content')

@section('title')
{{ $course->course_name }} Product Details
@endsection


<section style="background-color: white; margin-top: 20px;">
    <div id="products" class="min-vh-100 position-relative" >
        <div>
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="https://www.avishkaar.cc" target="_self" class="">Course</a></li>
                    <li class="breadcrumb-item"><a href="/" target="_self" class="nuxt-link-active">{{$course->course_name}}</a></li>
                   
                </ol>
            </div>


        @php
        $amount = $course->selling_price - $course->discount_price;
        $discount = round(($amount/$course->selling_price) * 100);
        @endphp 

            <div class="pb-lg-5 py-2">
                <div class="position-relative container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                

                                <div class="d-none d-sm-block col-lg-10 col-9">
                                    <div class="" style=""><img
                                            src="{{ asset($course->course_thambnail) }}"
                                            alt="FG image"  width="445" height="445" class="img-fluid"></div>
                                </div>
                            </div>

                            <div class="mobile-images">
                                <div class="d-sm-block col-lg-10 col-9" style="width: 100%; justify-content:center">
                                    <div class="" style=""><img
                                            src="{{ asset($course->course_thambnail) }}"
                                            alt="FG image" width="445" height="445" class="img-fluid"></div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-lg-0 mt-2 col-lg-6 col-xl-5 offset-xl-1">
                            <h1 class="h2 font-poppins">{{$course->course_name}}</h1>
                            <div class="h5 mb-0 font-weight-normal"></div>
                            <br>
                            <div class="d-flex align-items-center" style="gap:.5rem;">
                                <i class="fa-star text-warning fas"></i> <i class="fa-star text-warning fas"></i>
                                <i class="fa-star text-warning fas"></i> <i class="fa-star text-warning fas"></i>
                                <i class="fa-star text-warning fas"></i>
                            </div>
                            <br>

                            <p class="text-muted font-weight-normal mb-0">Starting From</p>
                          
                                  <div class="d-flex align-items-center" style="gap:1rem;">
                                <div class="h5 font-weight-bold mb-0">₹ {{$course->discount_price}}/-</div>
                                <div class="text-muted">
                                    <span class="slash-price">₹ {{$course->selling_price }} /-</span>
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
                                        <span>Course Duration 6 weeks</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row d-none d-lg-block">
                                <div class="col-lg-10">
                                    <div>
                                        <div class="mb-2">
                                            <a href="{{ route('course.cart',$course->id) }}"><button type="button"
                                                class="btn font-weight-bold btn-darkblue btn-block rounded-pill collapsed"
                                                style="box-shadow: rgb(255, 255, 255) 0px 0px; overflow-anchor: none;">
                                                Enroll Now</button></a>

                                            <button type="button" style="margin: 10px 0;"
                                                class="btn shadow-sm font-weight-bold btn-blue btn-block rounded-pill">Book
                                                a Free Trial</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section id="get-started" class="bg-lightgreen" style="background-color: #eaeaea">
                <div class="container">
                    <h5 class="text-center text-white h5">Get Started with</h5>
                    <h3 class="text-capitalize text-center text-white">Robotics Microdegree program</h3>
                    <br>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-12" style="color: #fff; font-size: 1rem; text-align:center;">

                                {!! $course->long_descp !!}
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="trainers">
                <div class="container">
                    <h2 class="text-center font-poppins">Learn from World-Class Trainers</h2> <br> <br>
                    <div class="trainers-container">
                        <div tabindex="-1" data-index="0" aria-hidden="false" class="trainer-item">
                            <div>
                                <div tabindex="-1" class="p-2" style="width: 100%; display: inline-block;">
                                    <div class="card green-border">
                                        <div class="card-body text-center">
                                            <div class="card-custom-badge"><img
                                                    src="https://avishkaar-images.s3.ap-south-1.amazonaws.com/misc/trainer/pragya.jpg"
                                                    alt="Pragya Ma'am" width="120" height="120" class="rounded-circle">
                                                <div class="custom-badge-text"><span class="mr-1">5</span> <i
                                                        class="fas fa-star fa-xs"></i></div>
                                            </div>
                                            <div class="my-3">
                                                <div class="h4 mb-n1">
                                                    Pragya Ma'am
                                                </div>
                                                <div><small>Robotics
                                                        Trainer</small></div>
                                                <div class="h6 text-warning mt-2">
                                                    6000+ Hours
                                                </div>
                                                <p class="text-muted">
                                                    Pragya is a passionate Robotics &amp; Coding Instructor with
                                                    20+ years of experience. She believes in inspiring the young
                                                    generation to explore and innovate.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div tabindex="-1" data-index="1" aria-hidden="false" class="trainer-item">
                            <div>
                                <div tabindex="-1" class="p-2" style="width: 100%; display: inline-block;">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="card-custom-badge"><img
                                                    src="https://avishkaar-images.s3.ap-south-1.amazonaws.com/misc/trainer/shweta_saini.jpg"
                                                    alt="Shweta Ma'am" width="120" height="120" class="rounded-circle">
                                                <div class="custom-badge-text"><span class="mr-1">5</span> <i
                                                        class="fas fa-star fa-xs"></i></div>
                                            </div>
                                            <div class="my-3">
                                                <div class="h4 mb-n1">
                                                    Shweta Ma'am
                                                </div>
                                                <div><small>Curriculum
                                                        Lead</small></div>
                                                <div class="h6 text-warning mt-2">
                                                    6000+ Hours
                                                </div>
                                                <p class="text-muted">
                                                    Shweta Ma'am is a driven Robotics &amp; Coding trainer with
                                                    over 15+ years of experience. She is a cheerful and
                                                    encouraging mentor and kids love her for it.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div tabindex="-1" data-index="2" aria-hidden="false" class="trainer-item">
                            <div>
                                <div tabindex="-1" class="p-2" style="width: 100%; display: inline-block;">
                                    <div class="card green-border">
                                        <div class="card-body text-center">
                                            <div class="card-custom-badge"><img
                                                    src="https://avishkaar-images.s3.ap-south-1.amazonaws.com/misc/trainer/amarpreet.jpg"
                                                    alt="Amarpreet Ma'am" width="120" height="120"
                                                    class="rounded-circle">
                                                <div class="custom-badge-text"><span class="mr-1">5</span> <i
                                                        class="fas fa-star fa-xs"></i></div>
                                            </div>
                                            <div class="my-3">
                                                <div class="h4 mb-n1">
                                                    Amarpreet Ma'am
                                                </div>
                                                <div><small>Curriculum
                                                        Lead</small></div>
                                                <div class="h6 text-warning mt-2">
                                                    3000+ Hours
                                                </div>
                                                <p class="text-muted">
                                                    Amarpreet is a young coding &amp; electronics trainer full
                                                    of passion &amp; zeal. She has been teaching for many years
                                                    now and kids love her for her enthusiasm.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testemonials -->
            <center>
                <h3 style="margin: 50px 0 10px 0;"> Customer Reviews</h3>
                <figure class="snip1533">
                    <figcaption>
                        <blockquote>
                            <p>If you do the job badly enough, sometimes you don't get asked to do it again.</p>
                        </blockquote>
                        <h3>Wisteria Ravenclaw</h3>
                        <h4>Google Inc.</h4>
                    </figcaption>
                </figure>
                <figure class="snip1533">
                    <figcaption>
                        <blockquote>
                            <p>I'm killing time while I wait for life to shower me with meaning and happiness.</p>
                        </blockquote>
                        <h3>Ursula Gurnmeister</h3>
                        <h4>Facebook</h4>
                    </figcaption>
                </figure>
                <figure class="snip1533">
                    <figcaption>
                        <blockquote>
                            <p>The only skills I have the patience to learn are those that have no real application in
                                life. </p>
                        </blockquote>
                        <h3>Ingredia Nutrisha</h3>
                        <h4>Twitter</h4>
                    </figcaption>
                </figure>
            </center>
            <!-- Testemonials -->

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
                                        <div class="d-flex flex-column justify-content-center flex-md-row align-items-center"
                                            style="gap: 1.5rem;"><a
                                                href="#"
                                                class=""><button type="button" class="btn px-5 btn-blue rounded-pill">
                                                    Write a review
                                                </button></a> <button type="button"
                                                class="btn px-5 btn-light rounded-pill">
                                                Ask a question
                                            </button></div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    </section>


@endsection
