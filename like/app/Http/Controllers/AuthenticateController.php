<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AuthenticateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Login funtions.
     */
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $admin = users::where(['username' => $request->username, 'password' => sha1($request->password)])->count();

        if ($admin > 0) {

            $adminData = users::where(['username' => $request->username, 'password' => sha1($request->password)])->get();

            session(['adminData' => $adminData]);

            if ($request->has('rememberme')) {
                Cookie::queue('adminuser', $request->username, 1440);

                Cookie::queue('adminpwd', $request->password, 1440);
            }
            return redirect('admin');
        } else {
            return redirect('admin/login')->with('msg', 'Invalid
            
            username/Password!!');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
