@extends('template')

@section('content')
<div class="container">
    <h2>Attendance</h2>
    <!-- Your home page content goes here -->

    <div class="card">
        <div class="card-body">
            <p class="card-description">
                Date: 27-12-2023
            </p>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Employee Name</th>
                            <th>Attendance Time</th>
                            <th>Attend</th>
                            <!-- Add other columns as needed -->
                        </tr>
                    </thead>
                    <tbody>
                        @php $count = 1 @endphp
                        @foreach ($attandance as $attandance)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>{{ $attandance->title }}</td>
                            <td>{{ $attandance->created_at }}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-warning btn-rounded btn-icon"><i class="mdi mdi mdi-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-rounded btn-icon" onclick="deleteRoles();"><i class="mdi mdi mdi-delete"></i></button>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td>1</td>
                            <td>Arya</td>
                            <td>08:05</td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                    </label>
                                </div>
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