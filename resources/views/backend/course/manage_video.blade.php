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
				  <h3 class="box-title">Video List <span class="badge badge-pill badge-danger"> {{ count($videos) }} </span></h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Image </th>
								<th>Name</th>
								<th>No. of Videos</th>
							
								<th>Action</th>

							</tr>
						</thead>
						<tbody>



	 @foreach($course as $item)

	 @php
	 $numberOfVideos = App\Models\Video::where('course_id', $item->id)->get();
	 @endphp
	 <tr>

		<td> <img src="{{ asset($item->course_thambnail) }}" style="width: 60px; height: 50px;">  </td>
		<td>{{ $item->course_name }}</td>
		<td> {{ count($numberOfVideos) }} </td>
		
 <td width="30%">
 <a href="{{ route('add-video') }}" class="btn btn-primary" title="Product Details Data"><i class="fa fa-upload"></i> </a>

  <a href="{{ route('video.view',$item->id) }}" class="btn btn-danger">
<i class="fa fa-eye"></i></a>


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