@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <form action="{{ url('/attendancelist') }}" method="post">
        {{ csrf_field() }}
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1>User Salary</h1>
                </div>

                @php
                $date = date('Y-m-d', strtotime('-30 days'));
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
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Add"><i
                                class="fa fa-plus"> Add </i></button>
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
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>S No</th>
                                        <th>Salary Month</th>
                                        <th>Working Days</th>
                                        <th>Work Days</th>
                                        <th>salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($usersalery as $key => $usersalerylist)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $usersalerylist->salary_month }}</td>
                                        <td>{{ $usersalerylist->working_days }}</td>
                                        <td>{{ $usersalerylist->present }}</td>
                                        <td>{{ $usersalerylist->salary }}</td>

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
</section>


@endsection
@push('page_scripts')
@endpush