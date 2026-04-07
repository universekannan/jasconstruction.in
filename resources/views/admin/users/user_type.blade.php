@extends('admin.layouts.app')
@section('content')

<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb d-flex align-items-center justify-content-between mb-3">
            <div class="mb-0">
                <h6>All User Type List</h6>
            </div>
            <button type="button" class="btn btn-sm btn-secondary float-right" data-toggle="modal"
                data-target="#addcenter">
                <i class="fas fa-plus"></i> Add User Type
            </button>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User Type Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usertypes as $centerslist)
                                    <tr>
                                        <td>{{ $centerslist->id }}</td>
                                        <td>{{ $centerslist->user_types_name }}</td>
                                        <td>
                                            @if ($centerslist->status == 1)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-secondary">Inactive</span>
                                            @endif
                                        </td>
                                        <td width="10%" style="white-space: nowrap">
                                            <a onclick="edit_user_type('{{ $centerslist->id }}','{{ $centerslist->user_types_name }}','{{ $centerslist->status }}'
                                            ,'{{ $centerslist->dashboard }}','{{ $centerslist->add_user }}','{{ $centerslist->edit_user }}'
                                            ,'{{ $centerslist->delete_user }}','{{ $centerslist->view_user }}','{{ $centerslist->add_customers }}'
                                            ,'{{ $centerslist->edit_customers }}','{{ $centerslist->delete_customers }}','{{ $centerslist->view_customers }}'
                                            ,'{{ $centerslist->gold_customers }}','{{ $centerslist->deposit_customers }}','{{ $centerslist->loan_customers }}'
                                            ,'{{ $centerslist->gold_loan_activity }}','{{ $centerslist->deposit_loan_activity }}','{{ $centerslist->customer_loan_activity }}'
                                            ,'{{ $centerslist->gold_report }}','{{ $centerslist->deposit_report }}','{{ $centerslist->loan_report }}'
                                            ,'{{ $centerslist->expense }}','{{ $centerslist->remind }}','{{ $centerslist->view_bank }}'
                                            ,'{{ $centerslist->add_bank }}','{{ $centerslist->edit_bank }}','{{ $centerslist->move_to_bank }}'
                                            ,'{{ $centerslist->view_expense_type }}','{{ $centerslist->add_expense_type }}'
                                            ,'{{ $centerslist->edit_expense_type }}','{{ $centerslist->delete_expense_type }}'
                                            ,'{{ $centerslist->view_expense }}','{{ $centerslist->add_expense }}'
                                            ,'{{ $centerslist->edit_expense }}','{{ $centerslist->delete_expense }}'
                                            ,'{{ $centerslist->setting }}','{{ $centerslist->backup }}')"
                                                href="javascript:void(0)" class="btn btn-sm btn-primary">
                                                <i class="fas fa-edit"></i>
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

        <!-- Add Modal -->
        <div class="modal fade" id="addcenter" tabindex="-1" role="dialog" aria-hidden="true">
            <form action="{{ url('/adduser_type') }}" method="post">
                {{ csrf_field() }}

                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">

                        <div class="modal-header bg-primary text-white">
                            <h4 class="modal-title">Add User Type</h4>
                            <button type="button" class="close text-white" data-dismiss="modal">
                                <span>&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">

                            <!-- User Type Name -->
                            <div class="form-group row mb-4">
                                <label class="col-sm-4 col-form-label font-weight-bold">
                                    <span class="text-danger">*</span> User Type Name
                                </label>
                                <div class="col-sm-8">
                                    <input required type="text" class="form-control" name="user_types_name"
                                        maxlength="50" placeholder="Enter User Type Name">
                                </div>
                            </div>

                            <!-- Status Field -->
                            <div class="form-group row mb-4">
                                <label class="col-sm-4 col-form-label font-weight-bold">
                                    <span class="text-danger">*</span> Status
                                </label>
                                <div class="col-sm-8">
                                    <select required class="form-control" name="status">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Dashboard Permission -->
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    Dashboard Permission
                                </div>
                                <div class="card-body p-2">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Dashboard</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="add_dashboard"
                                                name="dashboard" value="1">
                                            <label class="custom-control-label" for="add_dashboard"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- USERS PERMISSIONS -->
                            @if(auth()->user()->view_user == 1 || auth()->user()->add_user == 1 || auth()->user()->edit_user == 1 || auth()->user()->delete_user == 1)
                                <div class="card mb-3 shadow-sm">
                                    <div class="card-header bg-light font-weight-bold">
                                        Users Permissions
                                    </div>
                                    <div class="card-body p-2">
                                        @if(auth()->user()->add_user == 1)
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <span>Add User</span>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="add_user"
                                                        name="add_user" value="1">
                                                    <label class="custom-control-label" for="add_user"></label>
                                                </div>
                                            </div>
                                        @endif

                                        @if(auth()->user()->edit_user == 1)
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <span>Edit User</span>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="edit_user"
                                                        name="edit_user" value="1">
                                                    <label class="custom-control-label" for="edit_user"></label>
                                                </div>
                                            </div>
                                        @endif

                                        @if(auth()->user()->delete_user == 1)
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <span>Delete User</span>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="delete_user"
                                                        name="delete_user" value="1">
                                                    <label class="custom-control-label" for="delete_user"></label>
                                                </div>
                                            </div>
                                        @endif

                                        @if(auth()->user()->view_user == 1)
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span>View User</span>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="view_user"
                                                        name="view_user" value="1">
                                                    <label class="custom-control-label" for="view_user"></label>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            <!-- CUSTOMERS PERMISSIONS -->
                            @if(auth()->user()->view_customers == 1 || auth()->user()->add_customers == 1 || auth()->user()->edit_customers == 1 || auth()->user()->delete_customers == 1)
                                <div class="card mb-3 shadow-sm">
                                    <div class="card-header bg-light font-weight-bold">
                                        Customers Permissions
                                    </div>
                                    <div class="card-body p-2">
                                        @if(auth()->user()->add_customers == 1)
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <span>Add Customer</span>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="add_customers"
                                                        name="add_customers" value="1">
                                                    <label class="custom-control-label" for="add_customers"></label>
                                                </div>
                                            </div>
                                        @endif

                                        @if(auth()->user()->edit_customers == 1)
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <span>Edit Customer</span>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="edit_customers"
                                                        name="edit_customers" value="1">
                                                    <label class="custom-control-label" for="edit_customers"></label>
                                                </div>
                                            </div>
                                        @endif

                                        @if(auth()->user()->delete_customers == 1)
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <span>Delete Customer</span>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="delete_customers"
                                                        name="delete_customers" value="1">
                                                    <label class="custom-control-label" for="delete_customers"></label>
                                                </div>
                                            </div>
                                        @endif

                                        @if(auth()->user()->view_customers == 1)
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <span>View Customer</span>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="view_customers"
                                                        name="view_customers" value="1">
                                                    <label class="custom-control-label" for="view_customers"></label>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            @if(auth()->user()->gold_loan == 1 || auth()->user()->deposit == 1 || auth()->user()->loan == 1)
                                <div class="card mb-3 shadow-sm">
                                    <div class="card-header bg-light font-weight-bold">
                                        Customers Loans Permissions
                                    </div>
                                <div class="card-body p-2">
                                @if(auth()->user()->gold_loan == 1)
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Gold Customers</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="gold_customers"
                                                name="gold_customers" value="1">
                                            <label class="custom-control-label" for="gold_customers"></label>
                                        </div>
                                    </div>
                                @endif

                                @if(auth()->user()->deposit == 1)
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Deposits Customers</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="deposit_customers"
                                                name="deposit_customers" value="1">
                                            <label class="custom-control-label" for="deposit_customers"></label>
                                        </div>
                                    </div>
                                @endif

                                @if(auth()->user()->loan == 1)
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Loan Customers</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="loan_customers"
                                                name="loan_customers" value="1">
                                            <label class="custom-control-label" for="loan_customers"></label>
                                        </div>
                                    </div>
                                @endif
                            @endif
                        </div>

                            <!-- LOAN ACTIVITY PERMISSIONS -->
                            @if(auth()->user()->gold_loan == 1 || auth()->user()->deposit == 1 || auth()->user()->loan == 1)
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    Loan Activity Permissions
                                </div>
                                <div class="card-body p-2">
                                    @if(auth()->user()->gold_loan == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Gold Loans Activity</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="gold_loan_activity"
                                                    name="gold_loan_activity" value="1">
                                                <label class="custom-control-label" for="gold_loan_activity"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->deposit == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Deposits Loans Activity</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="deposit_loan_activity"
                                                    name="deposit_loan_activity" value="1">
                                                <label class="custom-control-label" for="deposit_loan_activity"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->loan == 1)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Customer Loan Activity</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customer_loan_activity"
                                                    name="customer_loan_activity" value="1">
                                                <label class="custom-control-label" for="customer_loan_activity"></label>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @endif
                            
                            <!-- REPORT PERMISSIONS -->
                            @if(auth()->user()->gold_loan == 1 || auth()->user()->deposit == 1 || auth()->user()->loan == 1)
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    Report Permissions
                                </div>
                                <div class="card-body p-2">
                                    @if(auth()->user()->gold_loan == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Gold Report</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="gold_report"
                                                    name="gold_report" value="1">
                                                <label class="custom-control-label" for="gold_report"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->deposit == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Deposits Report</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="deposit_report"
                                                    name="deposit_report" value="1">
                                                <label class="custom-control-label" for="deposit_report"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->loan == 1)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Loan Report</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="loan_report"
                                                    name="loan_report" value="1">
                                                <label class="custom-control-label" for="loan_report"></label>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @endif

                            <!-- BANK PERMISSIONS -->
                            @if(auth()->user()->view_bank == 1 || auth()->user()->add_bank == 1 || auth()->user()->edit_bank == 1 || auth()->user()->move_to_bank == 1)
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    Bank Permissions
                                </div>
                                <div class="card-body p-2">
                                    @if(auth()->user()->view_bank == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>View Bank</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="view_bank"
                                                    name="view_bank" value="1">
                                                <label class="custom-control-label" for="view_bank"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->add_bank == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Add Bank</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="add_bank"
                                                    name="add_bank" value="1">
                                                <label class="custom-control-label" for="add_bank"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->edit_bank == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Edit Bank</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_bank"
                                                    name="edit_bank" value="1">
                                                <label class="custom-control-label" for="edit_bank"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->move_to_bank == 1)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Move to Bank</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="move_to_bank"
                                                    name="move_to_bank" value="1">
                                                <label class="custom-control-label" for="move_to_bank"></label>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @endif

                             @if(auth()->user()->general == 1 || auth()->user()->view_expense_type == 1 || auth()->user()->add_expense_type == 1 || auth()->user()->edit_expense_type == 1 || auth()->user()->delete_expense_type == 1 || auth()->user()->view_expense == 1 || auth()->user()->add_expense == 1 || auth()->user()->edit_expense == 1 || auth()->user()->delete_expense == 1)
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    General Permissions
                                </div>
                                <div class="card-body p-2">
                                    @if(auth()->user()->view_expense_type == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>View Expense Type</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="view_expense_type" name="view_expense_type"
                                                    value="1">
                                                <label class="custom-control-label" for="view_expense_type"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->add_expense_type == 1)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Add Expense Type</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="add_expense_type" name="add_expense_type"
                                                    value="1">
                                                <label class="custom-control-label" for="add_expense_type"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->edit_expense_type == 1)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Edit Expense Type</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_expense_type" name="edit_expense_type"
                                                    value="1">
                                                <label class="custom-control-label" for="edit_expense_type"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->delete_expense_type == 1)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Delete Expense Type</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="delete_expense_type" name="delete_expense_type"
                                                    value="1">
                                                <label class="custom-control-label" for="delete_expense_type"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->view_expense == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>View Expense</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="view_expense" name="view_expense"
                                                    value="1">
                                                <label class="custom-control-label" for="view_expense"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->add_expense == 1)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Add Expense</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="add_expense" name="add_expense"
                                                    value="1">
                                                <label class="custom-control-label" for="add_expense"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->edit_expense == 1)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Edit Expense</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_expense" name="edit_expense"
                                                    value="1">
                                                <label class="custom-control-label" for="edit_expense"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->delete_expense == 1)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Delete Expense</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="delete_expense" name="delete_expense"
                                                    value="1">
                                                <label class="custom-control-label" for="delete_expense"></label>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @endif

                            <!-- SETTING & BACKUP -->
                            @if(auth()->user()->setting == 1 || auth()->user()->backup == 1)
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    Setting & Backup
                                </div>
                                <div class="card-body p-2">
                                    @if(auth()->user()->setting == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Setting</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="setting" name="setting"
                                                    value="1">
                                                <label class="custom-control-label" for="setting"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->backup == 1)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Backup</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="backup" name="backup"
                                                    value="1">
                                                <label class="custom-control-label" for="backup"></label>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Save User Type
                            </button>
                        </div>

                    </div>
                </div>
            </form>
        </div>

        <!-- Edit Modal -->
        <div class="modal fade" id="editcenters" tabindex="-1" role="dialog" aria-hidden="true">
            <form action="{{ url('/updateuser_type') }}" method="post">
                {{ csrf_field() }}
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h4 class="modal-title">Edit User Type</h4>
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="user_id" id="user_id">

                            <div class="form-group row mb-3">
                                <label for="edit_user_type_name" class="col-sm-4 col-form-label font-weight-bold">
                                    <span class="text-danger">*</span> User Type Name
                                </label>
                                <div class="col-sm-8">
                                    <input required type="text" class="form-control" name="user_types_name"
                                        maxlength="50" id="edit_user_type_name">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="editstatus" class="col-sm-4 col-form-label font-weight-bold">
                                    <span class="text-danger">*</span> Status
                                </label>
                                <div class="col-sm-8">
                                    <select id="editstatus" name="status" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Dashboard Permission -->
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    Dashboard Permission
                                </div>
                                <div class="card-body p-2">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Dashboard</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="edit_dashboard"
                                                name="dashboard" value="1">
                                            <label class="custom-control-label" for="edit_dashboard"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- USERS PERMISSIONS -->
                        @if(auth()->user()->view_user == 1 || auth()->user()->add_user == 1 || auth()->user()->edit_user == 1 || auth()->user()->delete_user == 1)
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    Users Permissions
                                </div>
                                <div class="card-body p-2">
                                    @if(auth()->user()->add_user == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Add User</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_add_user"
                                                    name="add_user" value="1">
                                                <label class="custom-control-label" for="edit_add_user"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->edit_user == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Edit User</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_edit_user"
                                                    name="edit_user" value="1">
                                                <label class="custom-control-label" for="edit_edit_user"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->delete_user == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Delete User</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_delete_user"
                                                    name="delete_user" value="1">
                                                <label class="custom-control-label" for="edit_delete_user"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->view_user == 1)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>View User</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_view_user"
                                                    name="view_user" value="1">
                                                <label class="custom-control-label" for="edit_view_user"></label>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif

                        <!-- CUSTOMERS PERMISSIONS -->
                        @if(auth()->user()->view_customers == 1 || auth()->user()->add_customers == 1 || auth()->user()->edit_customers == 1 || auth()->user()->delete_customers == 1)
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    Customers Permissions
                                </div>
                                <div class="card-body p-2">
                                    @if(auth()->user()->add_customers == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Add Customer</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_add_customers"
                                                    name="add_customers" value="1">
                                                <label class="custom-control-label" for="edit_add_customers"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->edit_customers == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Edit Customer</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_edit_customers"
                                                    name="edit_customers" value="1">
                                                <label class="custom-control-label" for="edit_edit_customers"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->delete_customers == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Delete Customer</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_delete_customers"
                                                    name="delete_customers" value="1">
                                                <label class="custom-control-label" for="edit_delete_customers"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->view_customers == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>View Customer</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_view_customers"
                                                    name="view_customers" value="1">
                                                <label class="custom-control-label" for="edit_view_customers"></label>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif

                        @if(auth()->user()->gold_loan == 1 || auth()->user()->deposit == 1 || auth()->user()->loan == 1)
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    Customers Loans Permissions
                                </div>
                            <div class="card-body p-2">
                            @if(auth()->user()->gold_loan == 1)
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Gold Customers</span>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="edit_gold_customers"
                                            name="gold_customers" value="1">
                                        <label class="custom-control-label" for="edit_gold_customers"></label>
                                    </div>
                                </div>
                            @endif

                            @if(auth()->user()->deposit == 1)
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span>Deposits Customers</span>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="edit_deposit_customers"
                                            name="deposit_customers" value="1">
                                        <label class="custom-control-label" for="edit_deposit_customers"></label>
                                    </div>
                                </div>
                            @endif

                            @if(auth()->user()->loan == 1)
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>Loan Customers</span>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="edit_loan_customers"
                                            name="loan_customers" value="1">
                                        <label class="custom-control-label" for="edit_loan_customers"></label>
                                    </div>
                                </div>
                            @endif
                        @endif
                        </div>

                            <!-- LOAN ACTIVITY PERMISSIONS -->
                            @if(auth()->user()->gold_loan == 1 || auth()->user()->deposit == 1 || auth()->user()->loan == 1)
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    Loan Activity Permissions
                                </div>
                                <div class="card-body p-2">
                                    @if(auth()->user()->gold_loan == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Gold Loans Activity</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_gold_loan_activity"
                                                    name="gold_loan_activity" value="1">
                                                <label class="custom-control-label" for="edit_gold_loan_activity"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->deposit == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Deposits Loans Activity</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_deposit_loan_activity"
                                                    name="deposit_loan_activity" value="1">
                                                <label class="custom-control-label" for="edit_deposit_loan_activity"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->loan == 1)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Customer Loan Activity</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_customer_loan_activity"
                                                    name="customer_loan_activity" value="1">
                                                <label class="custom-control-label" for="edit_customer_loan_activity"></label>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @endif
                            
                            <!-- REPORT PERMISSIONS -->
                            @if(auth()->user()->gold_loan == 1 || auth()->user()->deposit == 1 || auth()->user()->loan == 1)
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    Report Permissions
                                </div>
                                <div class="card-body p-2">
                                    @if(auth()->user()->gold_loan == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Gold Report</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_gold_report"
                                                    name="gold_report" value="1">
                                                <label class="custom-control-label" for="edit_gold_report"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->deposit == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Deposits Report</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_deposit_report"
                                                    name="deposit_report" value="1">
                                                <label class="custom-control-label" for="edit_deposit_report"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->loan == 1)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Loan Report</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_loan_report"
                                                    name="loan_report" value="1">
                                                <label class="custom-control-label" for="edit_loan_report"></label>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @endif

                            <!-- BANK PERMISSIONS -->
                            @if(auth()->user()->view_bank == 1 || auth()->user()->add_bank == 1 || auth()->user()->edit_bank == 1 || auth()->user()->move_to_bank == 1)
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    Bank Permissions
                                </div>
                                <div class="card-body p-2">
                                    @if(auth()->user()->view_bank == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>View Bank</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_view_bank"
                                                    name="view_bank" value="1">
                                                <label class="custom-control-label" for="edit_view_bank"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->add_bank == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Add Bank</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_add_bank"
                                                    name="add_bank" value="1">
                                                <label class="custom-control-label" for="edit_add_bank"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->edit_bank == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Edit Bank</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_edit_bank"
                                                    name="edit_bank" value="1">
                                                <label class="custom-control-label" for="edit_edit_bank"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->move_to_bank == 1)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Move to Bank</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_move_to_bank"
                                                    name="move_to_bank" value="1">
                                                <label class="custom-control-label" for="edit_move_to_bank"></label>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @endif

                            @if(auth()->user()->general == 1 || auth()->user()->view_expense_type == 1 || auth()->user()->add_expense_type == 1 || auth()->user()->edit_expense_type == 1 || auth()->user()->delete_expense_type == 1 || auth()->user()->view_expense == 1 || auth()->user()->add_expense == 1 || auth()->user()->edit_expense == 1 || auth()->user()->delete_expense == 1)
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    General Permissions
                                </div>
                                <div class="card-body p-2">
                                    @if(auth()->user()->view_expense_type == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>View Expense Type</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_view_expense_type" name="view_expense_type"
                                                    value="1">
                                                <label class="custom-control-label" for="edit_view_expense_type"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->add_expense_type == 1)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Add Expense Type</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_add_expense_type" name="add_expense_type"
                                                    value="1">
                                                <label class="custom-control-label" for="edit_add_expense_type"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->edit_expense_type == 1)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Edit Expense Type</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_edit_expense_type" name="edit_expense_type"
                                                    value="1">
                                                <label class="custom-control-label" for="edit_edit_expense_type"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->delete_expense_type == 1)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Delete Expense Type</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_delete_expense_type" name="delete_expense_type"
                                                    value="1">
                                                <label class="custom-control-label" for="edit_delete_expense_type"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->view_expense == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>View Expense</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_view_expense" name="view_expense"
                                                    value="1">
                                                <label class="custom-control-label" for="edit_view_expense"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->add_expense == 1)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Add Expense</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_add_expense" name="add_expense"
                                                    value="1">
                                                <label class="custom-control-label" for="edit_add_expense"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->edit_expense == 1)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Edit Expense</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_edit_expense" name="edit_expense"
                                                    value="1">
                                                <label class="custom-control-label" for="edit_edit_expense"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->delete_expense == 1)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Delete Expense</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_delete_expense" name="delete_expense"
                                                    value="1">
                                                <label class="custom-control-label" for="edit_delete_expense"></label>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @endif

                            <!-- SETTING & BACKUP -->
                            @if(auth()->user()->setting == 1 || auth()->user()->backup == 1)
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    Setting & Backup
                                </div>
                                <div class="card-body p-2">
                                    @if(auth()->user()->setting == 1)
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>Setting</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_setting" name="setting"
                                                    value="1">
                                                <label class="custom-control-label" for="edit_setting"></label>
                                            </div>
                                        </div>
                                    @endif

                                    @if(auth()->user()->backup == 1)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>Backup</span>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="edit_backup" name="backup"
                                                    value="1">
                                                <label class="custom-control-label" for="edit_backup"></label>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            @endif
                        </div>
                        
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update User Type</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

<script>
function edit_user_type(id, user_types_name, status, dashboard, add_user, edit_user, delete_user, view_user, add_customers, edit_customers, delete_customers
, view_customers, gold_customers, deposit_customers, loan_customers, gold_loan_activity, deposit_loan_activity, customer_loan_activity, gold_report
, deposit_report, loan_report, expense, remind, view_bank, add_bank, edit_bank, move_to_bank, view_expense_type, add_expense_type, edit_expense_type, delete_expense_type, view_expense, add_expense, edit_expense, delete_expense, setting, backup) {
    
    // Set text values
    $("#edit_user_type_name").val(user_types_name);
    $("#editstatus").val(status);
    $("#user_id").val(id);
    
    // Set checkbox values (convert to boolean)
    $("#edit_dashboard").prop('checked', dashboard == 1);
    $("#edit_add_user").prop('checked', add_user == 1);
    $("#edit_edit_user").prop('checked', edit_user == 1);
    $("#edit_delete_user").prop('checked', delete_user == 1);
    $("#edit_view_user").prop('checked', view_user == 1);
    $("#edit_add_customers").prop('checked', add_customers == 1);
    $("#edit_edit_customers").prop('checked', edit_customers == 1);
    $("#edit_delete_customers").prop('checked', delete_customers == 1);
    $("#edit_view_customers").prop('checked', view_customers == 1);
    $("#edit_gold_customers").prop('checked', gold_customers == 1);
    $("#edit_deposit_customers").prop('checked', deposit_customers == 1);
    $("#edit_loan_customers").prop('checked', loan_customers == 1);
    $("#edit_gold_loan_activity").prop('checked', gold_loan_activity == 1);
    $("#edit_deposit_loan_activity").prop('checked', deposit_loan_activity == 1);
    $("#edit_customer_loan_activity").prop('checked', customer_loan_activity == 1);
    $("#edit_gold_report").prop('checked', gold_report == 1);
    $("#edit_deposit_report").prop('checked', deposit_report == 1);
    $("#edit_loan_report").prop('checked', loan_report == 1);
    $("#edit_expense").prop('checked', expense == 1);
    $("#edit_remind").prop('checked', remind == 1);
    $("#edit_view_bank").prop('checked', view_bank == 1);
    $("#edit_add_bank").prop('checked', add_bank == 1);
    $("#edit_edit_bank").prop('checked', edit_bank == 1);
    $("#edit_move_to_bank").prop('checked', move_to_bank == 1);
    $("#edit_view_expense_type").prop('checked', view_expense_type == 1);
    $("#edit_add_expense_type").prop('checked', add_expense_type == 1);
    $("#edit_edit_expense_type").prop('checked', edit_expense_type == 1);
    $("#edit_delete_expense_type").prop('checked', delete_expense_type == 1);
    $("#edit_view_expense").prop('checked', view_expense == 1);
    $("#edit_add_expense").prop('checked', add_expense == 1);
    $("#edit_edit_expense").prop('checked', edit_expense == 1);
    $("#edit_delete_expense").prop('checked', delete_expense == 1);
    $("#edit_setting").prop('checked', setting == 1);
    $("#edit_backup").prop('checked', backup == 1);
    
    // Show modal
    $("#editcenters").modal("show");
}
</script>

@endsection