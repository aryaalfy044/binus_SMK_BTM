@extends('template')

@section('content')
<div class="container">
    <h2>List Roles</h2>
    <!-- Your home page content goes here -->

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Role</th>
                            <th>Created at</th>
                            <th class="text-center"> <a href="{{ route('add-user') }}">Add</a> </th>
                            <!-- Add other columns as needed -->
                        </tr>
                    </thead>
                    <tbody>
                        @php $count = 1 @endphp
                        @foreach ($roles as $role)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>{{ $role->title }}</td>
                            <td>{{ $role->created_at }}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-warning btn-rounded btn-icon"><i class="mdi mdi mdi-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-rounded btn-icon" onclick="deleteRoles();"><i class="mdi mdi mdi-delete"></i></button>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td>1</td>
                            <td>Manager</td>
                            <td>28-12-2023</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-warning btn-rounded btn-icon"><i class="mdi mdi mdi-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-rounded btn-icon" onclick="deleteRoles();"><i class="mdi mdi mdi-delete"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Admin</td>
                            <td>28-12-2023</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-warning btn-rounded btn-icon"><i class="mdi mdi mdi-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-rounded btn-icon" onclick="deleteRoles();"><i class="mdi mdi mdi-delete"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Leader</td>
                            <td>28-12-2023</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-warning btn-rounded btn-icon"><i class="mdi mdi mdi-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-rounded btn-icon" onclick="deleteRoles();"><i class="mdi mdi mdi-delete"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Programmer</td>
                            <td>28-12-2023</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-warning btn-rounded btn-icon"><i class="mdi mdi mdi-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-rounded btn-icon" onclick="deleteRoles();"><i class="mdi mdi mdi-delete"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    function deleteRoles() {
       confirm("Are you sure to delete this roles?");
    }
</script>
@endsection