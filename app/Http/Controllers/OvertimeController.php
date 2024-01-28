<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class OvertimeController extends Controller
{
    public function addOvertime()
    {
        $users = DB::table('users')->get();
        $user_id = auth()->user()->id;

        return view('Overtime.overtime-request', compact('users', 'user_id'));
    }

    public function getOvertimeRequestListReport()
    {
        $users = DB::table('users')->get();
        $user_id = auth()->user()->id;

        $overtimes = DB::table('overtimes')
            ->join('users', 'overtimes.employee_id', '=', 'users.id')
            ->select('overtimes.*', 'users.name as user_name')
            ->get();

        return view('Overtime.overtime-report', compact('user_id', 'users', 'overtimes'));
    }

    public function overtimeApprovalList()
    {
        $users = DB::table('users')->get();

        $overtimes = DB::table('overtimes')
            ->join('users', 'overtimes.employee_id', '=', 'users.id')
            ->select('overtimes.*', 'users.name as user_name')
            ->get();

        return view('Overtime.overtime-approval', compact('users', 'overtimes'));
    }

}
