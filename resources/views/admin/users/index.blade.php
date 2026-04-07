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
                        <th>Action</th>
                        
                        
                    </tr>
                </thead>

                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->full_name ?? '-' }}</td>
                        <td>{{ $user->email }}</td>

                        <td>
                            <!-- EDIT -->
                            <button class="btn btn-warning btn-sm"
                                onclick="editUser('{{ $user->id }}','{{ $user->full_name }}','{{ $user->email }}')">
                                Edit
                            </button>

                            <!-- DELETE -->
                            <a href="{{ url('admin/users/delete/'.$user->id) }}"
                               class="btn btn-danger btn-sm"
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
<div class="modal fade" id="addUserModal">
    <div class="modal-dialog">
        <form method="post" action="{{ url('admin/users/store') }}">
            @csrf

            <div class="modal-content">
                <div class="modal-header">
                    <h4>Add User</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <input type="text" name="name" class="form-control mb-2" placeholder="Name" required>
                    <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
                    <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-success">Save</button>
                </div>
            </div>

        </form>
    </div>
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