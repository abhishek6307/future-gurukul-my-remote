    <!-- Header -->
    <!-----<header class="header">
        <div class="pre-header">
            
        </div>
       
        <div class="header-main">
            <div class="open-nav-menu">
                <span></span>
            </div>
            <div class="menu-overlay"></div>

         @php
         $setting = App\Models\SiteSetting::find(1);
         @endphp
       

            <div class="logo">
                   <a href="{{route('fg')}}"><img src="{{asset('fronten/assets/images/logo.png')}}" width="200px" height="auto" alt=""></a>
            </div>
          
            <nav class="nav-menu">
                <div class="close-nav-menu" id="close">
                    <img src="https://avishkaar.netlify.app/img/close.svg" alt="close" />
                </div>
                <ul class="menu">
                    <li class="menu-item menu-item-has-children">
                        <a href="#" data-toggle="sub-menu">Shop <i class="fa fa-chevron-down"></i></a>
                        <ul class="sub-menu menu-1">
                            
                            <li class="menu-item"><a href="https://fgcomponent.com/" target="_blank">Component</a></li>
                            <li class="menu-item"><a href="https://fgcomponent.com/" target="_blank">Kit</a></li>
                           
                        </ul>
                    </li>


          @php
          $categories = App\Models\Category::orderBy('category_name_en','ASC')->get();
          @endphp
                    <li class="menu-item menu-item-has-children">
                        <a href="#" data-toggle="sub-menu">Learn <i class="fa fa-chevron-down"></i></a>
                        <ul class="sub-menu menu-2">
                            @foreach($categories as $category)
                            <li class="menu-item"><a href="{{ url('category/product/'.$category->id.'/'.$category->category_slug_en ) }}">{{ $category->category_name_en }}</a></li>
                            @endforeach
                            
                            
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="#" data-toggle="sub-menu">Communities <i class="fa fa-chevron-down"></i></a>
                        <ul class="sub-menu menu-3">
                            <li class="menu-item"><a href="#">comming soon</a></li>
                          
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="#" data-toggle="sub-menu">About Us <i class="fa fa-chevron-down"></i></a>
                        <ul class="sub-menu menu-4">
                            <li class="menu-item"><a href="#">Vission</a></li>
                            <li class="menu-item"><a href="#">Team</a></li>
                            
                               <li class="menu-item">
                        @auth
                        <a href="{{ route('user.profile') }}" class="sign-in">User Profile</a>
                        @else
                        <a href="{{ route('login') }}" class="sign-in">Sign In</a>
                        @endauth
                    </li>
                        </ul>
                    </li>
                </ul>
            </nav>
       
            <nav class="right-icons nav-menu">
                <ul class="menu">
                    <li class="menu-item">
                        <a href="#"><img
                                src="https://images.avishkaar.cc/misc/home.avishkaar.cc/home/header/search.webp"
                                alt="" /></a>
                    </li>
                    <li class="menu-item" id="minicart">
                        <a href="#"><img
                                src="https://images.avishkaar.cc/misc/home.avishkaar.cc/home/header/cart-icon.webp"
                                alt="" /></a>
                    </li>
                    <li class="menu-item">
                        @auth
                        <a href="{{ route('user.profile') }}" class="sign-in">User Profile</a>
                        @else
                        <a href="{{ route('login') }}" class="sign-in">Sign In</a>
                        @endauth
                    </li>
                </ul>
            </nav>
        </div>

    </header>  --->
    <!--Header  -->


 <div class="my-nav">
    <nav
      class="navbar navbar-expand-lg navbar-light bg-faded avnav justify-content-sm-start fixed-top"
    >

      @php
        $setting = App\Models\SiteSetting::find(1);
      @endphp

      <div class="container-fluid">
          <a href="{{route('fg')}}" class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 mr-auto control-logo"
          ><img src="{{asset('fronten/assets/images/logo.png')}}" width="200px" height="auto" alt=""></a
        >
        <div style="padding-top: 3px;">
        <button class="navbar-toggler align-self-start" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
       </div>
        <div class="collapse navbar-collapse bg-faded p-3 p-lg-0 mt-5 mt-lg-0 d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end mobileMenu" style="background-color: #fff;"
          id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto nav-pc">

            @auth
                   <li class="nav-item drop_menu_visibility">
                  <a href="{{ route('user.profile') }}" class="nav-link nav-font">My Profile</a>
                  </li>

                <li class="nav-item drop_menu_visibility">
                  <a href="{{ route('mycourse') }}" class="nav-link nav-font">My course</a>
                </li>

            @endauth

           


              <li class="nav-item">

               <a href="{{route('all.kit')}}" class="nav-link nav-font">Kits </a>
           
              
              </li>
            
          @php
          $categories = App\Models\Category::orderBy('category_name_en','ASC')->get();

          @endphp


              <li class="nav-item">

               <a href="{{route('all.course')}}" class="nav-link nav-font">Courses </a>
              
              </li>
              
            <li class="nav-item">
                <div class="dropdown">
                  <a class="nav-link nav-font dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   About Us
                  </a>
                  <div class="dropdown-menu drop-link" aria-labelledby="dropdownMenu2">
                    <a class="dropdown-item" type="button">Vision</a>
                    <a class="dropdown-item" type="button">Team</a>
                    
                  </div>
                </div>
              </li>


               <li class="nav-item">

               <a href="{{route('school')}}" class="nav-link nav-font">School </a>
           
              
              </li>

                 <li class="nav-item active">
               <a href="https://fgcomponent.com/" target="_blank" class="nav-link nav-font" >Shop <span class="sr-only">(crrent)</span></a>
              </li>


          </ul>
          <ul class="navbar-nav mr-5">
              
             
          <li class="nav-item search"><a href="#">Search &nbsp;<img
            src="https://images.avishkaar.cc/misc/home.avishkaar.cc/home/header/search.webp"
            alt="" /> </a> </li>

          <li class="nav-item signin">
                @auth

                 <div class="dropdown ">
                  <a class="nav-link nav-font dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  User Profile
                  </a>
                  <div class="dropdown-menu drop-link " aria-labelledby="dropdownMenu2">
                    <div class="drop_visibility">
                        <a href="{{ route('user.profile') }}" class="dropdown-item" type="button">Profile</a>
                    <a href="{{ route('mycourse') }}" class="dropdown-item" type="button">My course</a>
                    </div>
                    
                    <a href="{{route('user.logout')}}" class="dropdown-item" type="button">Logout</a>
                    
                  </div>
                </div>
                @else
                <a href="{{ route('login') }}" class="nav-link">Sign In</a>
                @endauth
           
          </li>
          </ul>
        </div>
        <div class="order-1 order-lg-0 ">
            <div  class="basket-item-bg">
             <div class="basket-item-count"><span class="count" id="cartQty"> </span></div>

            </div>
       
          <a href="{{ route('mycart') }}">
            <div class="basket-item-img"><img
            src="https://images.avishkaar.cc/misc/home.avishkaar.cc/home/header/cart-icon.webp"
            alt="" /></a></div>
      </div>
      </div>
      
    </nav>
     
  </div>