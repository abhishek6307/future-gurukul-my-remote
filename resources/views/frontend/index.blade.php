@extends('frontend.main_master')
@section('content')
@section('title')
Future Gurukuls - Robotics & Coding For Kids
@endsection



<section class="home-section" style="background-color: #fff;">
    <div class="container-fluid p-0">
        <div id="carousel" class="carousel slide hero-slides" data-ride="carousel">


            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active boat">
                    <div class="container h-100 d-md-block">
                        <div class="row align-items-center h-100">
                            <div class="col-12">
                                <div class="caption">
                                    <div class="banner-text-content sub-heading banner-1-txt1" data-v-5e0e5edc="">
                                        Robotics encourages curiosity and creativity in your child.
                                    </div>
                                    <div class="banner-text-content sub-heading banner-1-txt2" data-v-5e0e5edc="">
                                        Our Basic Robotis Kit is best to start
                                        <span class="span-orange">Robotics Journey</span>.
                                    </div>
                                    <a class="heading-btn banner1-btn" href="#">Buy Now>></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-item sea">
                        <div class="container h-100 d-md-block">
                            <div class="row align-items-center h-100">
                                <div class="col-12">
                                    <div class="slide-2-text">
                                        <div data-v-5e0e5edc="" class="slide-2 sub-heading">FG Lab
                                            <span class="span-orange span-bold">to help your child</span>
                                            <div data-v-5e0e5edc="" class="sub-heading">
                                                Learn technology skills of the future <br>like Robotics, Drone, IoT and Coding
                                            </div>
                                            <a class="heading-btn" href="#">Learn more>></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item river">
                        <div class="container h-100 d-md-block">
                            <div class="row align-items-center h-100">
                                <div class="col-12">
                                    <div class="slide-3-text">
                                        <div data-v-5e0e5edc="" class="slide-3 sub-heading"> Robotics teaches problem-solving skills &
                                            <span class="span-orange span-bold">Robotics is fun</span>
                                        </div>
                                        <a class="heading-btn slide-3-btn" href="#">Learn more>></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
    <form action="{{route('student.enquiry')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="call-form">
            <div class="form-head-content">
                Want to know how Future Gurukuls can help your child
                <span class="highlight"> gain the edge?</span>
            </div>

            <div class="form-input-container">
                <input placeholder="Name" type="text" name="name" class="request-input content">
                <input placeholder="Mobile" type="text" name="number" class="request-input content">
                <input placeholder="Email" type="email" name="email" class="request-input content">
                <select name="state">
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
     
                </select>
            </div>

            <div class="connect content">
                <input type="checkbox" name="CheckboxWhatsapp" value="true" checked="checked" class="connect-input">
                <div class="connect-content content">Want to be part of WhatsApp Community?</div>
                <img loading="lazy" src="https://images.avishkaar.cc/misc/home.avishkaar.cc/home/whatsapp-icon.webp"
                    alt="Whatsapp" width="20">
            </div>

            <div class="support content">
                <input type="checkbox" name="CheckboxSupport" value="true" class="connect-input">
                <div class="connect-content content">Need support for an already bought FG product or course?
                </div>
            </div>

            <button type="submit" class="blue-button">Request a Call</button>
        </div>
    </form>



</section>



<!-- Section 2 -->
<section class="home-career">
    <div class="career-heading">
        Do you want to Learn?
    </div>

    <div class="career-items">
        <a href="#" class="item">
            <div class="item-img">
                <img loading="lazy" src="{{asset('fronten/assets/images/icon/robotics.png')}}" alt="Roboticist"
                    class="img">
            </div>
            <div class="content">Robotics</div>
        </a>

        <a href="#" class="item">
            <div class="item-img">
                <img loading="lazy" src="{{asset('fronten/assets/images/icon/app.png')}}" alt="Game Designer"
                    class="img" data-v-0a4c26ff="">
            </div>
            <div class="content">App &amp; Game Dvelopment</div>
        </a>

        <a href="#" class="item">
            <div class="item-img">
                <img loading="lazy" src="{{asset('fronten/assets/images/icon/iot.png')}}"
                    alt="IoT &amp; Electronics Engineer" class="img">
            </div>
            <div class="content">IoT &amp; Make smart devices</div>
        </a>

        <a href="#" class="item">
            <div class="item-img"><img loading="lazy" src="{{asset('fronten/assets/images/icon/drone.png')}}"
                    alt="AI Expert" class="img">
            </div>
            <div class="content">Drone Technology</div>
        </a>
    </div>
</section>
<!-- Section 2 -->

<!-- Best Seller -->

@foreach($categories as $category)
@if($category->category_name_en == 'Kit')
@php
$id = $category->id
@endphp
@endif
@endforeach

@php
$catwiseProduct = App\Models\Product::where('category_id',$id)->orderBy('id','DESC')->get();
@endphp


<!----- learn and coding javascript design start ----->
<div class="gradient-custom-kit">

    <div class="container coding-iot-robotics">
        <div class="row">
            <div class="col-4" id="a" style="background-color: #FFF; padding:15px 5px 5px 5px;">
                <a href="#kits" id="jskit" class="cir-icon-kit"> <span class="material-icons-outlined span-icon ">
                        smart_toy
                    </span>
                    <h6>Kits</h6>
                </a>
            </div>
            <div class="col-4 " id="b" style="padding:15px 5px 5px 5px;">
                <a href="#courses" id="jscourse" class="cir-icon-course"> <span
                        class="material-icons-outlined span-icon">
                        smart_display
                    </span>
                    <h6>Courses</h6>
                </a>
            </div>
            <div class="col-4" id="c" style="padding:15px 5px 5px 5px;">
                <a href="#components" id="jscomponent" class="cir-icon-component"> <span
                        class="material-icons-outlined span-icon">
                        precision_manufacturing
                    </span>
                    <h6>Component</h6>
                </a>
            </div>
        </div>

    </div>


    <div>
        <div id="cir">
            <div class="coding-img container" style="padding-top:20px;">

                <!---- coding-img class is for kits section, Since code has been edited so we have different name --->

                <div class="row">
                    @foreach($catwiseProduct as $product)
                    <div class="col-lg-3 col-md-3 col-6">
                        <div class="product_box">
                            <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">


                                <img src="{{ asset($product->product_thambnail) }}" alt="img">

                                <div class="buy_price">
                                    <div class="product-title">{{ $product->product_name_en }}</div>

                                </div>
                                <div class="product_description">
                                    <p>{{ $product->short_descp_en }}</p>
                                </div>
                                <div class="p-price">
                                    <div class="product-price">₹{{ $product->discount_price }}/-</div>
                                    <div class="product-price-cutted">₹{{ $product->selling_price }}/-</div>
                                </div>
                                <a href="{{route('all.kit')}}" class="buy_btn">
                                    <button class="blue-button">Buy Now</button>
                                </a>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>

                <div class="view-projects-button">
                    <a href="{{route('all.kit')}}" class="button-view">
                        View All Kits
                    </a>
                </div>

            </div>





            <div class="iot-img container" style="padding-top:20px;">

                <div class="row">
                    @foreach($Allcourses as $course)
                    <div class="col-lg-3 col-md-3 col-6">
                        <div class="product_box">
                            <a href="{{route('all.course')}}">


                                <img src="{{ asset($course->course_thambnail) }}" alt="Iphone 12 pro">

                                <div class="buy_price">
                                    <div class="product-title">{{ $course->course_name }}</div>

                                </div>
                                <div class="product_description">
                                    <p>{{ $course->short_descp }}</p>
                                </div>
                                <div class="p-price">
                                    <div class="product-price">₹{{ $course->discount_price }}/-</div>
                                    <div class="product-price-cutted">₹{{ $course->selling_price }}/-</div>
                                </div>
                                <a href="{{route('all.course')}}" target="_self" class="buy_btn">
                                    <button class="blue-button">Buy Now</button>
                                </a>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>


                <div class="view-projects-button">
                    <a href="{{route('all.course')}}" class="button-view">
                        View All Courses
                    </a>
                </div>
            </div>






            @foreach($categories as $category)
            @if($category->category_name_en == 'Robotics')
            @php
            $idr = $category->id
            @endphp
            @endif
            @endforeach

            @php
            $catwiseProductr = App\Models\Product::where('category_id',$idr)->orderBy('id','DESC')->get();
            @endphp

            <div class="robotics-img container" style="padding-top:20px;">

                <!---- coding-img class is for kits section, Since code has been edited so we have different name --->

                <div class="row">
                    @foreach($catwiseProductr as $product)
                    <div class="col-lg-3 col-md-3 col-6">
                        <div class="product_box">
                            <a href="https://fgcomponent.com/">


                                <img src="{{ asset($product->product_thambnail) }}" alt="Iphone 12 pro">

                                <div class="buy_price">
                                    <div class="product-title">{{ $product->product_name_en }}</div>

                                </div>
                                <div class="product_description">
                                    <p>{{ $product->short_descp_en }} ertgrd t5r65 tye56 7y45 4w56ye5 5y 567y54</p>
                                </div>
                                <div class="p-price">
                                    <div class="product-price">₹{{ $product->discount_price }}/-</div>
                                    <div class="product-price-cutted">₹{{ $product->selling_price }}/-</div>
                                </div>
                                <a href="https://fgcomponent.com/" target="_blank" class="buy_btn">
                                    <button class="blue-button">Buy Now</button>
                                </a>
                            </a>
                        </div>
                    </div>
                    @endforeach



                </div>
                <div class="view-projects-button">
                    <a href="https://fgcomponent.com/" class="button-view">
                        All component
                    </a>
                </div>

            </div>
        </div>
    </div>

</div>


<!-- Best Seller Ends -->

<!-- Young Innovators -->
<section style="overflow: hidden;">
    <div class="young-innovators">
        <div class="heading young-innovators-heading">
            <div class="highlight">Young Innovators</div>
            <div>in Action!</div>
        </div>

        <div class="gradient-custom-innovator">
            <div class="innovator">

                <div class="container-fluid ">

                    <div id="carouselInnovator" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <div class="video-card">
                                            <iframe width="80%" height="285"
                                                src="https://www.youtube.com/embed/iAeO-TFTOGM"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-6">
                                        <div class="video-card">
                                            <iframe width="80%" height="285"
                                                src="https://www.youtube.com/embed/iAeO-TFTOGM"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-6">
                                        <div class="video-card">
                                            <iframe width="80%" height="285"
                                                src="https://www.youtube.com/embed/iAeO-TFTOGM"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-6">
                                        <div class="video-card">
                                            <iframe width="80%" height="285"
                                                src="https://www.youtube.com/embed/iAeO-TFTOGM"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselInnovator" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselInnovator" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>

            </div>


            <!---- Mobile Responsive section start for video ----->


            <div class="innovator-mobile">

                <div class="container-fluid ">

                    <div id="carouselInnovatorMobile" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="video-card">
                                            <iframe width="100%" height="215"
                                                src="https://www.youtube.com/embed/iAeO-TFTOGM"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="video-card">
                                            <iframe width="100%" height="215"
                                                src="https://www.youtube.com/embed/iAeO-TFTOGM"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="video-card">
                                            <iframe width="100%" height="215"
                                                src="https://www.youtube.com/embed/iAeO-TFTOGM"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselInnovatorMobile" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselInnovatorMobile" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>






                </div>

            </div>






            <!---- Mobile responsive section end for video   ---->



            <div class="v-window item-group">
                <div class="v-window_container">
                    <div class="young-innovators-items">

                        @foreach($innovators as $item)
                        <a class="young-innovators-item" href="#">
                            <div class="item-image">
                                <img loading="lazy" src="{{$item->image}}" alt="Anu Arth" class="img">
                            </div>
                            <div class="item-name content">{{$item->name}}</div>
                            <div class="project-name content">{{$item->about}}
                            </div>
                        </a>
                        @endforeach



                    </div>
                </div>
            </div>
            <!-- Mobile Responsive -->
            <div class="young-innovators-items-container-mobile">
                <div class="young-innovators-items-head">
                    <div class="young-innovators-items">
                        @foreach($innovators as $item)
                        <a target="_blank" class="young-innovators-item">
                            <div class="item-image">
                                <img loading="lazy" src="{{$item->image}}" alt="Anu Arth" class="img">
                            </div>
                            <div class="item-name content">{{$item->name}}</div>
                            <div class="project-name content">{{$item->about}}</div>
                        </a>
                        @endforeach

                    </div>
                </div>
            </div>



            <div class="view-projects-button">
                <a href="#" class="button-view">
                    View All Projects
                </a>
            </div>
        </div>
    </div>
</section>








<!-- Testinomial -->
<div class="" style="padding-bottom: 50px;">
    <div class="award-section-heading">
        <div class="highlight">What School Management</div>
        <div>Say About Us</div>
    </div>
</div>

<section class="gradient-custom-testinomial">
    <div class="container my-1 py-1">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="text-center mb-4 pb-2">
                    <i class="fas fa-quote-left fa-3x text-white"></i>
                </div>

                <div class="card">
                    <div class="card-body px-4 py-5">
                        <!-- Carousel wrapper -->
                        <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="container">
                                        <div class="testinomial-grid">
                                            <div class="row">

                                                <div class="col-lg-4 col-md-4 col-12">
                                                    <div class="testinomial-grid-img">
                                                        <img
                                                            src="{{asset('fronten/assets/images/testinomial/mt.jpg')}}">
                                                    </div>

                                                </div>

                                                <div class="col-lg-8 col-md-8 col-12">
                                                    <div class="testinomial-text">
                                                        <h4>Mrs. Mayuri Tiwari</h4>
                                                        <h6>Principal, Rameshwar Prasad Satya Narayan Inter College,
                                                            Ayodhya</h6>
                                                        <p>Every School should adopt FG lab, its a lab where students
                                                            are getting true learning by making practical things, it was
                                                            unbelievable that a 8th class students are building Robots,
                                                            I was surprise to see that how this lab is making real life
                                                            Problem Solver, the curriculum and teaching technique of
                                                            this lab making students more creative and improving the
                                                            logical thinking.
                                                            most importantly it is attracting students to learn and
                                                            understand the concept of classroom and they are
                                                            implementing their knowledge in building real life projects.
                                                        </p>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="container">
                                        <div class="testinomial-grid">
                                            <div class="row">

                                                <div class="col-lg-4 col-md-4 col-12">
                                                    <div class="testinomial-grid-img">
                                                        <img
                                                            src="{{asset('fronten/assets/images/testinomial/pp.jpg')}}">
                                                    </div>

                                                </div>

                                                <div class="col-lg-8 col-md-8 col-12">
                                                    <div class="testinomial-text">
                                                        <h4>Mr. Prabhat Kumar Pandey</h4>
                                                        <h6>Principal, V.N.J.Inter College,Ratanpur,Nautanwa</h6>
                                                        <p>We are located in very rural part and i never thought that my
                                                            students can get a proper introduction and learning of 21st
                                                            century's skills but FG lab provides a great exposure to our
                                                            students, they are building lot of smart gadgets, Real life
                                                            projects, Softwares etc. which can help people. we found a
                                                            fire of innovation in our students and all credit goes to
                                                            whole team of Future Gurukuls.</p>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="container">
                                        <div class="testinomial-grid">
                                            <div class="row">

                                                <div class="col-lg-4 col-md-4 col-12">
                                                    <div class="testinomial-grid-img">
                                                        <img
                                                            src="{{asset('fronten/assets/images/testinomial/aj.jpg')}}">
                                                    </div>

                                                </div>

                                                <div class="col-lg-8 col-md-8 col-12">
                                                    <div class="testinomial-text">
                                                        <h4>Mrs. Anjana Pandey</h4>
                                                        <h6>MD, Prema Educational Academy, Menhadawal</h6>
                                                        <p>We have installed FG lab in our Campus and it was shocking to
                                                            see that my students are making Robots, Drone and other
                                                            smart devices.
                                                            This lab introduces a new dimension of science to students,
                                                            It was my dream that in my school students can build real
                                                            life projects and they can fly drones and it is happening
                                                            now.
                                                        </p>
                                                        <p> Thanks to Future Gurukuls and team.</p>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls2" role="button"
                                data-slide="prev">
                                <i class="fas fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls2" role="button"
                                data-slide="next">
                                <i class="fas fa-chevron-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- Carousel wrapper -->
                    </div>
                </div>

                <div class="text-center mt-4 pt-2">
                    <i class="fas fa-quote-right fa-3x text-white"></i>
                </div>
            </div>
        </div>
        <!-- abhishek chaubey scool enquiry s-->

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#schoolEnquiryFormModal">
            Enquire Now
        </button>

        <!-- Modal -->
        <div class="modal fade" id="schoolEnquiryFormModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content school-enquiry-moodal-content">
                    <div class="modal-header border-0">
                        <h5 class="modal-title school-enquiry-modal-title" id="exampleModalLabel">GIVE YOUR SCHOOL THE
                            LEAD ADVANTAGE</h5>
                        <button type="button" class="btn-close school-enquiry-btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body school-enquiry-modal-body">
                        <form action="{{route('school.enquiry')}}" method="POST" enctype="multipart/form-data"
                            class="inline">
                            @csrf

                            <div class="input-icons">

                                <i class="fa-solid fa-users icon"></i>
                                <select class="form-select input-field" aria-label="Default select example"
                                    name="role_at_school">
                                    <option selected>Role at School*</option>
                                    <option value="School Owner">School Owner</option>
                                    <option value="Trustee">Trustee</option>
                                    <option value="Principal">Principal</option>
                                    <option value="Vice Principal">Vice Principal</option>
                                    <option value="Director">Director</option>
                                    <option value="Teacher">Teacher</option>
                                </select>
                                @error('role_at_school') <small class="text-danger">{{$message}}</small> @enderror

                                <span class="fa-solid fa-user icon"></span>
                                <input type="text" class="form-control input-field" id="name" name="name" required
                                    placeholder="Name*">
                                @error('name') <small class="text-danger">{{$message}}</small> @enderror


                                <i class="fa-solid fa-phone icon"></i>
                                <input type="text" class="form-control input-field" id="mobile" name="number" required
                                    placeholder="Phone Number*">
                                @error('number') <small class="text-danger">{{$message}}</small> @enderror


                                <i class="fa-solid fa-envelope icon"></i>
                                <input type="email" class="form-control input-field" id="email" name="email" required
                                    placeholder="Email*">
                                @error('email') <small class="text-danger">{{$message}}</small> @enderror

                                <i class="fa-solid fa-map-location icon"></i>
                                <select class="form-select input-field" aria-label="Default select example"
                                    name="state_name">
                                    <option selected>School in which state*</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>

                                    <option value="Assam">Assam</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadra & Nagar Haveli">Dadra & Nagar Haveli </option>
                                    <option value="Daman & Diu">Daman & Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Ladakh">Ladakh</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>
                                @error('state_name') <small class="text-danger">{{$message}}</small> @enderror


                                <i class="fa-solid fa-arrow-right icon"></i>
                                <select class="form-select input-field" aria-label="Default select example"
                                    name="school_medium">
                                    <option selected>Is Your school English medium ?*</option>
                                    <option value="Hindi">Hindi Medium</option>
                                    <option value="English">English Medium</option>
                                    <option value="Other">Other</option>

                                </select>
                                @error('school_medium') <small class="text-danger">{{$message}}</small> @enderror


                                <i class="fa-solid fa-people-group icon"></i>
                                <select class="form-select input-field" aria-label="Default select example"
                                    name="students_strength">
                                    <option selected>No. of Students in your School*</option>
                                    <option value="Less than 200">Less than 200</option>
                                    <option value="200 to 400">200 to 400</option>
                                    <option value="400 to 800<">400 to 800</option>
                                    <option value="800 to 1500">800 to 1500</option>
                                    <option value="More than 1500">More than 1500</option>

                                </select>
                                @error('students_strength') <small class="text-danger">{{$message}}</small> @enderror

                                <div class="mt-3 m-sm-l form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="auth_phone"
                                        checked>
                                    <label class="form-check-label" for="exampleCheck1">I agree to receive
                                        communications by WhatsApp / SMS / RCS</label>
                                    @error('auth_phone') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                                <button type="submit"
                                    class="btn btn-primary btn-modal-bn mb-3 button-submit-school-enquiry">Book
                                    Now</button>
                            </div>
                        </form>
                        <form class="inline">




                    </div>

                </div>
            </div>
        </div>
        <!-- abhishek chaubey scool enquiry e-->
    </div>
</section>



<!--  Testinomial end -->



@php
$brands = App\Models\Brand::get();
@endphp


<!-- support -->



<!-- Award -->

<div class="award-section-heading" style="padding-top: 50px;">
    <div class="highlight">Why are we</div>
    <div>Trustworthy?</div>
</div>



<section class="gradient-custom-kit" style="padding:55px 20px 5px 20px;">


    <div class="container award ">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-12">
                <img src="{{asset('fronten/assets/images/media/award.jpg')}}" alt="">

            </div>

            <div class="col-lg-6 col-md-6 col-12 award-text">
                <h3>Award for startup India Seed Fund Scheme</h3>
                <p>We are incubated at Atal Incubation Centre Pondicherry. And we have been selected under Startup India
                    seed fund scheme.</p>
            </div>

        </div>




    </div>
</section>


<!-- Award end -->

<!-- News -->

<div class="award-section-heading" style="padding-top: 50px;">
    <div class="highlight">Media</div>
    <div>Coverage</div>
</div>

<div class="news gradient-custom-innovator" style="overflow: hidden; padding-top: 50px;">



    <div class="news-items">
        <div class="row">
            <div class="col-md-12">
                <div id="news-slider" class="owl-carousel">
                    <div class="post-slide">
                        <div class="post-img">
                            <a href="#">
                                <img class="pic-1" src="{{asset('fronten/assets/images/media/1.jpg')}}">

                            </a>
                        </div>
                        <div class="post-review">
                            <h3 class="post-title"><a href="#">Media is covering our hard work</a></h3>
                            <p class="post-description">A local news paper has covered our hard work. We teach Robotics,
                                Drone technology, coding, IoT etc. to school students.</p>
                        </div>
                    </div>

                    <div class="post-slide">
                        <div class="post-img">
                            <a href="#">
                                <img class="pic-1" src="{{asset('fronten/assets/images/media/3.jpg')}}">

                            </a>
                        </div>
                        <div class="post-review">
                            <h3 class="post-title"><a href="#">Times of Ayodhya covered us.</a></h3>
                            <p class="post-description">Our video got 2.4 million views on social media.</p>
                        </div>
                    </div>

                    <div class="post-slide">
                        <div class="post-img">
                            <a href="#">
                                <img class="pic-1" src="{{asset('fronten/assets/images/media/2.jpg')}}">

                            </a>
                        </div>
                        <div class="post-review">
                            <h3 class="post-title"><a href="#">Hindustan newspaper</a></h3>
                            <p class="post-description">One of the famous newspaper in India, Hindustan covered story of
                                our students.</p>
                        </div>
                    </div>


                    <div class="post-slide">
                        <div class="post-img">
                            <a href="#">
                                <img class="pic-1" src="{{asset('fronten/assets/images/media/4.jpg')}}">

                            </a>
                        </div>
                        <div class="post-review">
                            <h3 class="post-title"><a href="#">Times of Ayodhya covered our story.</a></h3>
                            <p class="post-description">Our video got 2.4 million views on social media.</p>
                        </div>
                    </div>






                </div>
            </div>
        </div>
    </div>
</div>
<!-- News -->


<!-- Trust and support -->

<section style="overflow: hidden;">
    <div class="partners">
        <div class="award-section-heading">
            <div class="highlight">Trusted and</div>
            <div>Supported By</div>
        </div>

        <div class="partner-items">
            <div class="container">
                <section class="customer-logos slider">
                    <!----- @foreach($brands as $brand)
                        <div class="slide" style="width: 174px; outline: none;">
                            <div class="partners-item-container" style="width: 100%; display:inline-block;">
                                <div class="partners-item">
                                    <img
                                        src="{{$brand->brand_image}}">
                                </div>
                            </div>
                        </div>
                        @endforeach  --->
                    <div class="slide" style="width: 174px; outline: none;">
                        <div class="partners-item-container" style="width: 100%; display:inline-block;">
                            <div class="partners-item">
                                <img src="{{asset('fronten/assets/images/support/aicpecf.png')}}">
                            </div>
                        </div>
                    </div>
                    <div class="slide" style="width: 174px; outline: none;">
                        <div class="partners-item-container" style="width: 100%; display:inline-block;">
                            <div class="partners-item">
                                <img src="{{asset('fronten/assets/images/support/startup.png')}}">
                            </div>
                        </div>
                    </div>
                    <div class="slide" style="width: 174px; outline: none;">
                        <div class="partners-item-container" style="width: 100%; display:inline-block;">
                            <div class="partners-item">
                                <img src="{{asset('fronten/assets/images/support/sisf.png')}}">
                            </div>
                        </div>
                    </div>
                    <div class="slide" style="width: 174px; outline: none;">
                        <div class="partners-item-container" style="width: 100%; display:inline-block;">
                            <div class="partners-item">
                                <img src="{{asset('fronten/assets/images/support/dpiit.png')}}">
                            </div>
                        </div>
                    </div>
                    <div class="slide" style="width: 174px; outline: none;">
                        <div class="partners-item-container" style="width: 100%; display:inline-block;">
                            <div class="partners-item">
                                <img src="{{asset('fronten/assets/images/support/startup.png')}}">
                            </div>
                        </div>
                    </div>
                    <div class="slide" style="width: 174px; outline: none;">
                        <div class="partners-item-container" style="width: 100%; display:inline-block;">
                            <div class="partners-item">
                                <img src="{{asset('fronten/assets/images/support/aicpecf.png')}}">
                            </div>
                        </div>
                    </div>
                    <div class="slide" style="width: 174px; outline: none;">
                        <div class="partners-item-container" style="width: 100%; display:inline-block;">
                            <div class="partners-item">
                                <img src="{{asset('fronten/assets/images/support/dpiit.png')}}">
                            </div>
                        </div>
                    </div>
                    <div class="slide" style="width: 174px; outline: none;">
                        <div class="partners-item-container" style="width: 100%; display:inline-block;">
                            <div class="partners-item">
                                <img src="{{asset('fronten/assets/images/support/sisf.png')}}">
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>
</section>



<!-- Partners start -->

<!-- Partners end-->




<!-- Subscribe -->
<div id="subscribe" style="overflow: hidden;">
    <div class="subscribe-container">
        <div class="head heading">Subscribe Now</div>
        <input type="email" placeholder="Email Address" class="subscribe-input">
        <button class="blue-button">Subscribe</button>
    </div>
</div>
<!-- Subscribe -->




<!-----  OLD Code ------>


@endsection
