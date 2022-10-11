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
				  <h3 class="box-title">Replace Video</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					


					<form method="post" action="{{ route('update-video') }}" enctype="multipart/form-data" >
						@csrf
					  						
							<input type="hidden" name="id" class="form-control" value="{{$videos->id}}">

							<input type="hidden" name="old_video" class="form-control" value="{{$videos->video}}" >

							<div class="form-group">
								<h5>video Name<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="video_name" class="form-control" value="{{$videos->video_name}}">
								@error('video_name')
										<span class="text-danger">{{$message}}</span>

									@enderror
								</div>
							</div>

								<div class="form-group">
								<h5>video File<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="file" name="video_file" class="form-control" value="{{$videos->video}}">
								@error('video_file')
										<span class="text-danger">{{$message}}</span>

									@enderror
								</div>
							</div>



						

					
						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-primary mb-5" value="update video">
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