@extends('template')

@section('content')
<div class="container">
    <h2>Late Report</h2>
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
                            <th>Date</th>
                            <th>Time</th>
                            <th>Duration</th>
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
                            <td>28-12-2023</td>
                            <td>08:05</td>
                            <td>5 Minute</td>
                        </tr>
                    </tbody>
                </table>
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