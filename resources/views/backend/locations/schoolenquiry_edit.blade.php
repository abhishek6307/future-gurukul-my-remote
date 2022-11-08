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
                        <h3 class="box-title">Edit School </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">


                            <form method="post" action="{{ route('enquiryschools.update') }}">
                                @csrf

                                <input type="hidden" name="id" value="{{ $enquireds->id }}">	
                                <div class="form-group">
                                    <h5>Select State<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="state_id" class="form-control">
                                            <option value="" selected="" disabled="">Select State</option>
                                            @foreach($states as $state)
                                            <option value="{{ $state->id }}" {{ $state->id == $enquireds->state_id ? 'selected':'' }} >{{ $state->state_name }}</option>
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
                                            @foreach($cities as $city)
                                            <option value="{{ $city->id }}" {{ $city->id == $enquireds->city_id ? 'selected':'' }}>{{ $city->city_name }}</option>
                                            @endforeach
                                        </select>
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
                                            @foreach($schools as $school)
                                            <option value="{{ $school->id }}" {{ $school->id == $enquireds->school_id ? 'selected':'' }}>{{ $school->school_name }}</option>
                                            @endforeach
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
                                            <option value="" selected="" disabled=""> {{$enquireds->school_response}}</option>

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
                                        <input type="date" name="next_meet" value="{{$enquireds->next_meet}}" class="form-control">
                                        @error('next_meet')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Workshop <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="workshop" class="form-control">
                                            <option value="" selected="" disabled="">{{$enquireds->workshop}}</option>

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
                                        <input type="text" name="remark"  value="{{$enquireds->remark}}" class="form-control">
                                        @error('remark')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">
                                </div>
                            </form>





                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
