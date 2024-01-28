<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UsersController extends Controller
{
    public function listUser()
    {
        $users = User::all();

        return view('Users/list-users', compact('users'));
    }
    public function addUser()
    {
        $users = User::all();

        return view('Users/add-user', compact('users'));
    }
    public function editUser()
    {
        $users = User::all();

        return view('Users/edit-user', compact('users'));
    }
    public function storeUser(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'login_id' => 'required|unique:users',
            'password' => 'required|min:8',
            'address' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required|date',
            'email_address' => 'required',
            'gender' => 'required',
        ]);
        $data['role_id'] = $request->has('role_id') ? $data['role_id'] : 0;
        $data['password'] = Hash::make($data['password']);

        try {
            User::create($data);
            // Redirect atau tampilkan pesan sukses
            return redirect()->back()->with('success', 'User berhasil dibuat');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Error creating user');
        }
    }
}
