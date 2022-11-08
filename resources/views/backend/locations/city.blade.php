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
				  <h3 class="box-title">Cities List <span class="badge badge-pill badge-danger"> {{ count($cities) }} </span> </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
                                <th>Id</th>
								<th>State</th>
								<th>City</th>
								
								
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                        <?php 
								$i=0;
							?>
	    @foreach($cities as $item)
		<tr>
            <td>{{++$i}}</td>
			<td>{{$item['state']['state_name']}}</td>
			<td>{{$item->city_name}}</td>
			
			
			<td>
				<a href="{{route('subcategory.edit', $item->id)}}" class="btn btn-info" title="Edit-Data"><i class="fa fa-pencil"></i></a>
				<a href="{{route('subcategory.delete', $item->id)}}" class="btn btn-danger" id="delete" title="Delete-Data"><i class="fa fa-trash"></i></a>
			</td>
								
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
				  <h3 class="box-title">Add City</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					


					<form method="post" action="{{route('city.store')}}">
						@csrf
					  						
						
						<div class="form-group">
								<h5>Select Category <span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="state_id" class="form-control">
										<option value="" selected="" disabled="">Select State</option>
										 @foreach($states as $state)
										  <option value="{{$state->id}}">{{$state->state_name}}</option>
										 @endforeach
									</select>
								</div>
							</div>

							<div class="form-group">
								<h5>City Name<span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="city_name" class="form-control">
								@error('city_name')
										<span class="text-danger">{{$message}}</span>

									@enderror
								</div>
							</div>

						

						

					
						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add">
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