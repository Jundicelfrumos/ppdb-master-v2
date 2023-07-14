<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register()
    {
        return view('admin.register-admin'); 
    }

    public function postregister(Request $request)
    {
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->save();

        return back()->with('success', 'Register Admin Telah Berhasil');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login()
    {
        return view('admin.login-admin');
    }

    public function postlogin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('admins')->attempt($credentials)) {
            return redirect('form-admin');
        }

        return back()->with('error', 'Error Email or Password');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function logout()
    {
        Admin::logout();

        return redirect()->route('admin.login-admin');
    }
}
