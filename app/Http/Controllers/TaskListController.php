<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Task;


class TaskListController extends Controller
{
    public function getTaskListReport()
    {
        $tasks = DB::table('task')
            ->join('users', 'task.user_id', '=', 'users.id')
            ->select('task.*', 'users.name as user_name')
            ->get();

        return view('TaskList.task-list-report', ['tasks' => $tasks]);
    }
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
        $user_name = auth()->user()->name;

        return view('TaskList.add-task-list', compact('user_name'));
    }
    public function editTaskList($id)
    {
        $task = Task::find($id);
        return view('TaskList.edit-task-list', compact('task'));
    }
}
