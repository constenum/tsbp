<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index() : View
    {
        $users = user::orderBy('name')->get(['id', 'name', 'email', 'is_admin', 'is_active']);

        return view('admin.users.index', compact('users'));
    }

    public function create() : View
    {
        return view('admin.users.create');
    }

    public function store(StoreUserRequest $request)
    {
        $new_user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_active' => true,
            'is_admin' => false,
        ]);

        event(new Registered($new_user));

        return redirect()->route('users.index');
    }

    public function edit(User $user) : View
    {
        return view('admin.users.edit', ['user' => $user]);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect()->route('admin.users.index');
    }

    public function destroy(User $user) : RedirectResponse
    {
        $user->delete();

        return redirect()->route('admin.users.index');
    }
}
