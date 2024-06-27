<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;

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
            return redirect('/login')->with('error', 'ชื่อผู้ใช้หรือรหัสผ่านผิด กรุณาลองใหม่อีกครั้ง');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register(Request $request)
    {
        //


        $validator = Validator::make($request->all(), [
            'username' => [
                'required',
                'min:8',
            ],
            'email' => [
                'required',
                'email',
            ],
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[A-Z]).+$/', // Ensures at least one uppercase letter

            ],
        ], [
            'username.required' => 'กรุณากรอกชื่อผู้ใช้',
            'username.min' => 'ชื่อต้องมีความยาวอย่างน้อย 8 ตัวอักษร',
            'email.required' => 'กรุณากรอกอีเมล',
            'email.email' => 'กรุณากรอกอีเมลให้ถูกต้อง',
            'password.required' => 'กรุณากรอกรหัสผ่าน',
            'password.min' => 'รหัสผ่านต้องมีความยาวอย่างน้อย 8 ตัวอักษร',
            'password.regex' => 'รหัสผ่านต้องมีอักษรตัวใหญ่อย่างน้อย 1 ตัว',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } elseif ($request->password != $request->conpass) {
            # code...
            return redirect()->back()->with('error', 'รหัสผ่านไม่ตรงกัน');
        } elseif (Customer::where('username', $request->username)->exists()) {
            # code...
            return redirect()->back()->with('error', 'อีเมลซ้ำ กรุณาใช้อีเมลอื่น');
        } elseif (Customer::where('email', $request->email)->exists()) {
            return redirect()->back()->with('error', 'ชื่อผู้ใช้งานซ้ำ กรุณาใช้ชื่ออื่น');
        }

        // The incoming request is valid...

        // Retrieve the validated input data...
        $validated = $validator->validated();

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
