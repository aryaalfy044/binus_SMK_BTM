@extends('template')

@section('content')
<script src="{{ asset('js/TaskList/manage-task-list.js') }}"></script>

<style>
    .wrap-text {
        white-space: normal !important;
        word-wrap: break-word;
    }
</style>
<div class="container">
    <h2>Task Report</h2>

    <div class="row">
        <div class="col col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form class="form-sample">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">From</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="from" name="from" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">To</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="to" name="to" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Employee Name</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="employee">
                                            <option selected value="0">All</option>
                                            @foreach ($users as $u)
                                            <option value="{{$u->id }}">{{$u->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary mb-2">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="col col-12 grid-margin">
            <div class="card grid-margin">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="tblReport">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th style="width:30px!important">Employee Name</th>
                                    <th style="width:30px!important">Title</th>
                                    <th style="width:30px!important">Description</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Progress</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $count = 1 @endphp
                                @foreach ($task as $task)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $task->user_name }}</td>
                                    <td class="wrap-text">{{ $task->title }}</td>
                                    <td class="wrap-text">{{ $task->description }}</td>
                                    <td>{{ date('d/m/Y', strtotime($task->start_date)) }}</td>
                                    <td>{{ date('d/m/Y', strtotime($task->end_date)) }}</td>
                                    <td>{{ $task->progress }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#tblReport').DataTable({
                dom: 'Bfrtip',
                title: 'Task List Report',
                buttons: [
                    {
                        extend: 'pdfHtml5',
                        text: 'PDF',
                        filename: function () {
                            return 'Task List Report';
                        },
                        customize: function (doc) {
                            doc.title = 'Task List Report';
                        },
                        title : "Task List Report"
                    }
                ]
            });
        });
    </script>
    @endsection