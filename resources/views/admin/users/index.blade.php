@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Users</h3>

            <!-- ADD BUTTON -->
            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addUserModal">
                Add User
            </button>
        </div>

        <div class="card-body">

            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Type</th>
                        <th>Mobile Number</th>
                        <th>Gender</th>
                        <th>Action</th>


                    </tr>
                </thead>

                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->full_name ?? '-' }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->user_types_id ?? '-' }}</td>
                        <td>{{ $user->mobile_number?? '-'  }}</td>
                        <td>{{ $user->gender }}</td>

                        <td>
                            <!-- EDIT -->
                            <button class="btn btn-warning btn-sm"
                                onclick="editUser('{{ $user->id }}','{{ $user->full_name }}','{{ $user->email }}','{{ $user->mobile_number }}','{{ $user->user_types_id }}','{{ $user->gender }}','{{ $user->dob }}','{{ $user->address }}')">
                                Edit
                            </button>

                            <a onclick="edit_permission(
                                                '{{ $user->id }}',
                                                    '{{ $user->dashboard ?? 0 }}',
                                                    '{{ $user->add_user ?? 0 }}',
                                                    '{{ $user->edit_user ?? 0 }}',
                                                    '{{ $user->delete_user ?? 0 }}',
                                                    '{{ $user->view_user ?? 0 }}',
                                                    '{{ $user->add_attendance ?? 0 }}',
                                                    '{{ $user->edit_attendance ?? 0 }}',
                                                    '{{ $user->delete_attendance ?? 0 }}',
                                                    '{{ $user->view_attendance ?? 0 }}',
                                                    '{{ $user->setting ?? 0 }}',
                                                    '{{ $user->backup ?? 0 }}'
                                                )" href="javascript:void(0)" class="btn btn-sm btn-warning">
                                <i class="fas fa-cog"></i>
                            </a>

                            <!-- DELETE -->
                            <a href="{{ url('admin/users/delete/'.$user->id) }}" class="btn btn-danger btn-sm"
                                onclick="return confirm('Delete this user?')">
                                Delete
                            </a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

</div>

<!-- ================= ADD MODAL ================= -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-hidden="true">
    <form method="post" action="{{ url('adduser') }}">
        @csrf

        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add User</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <!-- LEFT -->
                        <div class="col-md-6">

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Full Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="full_name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Mobile No</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="mobile_number">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">User Type</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="user_type_id">
                                        <option>Select</option>
                                        @foreach($user_type as $ud)
                                        <option value="{{$ud->id}}">{{$ud->user_types_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>

                        <!-- RIGHT -->
                        <div class="col-md-6">

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Gender</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="gender">
                                        <option>Select Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Date Of Birth</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="dob">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Address</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="address" rows="3"></textarea>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- ================= EDIT MODAL ================= -->
<div class="modal fade" id="updateuser" tabindex="-1" aria-hidden="true">
    <form action="{{ url('/updateuser') }}" method="post">
        {{ csrf_field() }}
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <!-- LEFT SIDE -->
                        <div class="col-md-6">

                            <input type="hidden" name="user_id" id="user_id">

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Full Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="full_name" id="editname">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="email" id="editemail">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Mobile No</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="mobile_number" id="editmobile_number">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">User Type</label>
                                <div class="col-sm-8">
                                    <select name="user_type_id" id="editusertype" class="form-control">
                                        <option value="">Select User Type</option>
                                        @foreach($user_type as $ud)
                                        <option value="{{$ud->id}}">{{$ud->user_types_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>

                        <!-- RIGHT SIDE -->
                        <div class="col-md-6">

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Gender</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="gender" id="editgender">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Date Of Birth</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="dob" id="editdob">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Address</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="address" id="editaddress" rows="3"></textarea>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update user</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

</div>
<div class="modal fade" id="edit_permission" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="{{ url('/update_permission') }}" method="post">
        {{ csrf_field() }}
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h4 class="modal-title">Permission </h4>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="user_id" id="permission_user_id">

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

                    <div class="card mb-3 shadow-sm">
                        <div class="card-header bg-light font-weight-bold">
                            Users Permissions
                        </div>
                        <div class="card-body p-2">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span>Add User</span>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="edit_add_user"
                                        name="add_user" value="1">
                                    <label class="custom-control-label" for="edit_add_user"></label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span>Edit User</span>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="edit_edit_user"
                                        name="edit_user" value="1">
                                    <label class="custom-control-label" for="edit_edit_user"></label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span>Delete User</span>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="edit_delete_user"
                                        name="delete_user" value="1">
                                    <label class="custom-control-label" for="edit_delete_user"></label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <span>View User</span>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="edit_view_user"
                                        name="view_user" value="1">
                                    <label class="custom-control-label" for="edit_view_user"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 shadow-sm">
                        <div class="card-header bg-light font-weight-bold">
                            Attendance Permissions
                        </div>
                        <div class="card-body p-2">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span>Add Attendance</span>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="edit_add_attendance"
                                        name="add_attendance" value="1">
                                    <label class="custom-control-label" for="edit_add_attendance"></label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span>Edit Attendance</span>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="edit_edit_attendance"
                                        name="edit_attendance" value="1">
                                    <label class="custom-control-label" for="edit_edit_attendance"></label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span>Delete Attendance</span>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="edit_delete_attendance"
                                        name="delete_attendance" value="1">
                                    <label class="custom-control-label" for="edit_delete_attendance"></label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span>View Attendance</span>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="edit_view_attendance"
                                        name="view_attendance" value="1">
                                    <label class="custom-control-label" for="edit_view_attendance"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3 shadow-sm">
                        <div class="card-header bg-light font-weight-bold">
                            Setting & Backup
                        </div>
                        <div class="card-body p-2">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span>Setting</span>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="edit_setting" name="setting"
                                        value="1">
                                    <label class="custom-control-label" for="edit_setting"></label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <span>Backup</span>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="edit_backup" name="backup"
                                        value="1">
                                    <label class="custom-control-label" for="edit_backup"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Permission</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@push('page_scripts')
<script>
function editUser(id, full_name, email, mobile_number, user_types_id, gender, dob, address) {
    $('#editname').val(full_name);
    $('#editemail').val(email);
    $('#editmobile_number').val(mobile_number);
    $('#editusertype').val(user_types_id);
    $('#editgender').val(gender);
    $('#editdob').val(dob);
    $('#editaddress').val(address);
    $('#user_id').val(id);
    $('#updateuser').modal('show');
}
</script>

<script>
function edit_permission(id, dashboard, add_user, edit_user, delete_user, view_user,
    add_attendance, edit_attendance, delete_attendance, view_attendance, setting, backup) {

    $("#permission_user_id").val(id);

    // Set checkbox values (convert to boolean)
    $("#edit_dashboard").prop('checked', dashboard == 1);
    $("#edit_add_user").prop('checked', add_user == 1);
    $("#edit_edit_user").prop('checked', edit_user == 1);
    $("#edit_delete_user").prop('checked', delete_user == 1);
    $("#edit_view_user").prop('checked', view_user == 1);
    $("#edit_add_attendance").prop('checked', add_attendance == 1);
    $("#edit_edit_attendance").prop('checked', edit_attendance == 1);
    $("#edit_delete_attendance").prop('checked', delete_attendance == 1);
    $("#edit_view_attendance").prop('checked', view_attendance == 1);
    $("#edit_setting").prop('checked', setting == 1);
    $("#edit_backup").prop('checked', backup == 1);

    // Show modal
    $("#edit_permission").modal("show");
}
</script>
@endpush