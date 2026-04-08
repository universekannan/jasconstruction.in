@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="card p-3 shadow-sm">
            <div class="row">

                <div class="col-md-3">
                    <label><strong>User</strong></label>
                    <select id="user_id" class="form-control select2">
                        <option value="">Select User</option>
                        @foreach($users as $user)
                        <option value="{{ $user->id }}">
                            {{ $user->full_name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3">
                    <label><strong>From Date</strong></label>
                    <input type="date" id="from_date" class="form-control" value="{{ $from ?? '' }}">
                </div>

                <div class="col-md-3">
                    <label><strong>To Date</strong></label>
                    <input type="date" id="to_date" class="form-control" value="{{ $to ?? '' }}">
                </div>

                <div class="col-md-3 d-flex align-items-end">
                    <button class="btn btn-primary w-100" onclick="filterSalary()">
                        <i class="fa fa-search"></i> View Attendance
                    </button>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="content">
    <div class="container-fluid">

        <div class="mb-2">
            <strong>Total Working Days :</strong>
            {{ $working_days ?? 0 }}
        </div>

        <div class="card shadow-sm">
            <div class="card-body">

                @foreach (['success','error'] as $msg)
                @if (session()->has($msg))
                <div class="alert alert-{{ $msg == 'success' ? 'success' : 'danger' }} alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{ session($msg) }}
                </div>
                @endif
                @endforeach

                <div class="table-responsive">
                    <table id="salaryTable" class="table table-bordered table-striped">
                        <thead class="bg-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Present Days</th>
                                <th>Salary</th>
                                <th>Paid</th>
                                <th>Balance</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($salaryData as $index => $s)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $s->name }}</td>
                                <td>{{ $s->phone }}</td>
                                <td>
                                    {{ $s->present }}
                                </td>
                                <td>{{ number_format($s->salary, 2) }}</td>
                                <td>{{ number_format($s->paid_amount, 2) }}</td>
                                <td>
                                    <span class="{{ $s->balance > 0 ? 'text-danger' : 'text-success' }}">
                                        {{ number_format($s->balance, 2) }}
                                    </span>
                                </td>
                                <td>
                                    @if ($s->balance > 0)
                                    <button class="btn btn-sm btn-success" onclick="openPayModal(
                                            '{{ $s->id }}',
                                            '{{ $s->user_id }}',
                                            '{{ $s->salary_month }}',
                                            '{{ $s->balance }}'
                                        )">
                                        Pay
                                    </button>
                                    @else
                                    Paid
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center text-danger">
                                    No Salary Data Found
                                </td>
                            </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </div>
</section>



<div class="modal fade" id="paySalaryModal" tabindex="-1">
    <form action="{{ url('/paysalary') }}" method="POST">
        @csrf

        <input type="hidden" name="id" id="modal_id">
        <input type="hidden" name="employee_id" id="modal_employee">
        <input type="hidden" name="month" id="modal_month">

        <div class="modal-dialog modal-md">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Pay Salary</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">

                    <div class="form-group">
                        <label>Paid Date</label>
                        <input type="date" class="form-control" name="paid_date" value="{{ date('Y-m-d') }}" readonly>
                    </div>

                    <div class="form-group">
                        <label>Old Balance</label>
                        <input type="text" class="form-control" id="modal_oldbalance" readonly>
                    </div>

                    <div class="form-group">
                        <label>Paid Amount</label>
                        <input type="number" class="form-control" id="modal_paidamount" name="paid_amount" min="1"
                            required>
                    </div>

                    <div class="form-group">
                        <label>New Balance</label>
                        <input type="text" class="form-control" id="modal_newbalance" readonly>
                    </div>

                    <div class="form-group">
                        <label>Payment Method</label>
                        <select class="form-control select2" name="payment_method" required>
                            <option value="">Select Payment Method</option>
                            <option value="Cash">Cash</option>
                            <option value="Google Pay">Google Pay</option>
                        </select>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>

            </div>
        </div>
    </form>
</div>

@endsection



@push('page_scripts')
<script>
function filterSalary() {
    let user = document.getElementById('user_id').value;
    let from = document.getElementById('from_date').value;
    let to = document.getElementById('to_date').value;

    if (!user || !from || !to) {
        alert('Please select User and Date range');
        return;
    }

    window.location.href =
        `{{ url('admin/usersalary/filter') }}?user_id=${user}&from=${from}&to=${to}`;
}

function openPayModal(id, userId, month, balance) {
    document.getElementById('modal_id').value = id;
    document.getElementById('modal_employee').value = userId;
    document.getElementById('modal_month').value = month;
    document.getElementById('modal_oldbalance').value = balance;
    document.getElementById('modal_paidamount').value = '';
    document.getElementById('modal_newbalance').value = balance;

    $('#paySalaryModal').modal('show');
}

document.getElementById('modal_paidamount')
    .addEventListener('input', function(e) {
        let oldBal = parseFloat(document.getElementById('modal_oldbalance').value) || 0;
        let paid = parseFloat(e.target.value) || 0;

        document.getElementById('modal_newbalance').value = oldBal - paid;
    });

$(document).ready(function() {
    $('#salaryTable').DataTable();
    $('.select2').select2();
});
</script>
@endpush