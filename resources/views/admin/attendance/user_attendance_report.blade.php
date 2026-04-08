@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <form action="{{ url('/userattendanceslist') }}/{{ Request::segment(2) }}" method="post">
        {{ csrf_field() }}
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Staff Attendances for {{ $user->full_name }}</h1>
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
                        {{-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Add" ><i class="fa fa-plus"> Add </i></button>
		        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#showimage" ><i class="fa fa-plus"> Salery </i></button> --}}
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
                                        <th>IN Time</th>
                                        <th>OUT Time</th>
                                        <th>Message</th>
                                        <th>TotalHours</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($attendances as $key => $attendancesLIST)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $attendancesLIST->full_name }}</td>
                                        <td>{{ $attendancesLIST->date }}</td>
                                        <td>{{ $attendancesLIST->time_in }}</td>
                                        <td>{{ $attendancesLIST->time_out }}</td>
                                        <td>{{ $attendancesLIST->message }}</td>
                                        <td>{{ $attendancesLIST->hours }}</td>
                                    </tr>
                                    @endforeach
                                    <tr><td colspan="7"><center>{{ $user->full_name }}</h1></center></tr>
                                    @if ($working_days)
                                    <tr>
                                        <td>Total Days</td>
                                        <td>{{ $working_days->working_days }}</td>

                                        <td>Present</td>
                                        <td>{{ $working_days->present }}</td>

                                        <td>Absent</td>
                                        <td>{{ $working_days->working_days - $working_days->present }}</td>

                                        <td>Rs {{ $working_days->salary }}</td>
                                    </tr>
                                    @else
                                    <tr>
                                        <td colspan="7" style="text-align:center;">No working day data available</td>
                                    </tr>
                                    @endif
                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
function sync() {
    var timeout = document.getElementById('timeout');
    var hourss = document.getElementById('hourss');
    var time_out = document.getElementById('time_out');
    time_out.value = timeout.value + hourss.value;
}
</script>

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
        var url = attendancelist + "/" + from + "/" + to;
        window.location.href = url;
    }
}
</script>

@endpush