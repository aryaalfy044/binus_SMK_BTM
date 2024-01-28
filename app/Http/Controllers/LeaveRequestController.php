<?php

namespace App\Http\Controllers;

use App\Models\LeaveRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LeaveRequestController extends Controller
{
    public function leaveReport()
    {
        $leaveRequest = LeaveRequest::all();

        return view('LeaveRequest/leave_request_report', compact('leaveRequest'));
    }
    public function leaveRequest()
    {
        $leaveRequest = LeaveRequest::all();

        return view('LeaveRequest/add_leave_request', compact('leaveRequest'));
    }
    public function leaveApproval()
    {
        $leaveRequest = LeaveRequest::all();

        return view('LeaveRequest/leave_approval_report', compact('leaveRequest'));
    }
}
