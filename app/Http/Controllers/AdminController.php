<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash; // Import the Hash facade

class AdminController extends Controller
{
    public function index()
    {
        $users = User::where('utype', 'USR')->get();
        return view('admin.index', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'utype' => 'required|string|in:USR,ADM',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->utype = $request->input('utype');
        $user->save();

        return back()->with('success', 'User added successfully!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return back()->with('success', 'User deleted successfully!');
    }
    public function create()
{
    return view('admin.createUser');
}
}