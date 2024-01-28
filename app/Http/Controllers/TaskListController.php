<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class TaskListController extends Controller
{
    public function getManageTaskListAll()
    {
        $tasks = DB::table('task')
            ->join('users', 'task.user_id', '=', 'users.id')
            ->select('task.*', 'users.name as user_name')
            ->get();

        return view('TaskList.manage-task-list', ['tasks' => $tasks]);
    }
    
    public function addTaskList()
    {
        $user_name = auth()->user()->id;

        return view('TaskList.add-task-list', ['user_name' => $user_name]);
    }
}
