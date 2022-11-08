@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Content Wrapper. Contains page content -->

<div class="container-full">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
        <div class="row">



            <div class="col-8">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Schools <span class="badge badge-pill badge-danger">
                                {{ count($schools) }} </span></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>State Name </th>
                                        <th>City Name</th>
                                        <th>School Name</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($schools as $item)
                                    <tr>
                                        <td> {{ $item['state']['state_name'] }} </td>
                                        <td>{{ $item['city']['city_name'] }}</td>
                                        <td>{{ $item->school_name }}</td>
                                        <td width="30%">
                                            <a href="{{ route('subsubcategory.edit',$item->id) }}" class="btn btn-info"
                                                title="Edit Data"><i class="fa fa-pencil"></i> </a>

                                            <a href="{{ route('subsubcategory.delete',$item->id) }}"
                                                class="btn btn-danger" title="Delete Data" id="delete">
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


            <!--   ------------ Add state Page -------- -->


            <div class="col-4">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add School </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">


                            <form method="post" action="{{ route('school.store') }}">
                                @csrf


                                <div class="form-group">
                                    <h5>Select State<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="state_id" class="form-control">
                                            <option value="" selected="" disabled="">Select State</option>
                                            @foreach($states as $state)
                                            <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('state_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <h5>Select City<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="city_id" class="form-control">
                                            <option value="" selected="" disabled="">Select City</option>

                                        </select>
                                        @error('city_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <h5>School Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="school_name" class="form-control">
                                        @error('school_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
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


<script type="text/javascript">
    $(document).ready(function () {
        $('select[name="state_id"]').on('change', function () {
            var state_id = $(this).val();
            if (state_id) {
                $.ajax({
                    url: "{{  url('/location/city/ajax') }}/" + state_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        var d = $('select[name="city_id"]').empty();
                        $.each(data, function (key, value) {
                            $('select[name="city_id"]').append('<option value="' +
                                value.id + '">' + value.city_name + '</option>');
                        });
                    },
                });
            } else {
                alert('danger');
            }
        });
    });

</script>


@endsection
