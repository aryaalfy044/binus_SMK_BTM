@extends('template')

@section('content')
<script src="{{ asset('js/TaskList/manage-task-list.js') }}"></script>

<style>
    .wrap-text {
        white-space: normal!important;
        word-wrap: break-word;
    }
</style>
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
                            <th style="width:30px!important">Employee Name</th>
                            <th style="width:30px!important">Title</th>
                            <th style="width:30px!important">Description</th>
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
                            <td class="wrap-text">{{ $task->title }}</td>
                            <td class="wrap-text">{{ $task->description }}</td>
                            <td>{{ date('d/m/Y', strtotime($task->start_date)) }}</td>
                            <td>{{ date('d/m/Y', strtotime($task->end_date)) }}</td>
                            <td>{{ $task->progress }}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-warning btn-rounded btn-icon edit-btn"  data-task-id="{{ $task->id }}"><i
                                        class="mdi mdi mdi-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-rounded btn-icon" data-task-id="{{ $task->id }}"><i
                                        class="mdi mdi mdi-delete delete-btn"></i></button>
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