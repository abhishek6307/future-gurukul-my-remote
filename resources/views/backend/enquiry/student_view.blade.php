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
                        <h3 class="box-title">Students Response List <span class="badge badge-pill badge-danger">
                                {{ count($studentResponse) }} </span></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                               
                                        <th>Name</th>
                                        <th>Number</th>
                                        <th>Email</th>
                                        <th>State</th>
                                        <th>Whatsapp Auth</th>
                                        <th>Support Auth</th>
                                      
                                      
                                        <!-- <th>Action</th> -->

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($studentResponse as $item)
                                    <tr>
                                    
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->number}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->state}}</td>
                                        <td>{{$item->CheckboxWhatsapp}}</td>
                                        <td>{{$item->CheckboxSupport}}</td>
                                       

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
