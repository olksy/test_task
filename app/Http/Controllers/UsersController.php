<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('pages.users.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('pages.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:255',
        ]);

        $user->update($validated);

        return redirect()->route('pages.users.index')->with('success', 'User data was successfully updated!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('pages.users.index')->with('success', 'User was successfully deleted!');
    }
}
