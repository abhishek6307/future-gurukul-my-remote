@extends('admin.admin_master')

@section('admin')


<div class="container-full">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-12">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">School Response List <span class="badge badge-pill badge-danger">
                                {{ count($schoolResponse) }} </span></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Role at School</th>
                                        <th>Name</th>
                                        <th>Number</th>
                                        <th>State Name</th>
                                        <th>School Medium</th>
                                        <th>Students Strength</th>
                                        <!-- <th>Action</th> -->

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($schoolResponse as $item)
                                    <tr>
                                        <td>{{$item->role_at_school}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->number}}</td>
                                        <td>{{$item->state_name}}</td>
                                        <td>{{$item->school_medium}}</td>
                                        <td>{{$item->students_strength}}</td>

                                        <!-- <td>
				<a href="{{route('brand.edit', $item->id)}}" class="btn btn-info" title="Edit-Data"><i class="fa fa-pencil"></i></a>
				<a href="{{route('brand.delete', $item->id)}}" class="btn btn-danger" id="delete" title="Delete-Data"><i class="fa fa-trash"></i></a>
			</td> -->

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

            <!-- /.box -->
        </div>
        <!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->

</div>





@endsection
