@extends('frontend.main_master')
@section('content')

@section('title')
My course || Future Gurukuls
@endsection



<section class="mycourse">
     <!---Css file is fgstyle.css -->
    <div class="mycourse_header">
        <div class="container">
            <h2>My Courses</h2>
        </div>
    </div>
    <div class="container" style="width:100%; padding-top: 15px; text-align: center;">
         <div class="row">
        @foreach($courses as $course)

        @php
        $id = $course->course_id;
        $courseid = App\Models\Course::where('id',$id)->first();

        @endphp 
       
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-top:10px;">
        <div class="card" style="width: 80%;">
          <img class="card-img-top" src="{{ asset($courseid->course_thambnail) }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{ $courseid->course_name}}</h5>
            <p class="card-text">{{ $courseid->short_descp}}</p>
            <a href="{{route('tutorial',$course->course_id )}}" class="btn btn-primary">Watch tutorial</a>
          </div>
        </div>
        </div>
         
        @endforeach
         </div>
    </div>

</section>



@endsection
