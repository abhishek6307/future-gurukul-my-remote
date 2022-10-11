@extends('frontend.main_master')
@section('content')

@section('title')
My course || Future Gurukuls
@endsection


    <section style="background: #fff;">
          <div class="container-fluid">
          <div class="row">

          <div class="col-lg-9 col-md-9 col-12 video">      
          <div class="video-box">
          <video controls controlsList="nodownload" preload="metadata">
          <source src="{{asset($playVideo->video)}}" type="video/mp4">
         
          </video>

          <div class="video-bottom">
           <p> "You can buy required components to build project" </p>
          </div>

          </div>

            

     
          </div>


            <div class="col-lg-3 col-md-3 col-12">

              <div class="video-playlist sticky-top" style="width: 100%;">
              <div class="video-header ">
                <h1>Course Content</h1>
              </div>
              <ul class="list-group list-group-flush">
                
                @foreach($videos as $video)
                <div class="video-link">
                <li class="list-group-item"><a href="{{route('play-video',['courseId' => $course_id, 'videoId' => $video->id])}}">{{$video->video_name}}</a>
                </li>
                </div>
                @endforeach

                 @foreach($videos as $video)
                <div class="video-link">
                <li class="list-group-item"><a href="{{route('play-video',['courseId' => $course_id, 'videoId' => $video->id])}}">{{$video->video_name}}</a>
                </li>
                </div>
                @endforeach

                  @foreach($videos as $video)
                <div class="video-link">
                <li class="list-group-item"><a href="{{route('play-video',['courseId' => $course_id, 'videoId' => $video->id])}}">{{$video->video_name}}</a>
                </li>
                </div>
                @endforeach
              </ul>
            </div>

            </div>
          </div>
   </div>
    </section>
    <script src="./video-list.js"></script>
    <script src="./script.js"></script>
@endsection