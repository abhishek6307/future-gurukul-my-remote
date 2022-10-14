@extends('frontend.main_master')
@section('content')

<div class="body-container" style="margin-top:100px">
    <div class="container profile-update-container" >
   
        <div class="row row-profile-form d-flex align-items-center justify-content-center flex-row">
         @include('frontend.common.user_sidebar')

        
         
           <div class="col-md-10 " >
                  
           <div class=" row text-center text-lg-center profile-top-text" style="font-size: 30px;">
              <h3 class="text-center"><span class="text-danger change-password-heading">Change your password</h3>
            </div>
              <div class="card border-0  profile-card">
               

                  <div class="card-body profile-change-password-card-body">
                  <form method="post" action="{{route('user.password.password')}}">
            @csrf
            <div class="row">
            <div class="col-12">            
            
            <div class="row">
              <div class="col-8">
              <div class="form-group">
                <h6 class="labels-change-password">Current Password<span class="text-danger">*</span></h6>
                <div class="controls">
                  <input type="password" id="current_password" name="oldpassword" class="form-control profile-all-input" required=""></div>
              </div>

              <div class="form-group">
                <h6 class="labels-change-password">New Password<span class="text-danger">*</span></h6>
                <div class="controls">
                  <input type="password" id="password" name="password" class="form-control profile-all-input" required=""></div>
              </div>

              <div class="form-group">
                <h6 class="labels-change-password">Confirm Password<span class="text-danger">*</span></h6>
                <div class="controls">
                  <input type="password" id="password_confirmation" name="password_confirmation" class="form-control profile-all-input" required=""></div>
              </div>

            </div>

            </div>

          
            <div class="text-xs-right">
              <input type="submit" class="btn btn-rounded profile-password-change-button mb-5" value="update">
            </div>
            </div>

              
              
              
              
              
            </div>
                
          </form>
            </div>
            
        
                  </div>

              </div>
          </div> <!-- //end col md-6 ---> 

        </div> <!-- //end row --->
    </div>
    
</div>




@endsection
