@extends('admin.admin_master')
@section('admin')


  <!-- Content Wrapper. Contains page content -->

	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">
		  <div class="row">



			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Course List <span class="badge badge-pill badge-danger">  </span></h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Video </th>
								<th>Name</th>
								<th>Video Name </th>
								
								<th>Action</th>

							</tr>
						</thead>
						<tbody>
	 @foreach($videos as $item)
	 <tr>
		<td> <video width="200" height="100" controls>
  <source src="{{ asset($item->video) }}" type="video/mp4">
</video> </td>
		<td>{{ $item->course_name }}</td>
		<td>{{ $item->video_name }}</td>

<td width="30%">

<a href="{{ route('video.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
  <a href="{{ route('video.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
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





		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->

	  </div>




@endsection