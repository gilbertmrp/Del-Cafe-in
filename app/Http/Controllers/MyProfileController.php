<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class MyProfileController extends Controller
{
    public function index() {
        return view('user.myprofile', [
            'title' => 'My Profile'
        ]);
    }

    public function edit() {
        return view('user.settings', [
            'title' => 'Setting'
        ]);
    }

    public function editPelayan() {
        return view('pelayan.settings');
    }

    public function update(Request $request) {
        $request->validate([
            'current_password' =>'required',
            'password' =>'required|min:8|confirmed',
        ]);

        if(Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
            return back()->with('success', 'Password anda berhasil di update');
        }

            throw ValidationException::withMessages([
                'current_password' => 'Your Current Password does not match with our record'
            ]);
    }
}
