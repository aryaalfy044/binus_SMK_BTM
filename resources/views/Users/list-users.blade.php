@extends('template')

@section('content')
<div class="container">
    <h2>Management user</h2>
    <!-- Your home page content goes here -->

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th class="text-center"> <a href="{{ route('add-user') }}">Add</a> </th>
                            <!-- Add other columns as needed -->
                        </tr>
                    </thead>
                    <tbody>
                        @php $count = 1 @endphp
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>{{ $user->name }}</td>
                            <td>Programmer</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-warning btn-rounded btn-icon"><i class="mdi mdi mdi-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-rounded btn-icon" onclick="deleteUser();"><i class="mdi mdi mdi-delete"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    function deleteUser() {
       confirm("Are you sure to delete this user?");
    }
</script>
@endsection