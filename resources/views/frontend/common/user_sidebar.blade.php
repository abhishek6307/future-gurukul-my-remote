@php

$id = Auth::user()->id;
$user = App\Models\User::find($id);

@endphp


<div class="col-md-2  profile-nav-box" style="height:12%;"><br>
    <img class="profile-nav-image" style="border-radius: 50%"
        src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg') }}"
        width="10%"><br><br>

    <ul class="list-group list-group-flush">

   
       <a href="{{route('user.profile')}}" class="nav-link content-btn-profile profile-btn-active btn btn-profile-nav">
        <div class=""><i class="fas  mx-2 fa-home"></i></div>
        Home
        </a>
       <a href="{{route('user.profile')}}" class="nav-link content-btn-profile btn btn-profile-nav">
        <div class=""><i class="fas  mx-2 fa-upload"></i></div>
        Profile Update
        </a>
       <a href="{{route('user.change.password')}}" class="nav-link content-btn-profile btn btn-profile-nav">
        <div class=""><i class="fas  mx-1 fa-wrench"></i></div>
        Change Password
        </a>
       <a href="{{ route('my.orders') }}" class="nav-link content-btn-profile btn btn-profile-nav">
        <div class=""><i class="fas  mx-2 fa-robot"></i></div>
        My Orders
        </a>
       <a href="{{ route('cancel.orders') }}" class="nav-link content-btn-profile btn btn-profile-nav">
        <div class=""><i class="fas  mx-2 fa-close"></i></div>
        Cancel Orders
        </a>
        <a href="{{ route('return.order.list') }}" class="nav-link content-btn-profile btn btn-profile-nav">
         <div class=""><i class="fas  mx-2 fa-undo"></i></div>
        Return Orders         </a>
       <a href="{{route('user.logout')}}" class="nav-link content-btn-profile btn btn-profile-nav">
        <div class=""><i class="fas  mx-2 fa-power-off"></i></div>
        Logout
        </a>
 
    

    </ul>

</div> <!-- // end col md 2 -->
