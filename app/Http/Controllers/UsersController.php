<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function listUser()
    {
        $users = User::all();

        return view('Users/list-users', compact('users'));
    }
}
