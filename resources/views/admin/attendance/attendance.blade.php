@extends('admin.layouts.app')
@section('content')

@php
    $date = date('Y-m-01');
    $to = date("Y-m-d");
@endphp

<section class="content-header">
    <form action="{{ url('/attendancelist') }}/{{ $date }}/{{ $to }}" method="post">
        {{ csrf_field() }}
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Staff Attendances</h1>
                </div>
               
                <ol class="breadcrumb float-sm-right">
                    <div class="form-group">
                        <input type="date" class="form-control" name="from" id="from" value="{{ $date }}">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" name="to" id="to" value="{{ $to }}">
                    </div>
                    <div>
                        <input class="btn btn-primary" type="submit" value="Submit" />
                    </div>

                    @if(auth()->user()->user_types_id == '1' || auth()->user()->user_types_id == '2')
                    <li class="breadcrumb-item">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Add">
                            <i class="fa fa-plus"> Add </i>
                        </button>
                    </li>
                    @endif
                </ol>
            </div>
        </div>
    </form>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissable" style="margin: 15px;">
                            <a href="#" style="color:white !important" class="close" data-dismiss="alert"
                                aria-label="close">&times;</a>
                            <strong> {{ session('success') }} </strong>
                        </div>
                        @endif
                        @if (session()->has('error'))
                        <div class="alert alert-danger alert-dismissable" style="margin: 15px;">
                            <a href="#" style="color:white !important" class="close" data-dismiss="alert"
                                aria-label="close">&times;</a>
                            <strong> {{ session('error') }} </strong>
                        </div>
                        @endif
                        
                        <div class="card card-primary card-outline card-tabs">
                            <div class="card-header p-0 pt-1 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill"
                                            href="#custom-tabs-three-home" role="tab"
                                            aria-controls="custom-tabs-three-home" aria-selected="true">Absent
                                            Staffs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                            href="#custom-tabs-three-profile" role="tab"
                                            aria-controls="custom-tabs-three-profile" aria-selected="false">Present
                                            Staffs</a>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-three-tabContent">
                                    
                                    <!-- Absent Staffs Tab -->
                                    <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel"
                                        aria-labelledby="custom-tabs-three-home-tab">
                                        <div class="table-responsive" style="overflow-x: auto;">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>S No</th>
                                                        <th>Full Name</th>
                                                        <th>User Type</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($absentstaffs as $key => $staff)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $staff->full_name }}</td>
                                                        <td>{{ $staff->user_types_name }}</td>
                                                        <td>{{ $staff->email }}</td>
                                                        <td>
                                                            <a href="tel:+{{ $staff->mobile_number }}" class="info-link">
                                                                +{{ $staff->mobile_number }}
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ url('admin/userattendances') }}/{{ $staff->id }}/{{ date('Y-m-d', strtotime(date('Y-m-d').' -30 day')) }}/{{ date('Y-m-d') }}">
                                                                <i class="btn btn-info fa fa-eye" title="View Attendance"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-- Present Staffs Tab -->
                                    <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel"
                                        aria-labelledby="custom-tabs-three-profile-tab">
                                        <div class="table-responsive" style="overflow-x: auto;">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>S No</th>
                                                        <th>Full Name</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>IN Time</th>
                                                        <th>Message</th>
                                                        <th>Total Hours</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($presentstaffs as $keys => $attendance)
                                                    <tr>
                                                        <td>{{ $keys + 1 }}</td>
                                                        <td>{{ $attendance->full_name }}</td>
                                                        <td>{{ $attendance->date }}</td>
                                                        <td>{{ $attendance->status }}</td>
                                                        <td>{{ $attendance->time_in }}</td>
                                                        <td>{{ $attendance->message }}</td>
                                                        <td>{{ $attendance->hours }}</td>
                                                        <td>
                                                            <a href="{{ url('admin/userattendances') }}/{{ $attendance->user_id }}">
                                                                <i class="btn btn-info fa fa-eye" title="View Attendance"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add Staff Attendance Modal -->
<div class="modal fade" id="Add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Staff Attendance</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('userattendancein') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="user_id" class="col-sm-4 col-form-label">
                            <span style="color:red">*</span> Staff Name
                        </label>
                        <div class="col-sm-8">
                            <select class="form-control select2bs4" name="user_id" style="width: 100%;" required>
                                <option value="">Select Staff</option>
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->full_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-sm-4 col-form-label">
                            <span style="color:red">*</span> Date
                        </label>
                        <div class="col-sm-8">
                            <input required type="date" class="form-control" name="date" id="date" value="{{ date('Y-m-d') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="time_in" class="col-sm-4 col-form-label">
                            <span style="color:red">*</span> In Time
                        </label>
                        <div class="col-sm-8">
                            <input required type="time" class="form-control" name="time_in">
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Closed Staff Attendance Modal (Time Out) -->
<div class="modal fade" id="Adds">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Close Staff Attendance</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('userattendanceout') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="attendance_id" value="">
                    
                    <div class="form-group row">
                        <label for="user_id" class="col-sm-4 col-form-label">
                            <span style="color:red">*</span> Staff Name
                        </label>
                        <div class="col-sm-8">
                            <select class="form-control select2bs4" name="user_id" style="width: 100%;" required>
                                <option value="">Select Staff</option>
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->full_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="date" class="col-sm-4 col-form-label">
                            <span style="color:red">*</span> Date
                        </label>
                        <div class="col-sm-8">
                            <input required type="date" class="form-control" name="date" value="{{ date('Y-m-d') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="time_out" class="col-sm-4 col-form-label">
                            <span style="color:red">*</span> Out Time
                        </label>
                        <div class="col-sm-8">
                            <input required type="time" class="form-control" name="time_out">
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Time Out</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('page_scripts')
<script>
function load_report() {
    var from = $("#from").val();
    var to = $("#to").val();
    if (from == "") {
        alert("Please select From Date");
    } else if (to == "") {
        alert("Please select To Date");
    } else {
        var url = "{{ url('/attendancelist') }}/" + from + "/" + to;
        window.location.href = url;
    }
}

$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});
</script>
@endpush