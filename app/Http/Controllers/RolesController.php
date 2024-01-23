<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RolesController extends Controller
{
    public function listRole()
    {
        $roles = Role::all();

        return view('Roles/list_roles', compact('roles'));
    }
}
