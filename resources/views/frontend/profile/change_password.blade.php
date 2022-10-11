@extends('frontend.main_master')
@section('content')

<div class="body-container">
    <div class="container">
        <div class="row">
         @include('frontend.common.user_sidebar') 

           <div class="col-md-2">
              
          </div> <!-- //end col md-2 ---> 

           <div class="col-md-6">
              <div class="card">
                  <h3 class="text-center"><span class="text-danger">Change your password</h3>

                  <div class="card-body">
                  <form method="post" action="{{route('user.password.password')}}">
            @csrf
            <div class="row">
            <div class="col-12">            
            
            <div class="row">
              <div class="col-6">
              <div class="form-group">
                <h5>Current Password<span class="text-danger">*</span></h5>
                <div class="controls">
                  <input type="password" id="current_password" name="oldpassword" class="form-control" required=""></div>
              </div>

              <div class="form-group">
                <h5>New Password<span class="text-danger">*</span></h5>
                <div class="controls">
                  <input type="password" id="password" name="password" class="form-control" required=""></div>
              </div>

              <div class="form-group">
                <h5>Confirm Password<span class="text-danger">*</span></h5>
                <div class="controls">
                  <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required=""></div>
              </div>

            </div>

            </div>

          
            <div class="text-xs-right">
              <input type="submit" class="btn btn-rounded btn-primary mb-5" value="update">
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
