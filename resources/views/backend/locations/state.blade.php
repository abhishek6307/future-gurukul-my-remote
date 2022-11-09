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
                        <h3 class="box-title">Add States</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">



                            <form method="post" action="{{route('states.store')}}">
                                @csrf



                                <div class="form-group">
                                    <h5>State Name<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="state_name" class="form-control" required>
                                        @error('state_name')
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
            <div class="col-12">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Category List <span class="badge badge-pill badge-danger">
                                {{ count($states) }} </span></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>State Name</th>


                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
								$i=0;
							?>
                                    @foreach($states as $item)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$item->state_name}}</td>


                                        <td>
                                            <a href="{{route('category.edit', $item->id)}}" class="btn btn-info"
                                                title="Edit-Data"><i class="fa fa-pencil"></i></a>
                                            <a href="{{route('category.delete', $item->id)}}" class="btn btn-danger"
                                                id="delete" title="Delete-Data"><i class="fa fa-trash"></i></a>
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







            <!-- /.box -->
        </div>
        <!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->

</div>





@endsection
