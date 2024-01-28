<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AttendanceController extends Controller
{
    public function attendance()
    {
        $attandance = Attendance::all();

        return view('Attendance/attendance', compact('attandance'));
    }
    public function attendanceReport()
    {
        $attandance = Attendance::all();

        return view('Attendance/attendance_report', compact('attandance'));
    }
    public function lateReport()
    {
        $attandance = Attendance::all();

        return view('Attendance/late_report', compact('attandance'));
    }
}
