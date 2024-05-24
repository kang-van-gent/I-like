<?php

namespace App\Http\Controllers;

use App\Models\customer;
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
        return view('auth.login');
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

        $admin = customer::where(['username' => $request->username, 'password' => sha1($request->password)])->count();

        if ($admin > 0) {

            $adminData = customer::where(['username' => $request->username, 'password' => sha1($request->password)])->get();

            session(['user' => true, 'data' => $adminData]);

            if ($request->has('rememberme')) {
                Cookie::queue('adminuser', $request->username, 1440);

                Cookie::queue('adminpwd', $request->password, 1440);
            }
            return redirect('/dashboard');
        } else {
            return redirect('/login')->with('msg', 'ชื่อผู้ใช้หรือรหัสผ่านผิด กรุณาลองใหม่อีกครั้ง');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register(Request $request)
    {
        //
        // this state should check while typing.
        if ($request->password != $request->conpass) {
            # code...
            return redirect('/register')->with('msg', 'Password is not match.');
        }

        //should check exits user and email.

        $data = new customer();
        $data->username = $request->username;
        $data->email = $request->email;
        $data->firstName = $request->firstName;
        $data->lastName = $request->lastName;
        $data->age = $request->age;
        $data->career = $request->career;
        $data->gender = $request->gender;
        $data->password = sha1($request->password);
        $data->save();
        return redirect('/');
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

    //Logout
    function logout()
    {
        session()->forget(['user', 'data']);
        return redirect('/');
    }
}
