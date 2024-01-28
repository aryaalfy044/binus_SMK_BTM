@extends('template')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-xl-6 grid-margin stretch-card flex-column">
            <h5 class="mb-2 text-titlecase mb-4">Performance Score</h5>
            <div class="row h-100">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start flex-wrap">
                            </div>
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <h5 class="mb-2 text-titlecase mb-4">Performance Score</h5>
            <div class="row h-100">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start flex-wrap">
                                <div>
                                    <h1>95% <img src="{{ asset('admin/images/faces/smile.png') }}" alt="Smiley" style="width: 50px; height: 50px;" /></h1>
                                    <span>Excellent</span>
                                </div>
                            </div>
                            <!-- <canvas id="income-chart"></canvas> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <h5 class="mb-2 text-titlecase mb-4">Attendance</h5>
            <div class="row h-100">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Status</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2024-01-01</td>
                                        <td>Present</td>
                                        <td>2024-01-01</td>
                                    </tr>
                                    <tr>
                                        <td>2024-01-02</td>
                                        <td>Absent</td>
                                        <td>Illness</td>
                                    </tr>
                                    <tr>
                                        <td>2024-01-03</td>
                                        <td>Present</td>
                                        <td>None</td>
                                    </tr>
                                    <tr>
                                        <td>2024-01-04</td>
                                        <td>Present</td>
                                        <td>None</td>
                                    </tr>
                                    <tr>
                                        <td>2024-01-05</td>
                                        <td>Absent</td>
                                        <td>Personal</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 grid-margin stretch-card flex-column">
            <h5 class="mb-2 text-titlecase mb-4">Announcement</h5>
            <div class="row h-100">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 10%;">No</th>
                                        <th style="width: 90%;">Announcement</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>[Pengumuman] Libur Nasional Imlek.</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>[Pengumuman] Kick Off Meeting 2024.</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>[Deadline] Task Project A.</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>[Pengumuman] Cuti Karyawan A.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection