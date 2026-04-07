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
                                onclick="editUser('{{ $user->id }}','{{ $user->full_name }}','{{ $user->email }}',)">
                                Edit
                            </button>

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
<div class="modal fade" id="editUserModal">
    <div class="modal-dialog">
        <form method="post" id="editForm">
            @csrf

            <div class="modal-content">
                <div class="modal-header">
                    <h4>Edit User</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <input type="text" name="name" id="edit_name" class="form-control mb-2">
                    <input type="email" name="email" id="edit_email" class="form-control mb-2">
                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary">Update</button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection

@push('page_scripts')
<script>
function editUser(id, name, email) {
    $('#edit_name').val(name);
    $('#edit_email').val(email);

    $('#editForm').attr('action', "{{ url('admin/users/update') }}/" + id);

    $('#editUserModal').modal('show');
}
</script>
@endpush