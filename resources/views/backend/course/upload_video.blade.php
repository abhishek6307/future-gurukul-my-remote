@extends('admin.admin_master')

@section('admin')


	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
		    <div class="col-8">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Sub Category</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					


					<form method="post" action="{{ route('store-video') }}" enctype="multipart/form-data" >
						@csrf
					  						
	
						
						<div class="form-group">
								<h5>Select Course <span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="course_id" class="form-control">
										<option value="" selected="" disabled="">Select Course</option>
										 @foreach($course as $cat)
										  <option value="{{$cat->id}}"> {{$cat->course_name}}</option>
										 @endforeach
									</select>
								</div>
							</div>

							<div class="form-group">
								<h5>video Name<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="video_name" class="form-control" value="video name">
								@error('video_name')
										<span class="text-danger">{{$message}}</span>

									@enderror
								</div>
							</div>

									<div class="form-group">
								<h5>video File<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="file" name="video_file" class="form-control" value="select video">
								@error('video_file')
										<span class="text-danger">{{$message}}</span>

									@enderror
								</div>
							</div>



						

					
						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-primary mb-5" value="upload video">
						</div>

					</form>
				    </div>
					
					
					
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
 




@endsection