@php

    $id = Auth::user()->id;
    $user = App\Models\User::find($id);

@endphp


			<div class="col-md-2"><br> 
				<img class="card-img-top" style="border-radius: 50%" src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg') }}" width="10%"><br><br>
				
				<ul class="list-group list-group-flush">
 				<a href="{{route('user.profile')}}" class="btn btn-primary btn-sm btn-block">Home</a>
                <a href="{{route('user.profile')}}" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                <a href="{{route('user.change.password')}}" class="btn btn-primary btn-sm btn-block">Change Password</a>
                <a href="{{ route('my.orders') }}" class="btn btn-primary btn-sm btn-block">My Orders</a>

                <a href="{{ route('return.order.list') }}" class="btn btn-primary btn-sm btn-block">Return Orders</a>

				<a href="{{ route('cancel.orders') }}" class="btn btn-primary btn-sm btn-block">Cancel Orders</a>
                <a href="{{route('user.logout')}}" class="btn btn-danger btn-sm btn-block">Logout</a>
					
				</ul>
				
			</div> <!-- // end col md 2 -->






		    <div class="container mt-4">

        <div class="row border">
            <div class="border text-center text-lg-center" style="font-size: 30px;">
                <h4 class="text-center" style="margin: 18px;">Edit Profile</h4>
            </div>
            <div class="col-md-2">


                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu bg-white border-end">
                        <div class="nav ">
                            <a class="nav-link text-dark d-flex flex-column align-items-center justify-content-center"
                                href="index.html">
                                <img src="download.png" alt="" style="border-radius: 50%;" height="100px" width="100px">
                                Abhishek Chaubey
                            </a>
                            <a class="nav-link text-dark active" href="index.html">
                                <div class="sb-nav-link-icon  text-dark"><i class="fas fa-home"></i></div>
                                Home
                            </a>
                            <a class="nav-link text-dark " href="edit_profile.html">
                                <div class="sb-nav-link-icon text-dark"><i class="fas fa-upload"></i></div>
                                Profile Update
                            </a>
                            <a class="nav-link text-dark " href="edit_password.html">
                                <div class="sb-nav-link-icon text-dark"><i class="fas fa-wrench"></i></div>
                                Change Password
                            </a>
                            <a class="nav-link text-dark" href="my_orders.html">
                                <div class="sb-nav-link-icon text-dark"><i class="fas fa-robot"></i></div>
                                My Orders
                            </a>
                            <a class="nav-link text-dark" href="return_orders.html">
                                <div class="sb-nav-link-icon text-dark"><i class="fas fa-undo"></i></div>
                                Return Orders
                            </a>
                            <a class="nav-link text-dark" href="cancel_orders.html">
                                <div class="sb-nav-link-icon text-dark"><i class="far fa-window-close"></i></div>
                                Cancel Orders
                            </a>
                            <a class="nav-link text-dark" href="logout.html">
                                <div class="sb-nav-link-icon text-dark"><i class="fas fa-power-off"></i></div>
                                Logout
                            </a>
                        </div>
                    </div>
                </nav>
                <hr>
            </div>

            <div class="col-md-6" style="margin: 0 auto; width: 43%;">



                <form class="mt-lg-5">
                    <div class="form-group">
                        <label for="current_password">Current Password * </label>
                        <input type="password" class="form-control border-secondary" id="current_password" value="">

                    </div>
                    <div class="form-group">
                        <label for="new_password">New Password * </label>
                        <input type="password" class="form-control border-secondary" id="new_password"
                            aria-describedby="emailHelp" value="">

                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password * </label>
                        <input type="password" class="form-control border-secondary" id="confirm_password" value="">

                    </div>



                    <button type="submit" class="btn btn-dark">Submit</button>
                </form>

            </div>
        </div>
    </div>