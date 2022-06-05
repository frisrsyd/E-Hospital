<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'nik' => 'required|max:255',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        $register_ref = User::create($validatedData);

        if($register_ref) {
            return redirect('/login')->with('status', 'Register Success');
        }else{
            return redirect('/signUp')->with('status', 'Register Failed');
        }
    }
    
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'nik' => 'required|max:255',
            'username' => 'required',
            'email' => 'required|email',
        ]);

        $user->update($validatedData);

        if($user) {
            return redirect('/account')->with('status', 'Update Success');
        }else{
            return redirect('/account')->with('status', 'Update Failed');
        }
    }
}
