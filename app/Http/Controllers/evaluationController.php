<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class evaluationController extends Controller
{
    public function getEvaluationReport()
    {
        $users = DB::table('users')->get();

        $tasks = DB::table('task')
            ->join('users', 'task.user_id', '=', 'users.id')
            ->select('task.*', 'users.name as user_name')
            ->get();

        return view('EvaluationReport.evaluation_report', ['tasks' => $tasks, 'users'=>$users]);
    }
}
