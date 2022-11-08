@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Content Wrapper. Contains page content -->

<div class="container-full">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-12">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add School Response</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">


                            <form method="post" action="{{ route('enquiryschools.store') }}">
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
                                        <select name="school_id" class="form-control">
                                            <option value="" selected="" disabled="">Select School</option>

                                        </select>
                                        @error('school_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>School Response<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="school_response" class="form-control">
                                            <option value="" selected="" disabled="">Select Response</option>

                                            <option value="Interested">Interested</option>
                                            <option value="Littile Interested">Littile Interested</option>
                                            <option value="Not Interested">Not Interested</option>
                                            <option value="Not Listend Carefully">Not Listend Carefully</option>
                                            <option value="Rejected">Rejected</option>

                                        </select>
                                        @error('school_response')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Next Meet <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="date" name="next_meet" class="form-control">
                                        @error('next_meet')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Workshop <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="workshop" class="form-control">
                                            <option value="" selected="" disabled="">Select Response</option>

                                            <option value="Yes">Yes</option>
                                            <option value="No">No </option>

                                        </select>
                                        @error('workshop')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Remarks <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="remark" class="form-control">
                                        @error('remark')
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
                                            <th>Next Meet</th>
                                            <th>Workshop</th>
                                            <th>Remarks</th>
                                            <th>Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($enquireds as $item)
                                        <tr>

                                            <td>{{ $item['school']['school_name'] }}</td>
                                            <td>{{ $item->school_response }}</td>
                                            <td>{{ $item->next_meet }}</td>
                                            <td>{{ $item->workshop }}</td>
                                            <td>{{ $item->remark }}</td>
                                            <td width="30%">
                                                <a href="{{ route('enquiryschools.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>

                                                <a href="{{ route('subsubcategory.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
                                                    <i class="fa fa-trash"></i></a>
                                            </td>


                                        </tr>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            View all
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
