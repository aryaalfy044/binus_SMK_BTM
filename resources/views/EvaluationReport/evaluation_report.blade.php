@extends('template')

@section('content')
<div class="container">
    <h2>Evaluation Report</h2>
    <!-- Your home page content goes here -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Date From</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control" value="28-12-2023" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Date To</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control" value="28-01-2024" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Employee Name</label>
                        <div class="col-sm-9">
                        <select class="form-control" name="role" id="role">
                            <option value="">Select Employee</option>
                            <option {{ old('role') == 'Male' ? "selected" : "" }} value="Arya">Arya</option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-sm-9">
                            <button style="float:right" type="submit" class="btn btn-primary mr-2">Filter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="tblReport">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Employee Name</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Completed Date</th>
                            <th>Evaluation Point</th>
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
                            <td>{{ date('d/m/Y', strtotime($task->end_date)) }}</td>
                            <td class="text-center">
                                1
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#tblReport').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'pdfHtml5',
                    text: 'PDF',
                    filename: function () {
                        return 'Evaluation Report';
                    },
                    customize: function (doc) {
                        doc.title = 'Evaluation Report';
                    },
                    title: "Evaluation Report"
                }
            ]
        });
    });
</script>
@endsection