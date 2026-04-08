@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 mt-2">
                <strong>Working Days:</strong> {{ $working_days }}
            </div>

            <div class="col-md-8">
                <ol class="breadcrumb float-sm-right">
                    <div class="row">
                        <div class="col-md-6">
                            <select id="salary_month" class="form-control">
                                @foreach ($months as $m)
                                <option value="{{ $m->salary_month }} @selected($month == $m->salary_month)">
                                    {{ $m->salary_month }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-info" onclick="loadSalary()">Show</button>
                        </div>
                    </div>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="card">
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
                    <table id="example2" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Month</th>
                                <th>Present</th>
                                <th>Salary</th>
                                <th>Paid</th>
                                <th>Balance</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($salary as $index => $s)
                            @php
                            $balance = $s->salary - $s->paid_amount;
                            @endphp
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $s->full_name }}</td>
                                <td>{{ $s->salary_month }}</td>
                                <td>{{ $s->present }}</td>
                                <td>{{ $s->salary }}</td>
                                <td>{{ $s->paid_amount }}</td>
                                <td>{{ $balance }}</td>
							
                                <td>
								
                                    @if ($balance > 0)
                                    <button class="btn btn-sm btn-success"
                                        onclick="openPayModal('{{ $s->id }}', '{{ $s->user_id }}', '{{ $s->salary_month }}', '{{ $balance }}', '{{ $s->salary }}', '{{ $s->paid_amount }}')">
                                        Pay
                                    </button>
                                    @endif
                                    <?php
                                       $date = date('Y-m-d');
                                       $startDate = date('Y-m-d', strtotime('-30 days'));
                                       $endDate = date('Y-m-d');
                                    ?>
                                    <a
                                        href="{{ url('admin/userattendances') }}/{{ $s->id ?? '' }}/{{ $startDate }}/{{ $endDate }}">
                                        <i class="btn btn-info fa fa-eye" title="Closed"></i>
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
</section>

<div class="modal fade" id="paySalaryModal" tabindex="-1" aria-hidden="true">
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
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Paid Date</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="paid_date" value="{{ date('Y-m-d') }}"
                                readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Salary Balance</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="modal_oldbalance" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Paid Amount</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="modal_paidamount" name="paid_amount" min="1"
                                required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">New Balance</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="modal_newbalance" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Payment Method</label>
                        <div class="col-sm-8">
                            <select class="form-control select2" name="payment_method" required>
                                <option value="">Select Payment Method</option>
                                <option value="Cash">Cash</option>
                                <option value="Google Pay">Google Pay</option>
                            </select>
                        </div>
                    </div>


                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@push('page_scripts')
<script>
const baseUrl = "{{ url('admin/viewsalary') }}";

function loadSalary() {
    const salMonth = document.getElementById('salary_month').value;
    if (!salMonth) {
        alert('Please select a month');
        return;
    }
    window.location.href = `${baseUrl}/${salMonth}`;
}

function openPayModal(id, userId, month, balance, salary, paid) {
    document.getElementById('modal_id').value = id;
    document.getElementById('modal_employee').value = userId;
    document.getElementById('modal_month').value = month;
    document.getElementById('modal_oldbalance').value = balance;
    document.getElementById('modal_paidamount').value = '';
    document.getElementById('modal_newbalance').value = balance;
    $('#paySalaryModal').modal('show');
}

document.getElementById('modal_paidamount').addEventListener('input', e => {
    const oldBal = parseFloat(document.getElementById('modal_oldbalance').value) || 0;
    const paid = parseFloat(e.target.value) || 0;
    document.getElementById('modal_newbalance').value = oldBal - paid;
});

$('#salaryTable').DataTable();
</script>
@endpush