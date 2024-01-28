@extends('template')
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="container">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Task List</h4>
                <br>
                <form class="forms-sample" method="post" action="{{ route('store-user') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="employeeName">Employee Name</label>
                        <input type="text" class="form-control" name="employeeName" id="employeeName" placeholder="Employee Name" value="" required>
                        @error('employeeName')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title_task">Title</label>
                        <input type="text" class="form-control" name="title_task" id="title_task" placeholder="Title Task" value="{{ $task->title }}" required>
                        @error('title_task')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" name="description" id="description" placeholder="Description" value="{{ $task->description }}" required>
                        @error('description')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="start_date">Start Date </label>
                        <input type="date" class="form-control" name="start_date" id="start_date" placeholder="dd/mm/yyyy" 
                        value="{{ date('d/m/Y', strtotime($task->start_date)) }}" required>
                        @error('start_date')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="date" class="form-control" name="end_date" id="end_date" placeholder="dd/mm/yyyy" value="{{ date('d/m/Y', strtotime($task->end_date)) }}" required>
                        @error('end_date')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ddlGender">Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value="" disabled selected>Select status</option>
                            <option {{ $task->status == 'New' ? "selected" : "" }} value="New">New</option>
                            <option {{ $task->status == 'In Progress' ? "selected" : "" }} value="In Progress">In Progress</option>
                            <option {{ $task->status == 'Completed' ? "selected" : "" }} value="Completed">Completed</option>
                            <option {{ $task->status == 'UAT' ? "selected" : "" }} value="UAT">UAT</option>
                            <option {{ $task->status == 'Live' ? "selected" : "" }} value="Live">Live</option>
                        </select>
                        @error('status')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <button type="button" class="btn btn-light" onclick="cancelRedirect();">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function cancelRedirect() {
        window.location.href = "{{ url('manage-task-list') }}";
    }
</script>
@endsection