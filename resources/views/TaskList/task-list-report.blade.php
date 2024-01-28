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
                                @foreach ($tasks as $ot)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $ot->user_name }}</td>
                                    <td class="wrap-text">{{ $ot->title }}</td>
                                    <td class="wrap-text">{{ $ot->description }}</td>
                                    <td>{{ date('d/m/Y', strtotime($ot->start_date)) }}</td>
                                    <td>{{ date('d/m/Y', strtotime($ot->end_date)) }}</td>
                                    <td>{{ $ot->progress }}</td>
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
                buttons: [
                    'pdfHtml5'
                ]
            });
        });
    </script>
    @endsection