@extends('template')

@section('content')
<div class="container">
    <h2>Manage Task List</h2>
    <!-- Your home page content goes here -->

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Employee Name</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Progress</th>
                            <th class="text-center"> <a href="{{ route('add-task-list') }}">Add</a> </th>
                            <!-- Add other columns as needed -->
                        </tr>
                    </thead>
                    <tbody>
                        @php $count = 1 @endphp
                        @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>{{ $task->user_name }}</td>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->description }}</td>
                            <td>{{ date('d/m/Y', strtotime($task->start_date)) }}</td>
                            <td>{{ date('d/m/Y', strtotime($task->end_date)) }}</td>
                            <td>{{ $task->progress }}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-warning btn-rounded btn-icon"><i
                                        class="mdi mdi mdi-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-rounded btn-icon"><i
                                        class="mdi mdi mdi-delete"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection