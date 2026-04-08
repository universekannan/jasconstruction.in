@extends('admin.layouts.app')

@section('content')

<section class="content">
    <div class="container-fluid">

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">
                    {{ $user->full_name }} - Daily Attendance
                </h5>
                <small>
                    From: {{ $from }} |
                    To: {{ $to }}
                </small>
            </div>

            <div class="card-body">

                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="alert alert-info">
                            <strong>Total Present Days:</strong>
                            {{ $attendance->count() }}
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="attendanceTable" class="table table-bordered table-striped">
                        <thead class="bg-light">
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Day</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($attendance as $key => $a)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ date('d-m-Y', strtotime($a->date)) }}</td>
                                    <td>{{ date('l', strtotime($a->date)) }}</td>
                                    <td>
                                        <span class="badge badge-success">
                                            Present
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-danger">
                                        No Attendance Found
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-3">
                    <a href="{{ url()->previous() }}"
                       class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>

@endsection


@push('page_scripts')
<script>
$(document).ready(function () {
    $('#attendanceTable').DataTable();
});
</script>
@endpush
