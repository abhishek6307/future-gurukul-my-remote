@extends('admin.admin_master')
@section('admin')


  <!-- Content Wrapper. Contains page content -->

	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">
		  <div class="row">



			<div class="col-8">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Innovators List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Image </th>
								<th>Name</th>
								<th>About</th>
								
								<th>Action</th>

							</tr>
						</thead>
						<tbody>
	 @foreach($sliders as $item)
	 <tr>

 <td><img src="{{ asset($item->image) }}" style="width: 70px; height: 40px;"> </td>
		<td>
            @if($item->name == NULL)
		 	<span class="badge badge-pill badge-danger"> No Title </span>
		 	@else
             {{ $item->name }}
		 	@endif
			</td>

		<td>{{ $item->about }}</td>
	

		<td width="30%">


 <a href="{{ route('innovate.delete',$item->id) }}" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
 	<i class="fa fa-trash"></i></a>



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


<!--   ------------ Add Slider Page -------- -->


          <div class="col-4">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Innovators </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">


 <form method="post" action="{{ route('innovate.store') }}" enctype="multipart/form-data">
	 	@csrf


	 <div class="form-group">
		<h5>Innovator Name </h5>
		<div class="controls">
	 <input type="text"  name="nam" class="form-control" > 

	</div>
	</div>


	<div class="form-group">
		<h5>About <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="about" class="form-control" >

	  </div>
	</div>



	<div class="form-group">
		<h5>Image <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="file" name="image" class="form-control" > 
	  </div>
	</div>


			 <div class="text-xs-right">
	<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add New">					 
						</div>
					</form>





					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box --> 
			</div>




		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->

	  </div>




@endsection