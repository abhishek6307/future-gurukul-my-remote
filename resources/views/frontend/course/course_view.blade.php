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

        <section id="products" class="mt-0">
      

          <div class="mb-1 container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#" target="_self" class="">Home</a>
                    </li>

                    <li class="breadcrumb-item active">
                        <span aria-current="location">Course</span>
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

            <div class="container">
                <div class="row">
                    @foreach($courses as $course)

                    @php
                      $cid=$course->coursecategory_id;
                      $crsid = $course->id;
                      $uid = Auth::id();
                      $courseid = App\Models\CourseCategory::where('id',$cid)->first(); 

                      $value=App\Models\EnrolledCourse::where('user_id',$uid)->where('course_id',$crsid)->count(); 

                    @endphp 


                    <div class="mb-4 px-2 px-lg-3 col-lg-4 col-xl-3 col-6">
                        <div class="card h-100">

                            <div class="row mt-sm-4">
                                <div class="col-sm-10 offset-sm-1"><a href="/courses/robotics-microdegree" class=""><img
                                            src="{{ asset($course->course_thambnail) }}"
                                            alt="image" class="w-100 img-fluid w-100"></a></div>
                            </div>
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-sm-8">
                                        <div class="categories">
                                          <div class="category-item kit-type"
                                                style="color: #017DDD; border: 1px solid #017DDD;">
                                                 {{ $courseid->category_name}}
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
                                </div> <br> <a href="/courses/robotics-microdegree" class="">
                                    <div class="h5">{{ $course->course_name }}</div>
                                </a>
                                <p style="line-height: 1.2; font-size: 0.9rem;">
                                 {{ $course->short_descp }}
                                </p>
                                  <div class="d-flex align-items-center prices" style="gap: 0.8rem;">
                                    <div class="text-muted"><span class="slash-price">₹ {{ $course->selling_price }} /-</span></div>
                                    <div class="h5 font-weight-normal mb-0">
                                        ₹ {{ $course->discount_price }} /-
                                    </div>
                                </div>
                            </div>
                            @if($value == 0)
                            <div class="card-footer bg-white border-0"><a href="{{ url('course/details/'.$course->id.'/'.$course->course_slug ) }}"
                                    class=""><button type="button" class="btn btn-blue btn-block rounded-pill">
                                        Enroll Now
                                    </button></a></div>
                            @else
                            <div class="card-footer bg-white border-0"><a  href="{{ route('mycourse') }}"
                                    class=""><button type="button" class="btn btn-success btn-block rounded-pill">
                                        Enrolled
                                    </button></a></div>
                            @endif

                        </div>
                    </div>
                     @endforeach
                    
    
                </div>
            </div>
        </section>
    </div>

@endsection