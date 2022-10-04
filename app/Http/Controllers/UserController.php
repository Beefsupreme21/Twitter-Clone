<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user) {
        return view('users.show', [
            'posts' => $user->posts, 
            'user' => $user, 
        ]);
    }

    public function create()
    {
        return view('users.register');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required',
            'handle' => 'required',
            'dob_month' => 'required',
            'dob_day' => 'required',
            'dob_year' => 'required',
            'image',
            'verified'
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    public function update(Request $request, User $user)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'password',
            'handle' => 'required',
            'dob_month' => 'required',
            'dob_day' => 'required',
            'dob_year' => 'required',

            'image',
            'verified'
        ]);

        // $formFields['password'] = bcrypt($formFields['password']);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $user->update($formFields);

        return redirect('/')->with('message', 'User updated');
    }

    public function edit(User $user) {
        return view('users.edit', ['user' => $user]);
    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out');
    }

    public function login() {
        return view('users.login');
    }

    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');

    }
}
