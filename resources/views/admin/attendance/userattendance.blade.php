@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <form action="{{ url('/userattendanceslist') }}/{{ Request::segment(2) }}" method="post">
        {{ csrf_field() }}
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Staff Attendances</h1>
                </div>
                
                @php
                $date = date('Y-m-01');
                $to = date("Y-m-d");
                @endphp
                
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
                    <li class="breadcrumb-item">
                        {{-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Add"><i class="fa fa-plus"> Add </i></button>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#showimage"><i class="fa fa-plus"> Salary </i></button> --}}
                    </li>
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
                        
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>S No</th>
                                        <th>Full Name</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>IN Time</th>
                                        <th>OUT Time</th>
                                        <th>Message</th>
                                        <th>Total Hours</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($attendances as $key => $attendance)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $attendance->full_name }}</td>
                                        <td>{{ $attendance->date }}</td>
                                        <td>{{ $attendance->status }}</td>
                                        <td>{{ $attendance->time_in }}</td>
                                        <td>{{ $attendance->time_out }}</td>
                                        <td>{{ $attendance->message }}</td>
                                        <td>{{ $attendance->hours }}</td>
                                        <td>
                                            <a href="#" data-toggle="modal" title="View" data-target="#Close{{ $attendance->id }}">
                                                <i class="btn btn-info fa fa-eye"></i>
                                            </a>
                                            
                                            <a class="btn btn-danger" onclick="return confirm('Do you want to perform delete operation?')" 
                                               href="{{ url('/deleteattendance', $attendance->id) }}">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    
                                    <!-- Modal for Time Out -->
                                    <div class="modal fade" id="Close{{ $attendance->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Close Staff Attendance</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ url('userattendanceout') }}" method="post">
                                                    {{ csrf_field() }}
                                                    <div class="modal-body">
                                                        <input type="hidden" name="user_id" value="{{ $attendance->user_id }}">
                                                        <input type="hidden" value="{{ $attendance->time_in }}" name="time_in">
                                                        <input type="hidden" value="{{ $attendance->id }}" name="att_id">
                                                        
                                                        <div class="form-group row">
                                                            <label for="time_out" class="col-sm-4 col-form-label">
                                                                <span style="color:red">*</span> Time Out
                                                            </label>
                                                            <div class="col-sm-8">
                                                                <input type="time" class="form-control" name="time_out" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Time Out</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('page_scripts')
<script>
    function load_report() {
        var from = $("#from").val();
        var to = $("#to").val();
        if (from == "") {
            alert("Please select from Date");
        } else if (to == "") {
            alert("Please select To Date");
        } else {
            var url = "{{ url('/attendancelist') }}/" + from + "/" + to;
            window.location.href = url;
        }
    }
</script>

@endpush