@extends('template')

@section('content')
<div class="container">
    <h2>Leave Report</h2>
    <!-- Your home page content goes here -->

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Date From</th>
                            <th>Date To</th>
                            <th>Reason</th>
                            <th>Status</th>
                            <!-- Add other columns as needed -->
                        </tr>
                    </thead>
                    <tbody>
                        @php $count = 1 @endphp
                        @foreach ($leaveRequest as $leaveRequest)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>{{ $leaveRequest->title }}</td>
                            <td>{{ $leaveRequest->created_at }}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-warning btn-rounded btn-icon"><i class="mdi mdi mdi-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-rounded btn-icon" onclick="deleteRoles();"><i class="mdi mdi mdi-delete"></i></button>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td>1</td>
                            <td>28-12-2023</td>
                            <td>31-12-2023</td>
                            <td>Holiday</td>
                            <td>Pending Approval</td>
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