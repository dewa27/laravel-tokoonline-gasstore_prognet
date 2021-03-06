<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showRegistrationForm()
    {
        return view('auth.admin-register');
    }

    public function register(Request $request)
    {
        // Validate form data
        $this->validate(
            $request,
            [
                'name' => ['required', 'string', 'max:255'],
                'username' => ['required', 'string', 'unique:admins'],
                'password' => ['required', 'string', 'min:8']
            ]
        );

        // Create admin user
        try {
            $admin = Admin::create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);

            // Log the admin in
            Auth::guard('admin')->loginUsingId($admin->id);
            return redirect()->route('admin.dashboard');
        } catch (\Exception $e) {
            return redirect()->back()->withInput($request->only('name', 'username'));
        }
    }
}
