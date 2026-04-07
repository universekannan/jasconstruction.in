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
                                            <a onclick="edit_user_type(
                                                '{{ $centerslist->id }}',
                                                '{{ addslashes($centerslist->user_types_name) }}',
                                                '{{ $centerslist->status }}',
                                                '{{ $centerslist->dashboard ?? 0 }}',
                                                '{{ $centerslist->add_user ?? 0 }}',
                                                '{{ $centerslist->edit_user ?? 0 }}',
                                                '{{ $centerslist->delete_user ?? 0 }}',
                                                '{{ $centerslist->view_user ?? 0 }}',
                                                '{{ $centerslist->add_customers ?? 0 }}',
                                                '{{ $centerslist->edit_customers ?? 0 }}',
                                                '{{ $centerslist->delete_customers ?? 0 }}',
                                                '{{ $centerslist->view_customers ?? 0 }}',
                                                '{{ $centerslist->setting ?? 0 }}',
                                                '{{ $centerslist->backup ?? 0 }}'
                                            )" href="javascript:void(0)" class="btn btn-sm btn-primary">
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

        {{-- ==================== ADD MODAL ==================== --}}
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

                            {{-- User Type Name --}}
                            <div class="form-group row mb-4">
                                <label class="col-sm-4 col-form-label font-weight-bold">
                                    <span class="text-danger">*</span> User Type Name
                                </label>
                                <div class="col-sm-8">
                                    <input required type="text" class="form-control"
                                        name="user_types_name" maxlength="50"
                                        placeholder="Enter User Type Name">
                                </div>
                            </div>

                            {{-- Status --}}
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

                            {{-- Dashboard --}}
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    Dashboard Permission
                                </div>
                                <div class="card-body p-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Dashboard</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                id="add_dashboard" name="dashboard" value="1">
                                            <label class="custom-control-label" for="add_dashboard"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Users Permissions --}}
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    Users Permissions
                                </div>
                                <div class="card-body p-2">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Add User</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                id="add_add_user" name="add_user" value="1">
                                            <label class="custom-control-label" for="add_add_user"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Edit User</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                id="add_edit_user" name="edit_user" value="1">
                                            <label class="custom-control-label" for="add_edit_user"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Delete User</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                id="add_delete_user" name="delete_user" value="1">
                                            <label class="custom-control-label" for="add_delete_user"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>View User</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                id="add_view_user" name="view_user" value="1">
                                            <label class="custom-control-label" for="add_view_user"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Attendance Permissions --}}
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    Attendance Permissions
                                </div>
                                <div class="card-body p-2">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Add Attendance</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                id="add_add_customers" name="add_customers" value="1">
                                            <label class="custom-control-label" for="add_add_customers"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Edit Attendance</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                id="add_edit_customers" name="edit_customers" value="1">
                                            <label class="custom-control-label" for="add_edit_customers"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Delete Attendance</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                id="add_delete_customers" name="delete_customers" value="1">
                                            <label class="custom-control-label" for="add_delete_customers"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>View Attendance</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                id="add_view_customers" name="view_customers" value="1">
                                            <label class="custom-control-label" for="add_view_customers"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Setting & Backup --}}
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    Setting & Backup
                                </div>
                                <div class="card-body p-2">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Setting</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                id="add_setting" name="setting" value="1">
                                            <label class="custom-control-label" for="add_setting"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Backup</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                id="add_backup" name="backup" value="1">
                                            <label class="custom-control-label" for="add_backup"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>{{-- end modal-body --}}

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

        {{-- ==================== EDIT MODAL ==================== --}}
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

                            {{-- User Type Name --}}
                            <div class="form-group row mb-3">
                                <label for="edit_user_type_name"
                                    class="col-sm-4 col-form-label font-weight-bold">
                                    <span class="text-danger">*</span> User Type Name
                                </label>
                                <div class="col-sm-8">
                                    <input required type="text" class="form-control"
                                        name="user_types_name" maxlength="50"
                                        id="edit_user_type_name">
                                </div>
                            </div>

                            {{-- Status --}}
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

                            {{-- Dashboard --}}
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    Dashboard Permission
                                </div>
                                <div class="card-body p-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Dashboard</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                id="edit_dashboard" name="dashboard" value="1">
                                            <label class="custom-control-label" for="edit_dashboard"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Users Permissions --}}
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    Users Permissions
                                </div>
                                <div class="card-body p-2">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Add User</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                id="edit_add_user" name="add_user" value="1">
                                            <label class="custom-control-label" for="edit_add_user"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Edit User</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                id="edit_edit_user" name="edit_user" value="1">
                                            <label class="custom-control-label" for="edit_edit_user"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Delete User</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                id="edit_delete_user" name="delete_user" value="1">
                                            <label class="custom-control-label" for="edit_delete_user"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>View User</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                id="edit_view_user" name="view_user" value="1">
                                            <label class="custom-control-label" for="edit_view_user"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Attendance Permissions --}}
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    Attendance Permissions
                                </div>
                                <div class="card-body p-2">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Add Attendance</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                id="edit_add_customers" name="add_customers" value="1">
                                            <label class="custom-control-label" for="edit_add_customers"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Edit Attendance</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                id="edit_edit_customers" name="edit_customers" value="1">
                                            <label class="custom-control-label" for="edit_edit_customers"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Delete Attendance</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                id="edit_delete_customers" name="delete_customers" value="1">
                                            <label class="custom-control-label" for="edit_delete_customers"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>View Attendance</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                id="edit_view_customers" name="view_customers" value="1">
                                            <label class="custom-control-label" for="edit_view_customers"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Setting & Backup --}}
                            <div class="card mb-3 shadow-sm">
                                <div class="card-header bg-light font-weight-bold">
                                    Setting & Backup
                                </div>
                                <div class="card-body p-2">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span>Setting</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                id="edit_setting" name="setting" value="1">
                                            <label class="custom-control-label" for="edit_setting"></label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Backup</span>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input"
                                                id="edit_backup" name="backup" value="1">
                                            <label class="custom-control-label" for="edit_backup"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>{{-- end modal-body --}}

                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">Update User Type</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

<script>
function edit_user_type(
    id, user_types_name, status,
    dashboard,
    add_user, edit_user, delete_user, view_user,
    add_customers, edit_customers, delete_customers, view_customers,
    setting, backup
) {
    $('#user_id').val(id);
    $('#edit_user_type_name').val(user_types_name);
    $('#editstatus').val(status);

    // Dashboard
    $('#edit_dashboard').prop('checked', dashboard == 1);

    // Users
    $('#edit_add_user').prop('checked',    add_user == 1);
    $('#edit_edit_user').prop('checked',   edit_user == 1);
    $('#edit_delete_user').prop('checked', delete_user == 1);
    $('#edit_view_user').prop('checked',   view_user == 1);

    // Attendance
    $('#edit_add_customers').prop('checked',    add_customers == 1);
    $('#edit_edit_customers').prop('checked',   edit_customers == 1);
    $('#edit_delete_customers').prop('checked', delete_customers == 1);
    $('#edit_view_customers').prop('checked',   view_customers == 1);

    // Setting & Backup
    $('#edit_setting').prop('checked', setting == 1);
    $('#edit_backup').prop('checked',  backup == 1);

    $('#editcenters').modal('show');
}
</script>

@endsection