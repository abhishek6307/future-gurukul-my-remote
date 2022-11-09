@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Content Wrapper. Contains page content -->

<div class="container-full">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-6">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Search By Next Meet </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">


                            <form method="post" action="{{ route('search-by-next-meet') }}">
                                @csrf


                                <div class="form-group">
                                    <h5>Select Date <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="date" name="nextmeetdate" class="form-control">
                                        @error('nextmeetdate')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Search">
                                </div>
                            </form>


                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <div class="col-6">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Search By Date </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">


                            <form method="post" action="{{ route('search-by-date') }}">
                                @csrf


                                <div class="form-group">
                                    <h5>Select Date <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="date" name="date" class="form-control">
                                        @error('date')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Search">
                                </div>
                            </form>


                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <div class="col-12">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Search Between Dates </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">


                            <form method="post" action="{{ route('search-between-date') }}">
                                @csrf


                                <div class="form-group">
                                    <h5>Select Date <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="date" name="startdate" class="form-control">
                                        @error('startdate')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Select Date <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="date" name="enddate" class="form-control">
                                        @error('enddate')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Search">
                                </div>
                            </form>


                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>





            <div class="col-12">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">School Enquiry List <span class="badge badge-pill badge-danger">
                                {{ count($enquireds) }} </span></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                    <th>School Name</th>
                                        <th>School Response</th>
                                        <th>Visit Date</th>
                                        <th>Workshop</th>
                                        <th>Next Meet</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($enquireds as $item)
                                    <tr>

                                
                                    <td>{{ $item['school']['school_name'] }}</td>
                                        <td>{{ $item->school_response }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->workshop }}</td>
                                        <td>{{ $item->next_meet }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td width="30%">
                                            <a href="{{ route('enquiryschools.edit',$item->id) }}" class="btn btn-info"
                                                title="Edit Data"><i class="fa fa-pencil"></i> </a>


                                        </td>


                                    </tr>


                                    <!-- Modal -->

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

            <!-- /.col -->


            <!--   ------------ Add state Page -------- -->


            <!-- /.box -->





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
        $('select[name="city_id"]').on('change', function () {
            var city_id = $(this).val();
            if (city_id) {
                $.ajax({
                    url: "{{  url('/location/school/ajax') }}/" + city_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        var d = $('select[name="school_id"]').empty();
                        $.each(data, function (key, value) {
                            $('select[name="school_id"]').append('<option value="' +
                                value.id + '">' + value.school_name +
                                '</option>');
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
