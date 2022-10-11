@extends('frontend.main_master')
@section('content')

    
<section class="login-form-bg">
    <div class="container">
    <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h4>LOGIN</h4>
        <div class="underline-title"></div>
      </div>
      <form method="post" class="form">
        <label for="user-email" style="padding-top:13px">
            &nbsp;Email
          </label>
        <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="user-password" style="padding-top:22px">&nbsp;Password
          </label>
        <input id="user-password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
        <a href="#">
          <legend id="forgot-pass">Forgot password?</legend>
        </a>
        <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
        <div style="margin-top: 3px; padding-bottom:20px; text-align: center;">
        <a href="#" id="signup" >Don't have account yet?</a>
    </div>
      </form>
    </div>
  </div>
</div>
</section>

<!----  <section class=" login-section">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">

                <div class="col-md-6 col-lg-6 col-xl-12 col-12 offset-md-3 offset-lg-3 signin-section ">


                <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                 @csrf
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-linkedin-in"></i>
                            </button>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Or</p>
                        </div>

                      
                        <div class="form-outline mb-4">
                            <input type="email" id="email" name="email" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" required="">
                                 @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                         

                       
                        <div class="form-outline mb-3">
                            <input  type="password" id="password" name="password" class="form-control form-control-lg"
                                placeholder="Enter password" />
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                           
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="{{route('password.request')}}" class="forgot-password pull-right" class="text-body">Forgot password?</a>
                        </div>
                            
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                                    class="link-danger" data-toggle="modal" data-target="#myModalCourse">Register</a></p>
                        </div>
                     </form>





                </div>
            </div>
        </div>
    
    </section>  -->


<!------ register model --->
 <!--- <div class="modal fade" id="myModalCourse">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
       
        
     
        <div class="request-call-model modal-body">
            <div style="padding-bottom: 30px;">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 requestcall-form-img">
                        
                        <img src="#" alt="request a call">
                    </div>

                    
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 request-call-form">
                    
                    <h4>Sign Up</h4>
                    
                    
                     <form method="POST" action="{{ route('register') }}">
            @csrf


            <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
            <input type="text" id="name" name="name" class="form-control unicase-form-control text-input">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
            <input type="email" id="rgemail" name="email" class="form-control unicase-form-control text-input">
            @error('rgemail')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>
            <input type="text" id="phone" name="phone" class="form-control unicase-form-control text-input">
            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
            <input type="password" id="password" name="password" class="form-control unicase-form-control text-input">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
         <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control unicase-form-control text-input" >
            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
    </form>
                    
                    
                    
                </div>
                </div>
            </div>
        </div>
        
      
        
      </div>
    </div>
 </div>  --->
<!------ register model end --->

@endsection