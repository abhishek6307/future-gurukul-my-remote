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
				  <h3 class="box-title">Kits and related courses </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Kit</th>
								<th>Course</th>
						
							</tr>
						</thead>
						<tbody>
	    @foreach($maps as $map)
		<tr>
			<td>{{$map['kit']['product_name_en']}}</td>
			<td>{{$map['course']['course_name']}}</td>
							
		</tr>
		@endforeach
							
						</tbody>
						
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->






		 <div class="col-4">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Map Course with kit</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					


					<form method="post" action="{{route('map.store')}}">
						@csrf
					  						
						
						<div class="form-group">
								<h5>Select Kit <span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="kit_id" class="form-control">
										<option value="" selected="" disabled="">Select Kit</option>
										 @foreach($kits as $kit)
										  <option value="{{$kit->id}}">{{$kit->product_name_en}}</option>
										 @endforeach
									</select>
								</div>
							</div>

								<div class="form-group">
								<h5>Map Course <span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="course_id" class="form-control">
										<option value="" selected="" disabled="">Select Course</option>
										 @foreach($courses as $course)
										  <option value="{{$course->id}}">{{$course->course_name}}</option>
										 @endforeach
									</select>
								</div>
							</div>

					

						

					
						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Map">
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