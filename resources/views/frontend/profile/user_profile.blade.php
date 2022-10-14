@extends('frontend.main_master')
@section('content')

<div class="body-container" style="margin-top:100px">
    <div class="container profile-update-container" >
   
        <div class="row  d-flex align-items-center justify-content-center flex-row">
         @include('frontend.common.user_sidebar')

        
         
           <div class="col-md-10 " >
                  
           <div class=" row text-center text-lg-center profile-top-text" style="font-size: 30px;">
              <h3 class="text-center Update-profile-heading"><span class="text-danger">Hi....</span><strong>
                      {{Auth::user()->name}}
                  </strong>Update your profile</h3>
            </div>
              <div class="card border-0  profile-card">
         
     
                  <div class="card-body">
                    <form method="POST" action="{{route('user.profile.store')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group ">
                      <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
                      <input type="text" id="name" name="name" class="form-control profile-all-input" value="{{$user->name}}">
                      
                  </div>

                  <div class="form-group">
                      <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
                      <input type="email" id="email" name="email" class="form-control profile-all-input" value="{{$user->email}}">
                      
                  </div>
                  
                  <div class="form-group">
                      <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>
                      <input type="text" id="phone" name="phone" class="form-control profile-all-input" value="{{$user->phone}}">
                      
                  </div>

                  <div class="form-group">
                      <label class="info-title" for="exampleInputEmail1">Profile Image <span>*</span></label>
                      <input type="file" name="profile_photo_path" class="form-control profile-all-input" value="{{$user->phone}}">
                      
                  </div>

                  <div class="form-group">
                      <button type="submit" class="btn  profile-update-button">Update</button>
                      
                  </div>

                    </form>
                  </div>

              </div>
          </div> <!-- //end col md-6 ---> 

        </div> <!-- //end row --->
    </div>
    
</div>




@endsection
