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
        if (session('data') != null) {
            return redirect('/');
        }
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
            return redirect('/services');
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
            // 'firstName' => [
            //     'required'
            // ],
            // 'age' => [
            //     'required'
            // ],
            // 'gender' => [
            //     'required'
            // ],
            // 'career' => [
            //     'required'
            // ],
            // 'salary' => [
            //     'required'
            // ],
            // 'whereFrom' => [
            //     'required'
            // ]
        ], [
            'username.required' => 'กรุณากรอกชื่อผู้ใช้',
            // 'firstName.required' => 'กรุณากรอกชื่อ-นามสกุล',
            // 'age.required' => 'กรุณาใส่อายุ',
            // 'gender.required' => 'กรุณาเลือกเพศ',
            // 'career.required' => 'กรุณาเลือกอาชีพ',
            // 'salary.required' => 'กรุณาเลือกช่วงเงินเดือน',
            // 'whereFrom.required' => 'กรุณากรอกชื่อผู้ใช้',
            'username.min' => 'ชื่อต้องมีความยาวอย่างน้อย 8 ตัวอักษร',
            'email.required' => 'กรุณากรอกอีเมล',
            'email.email' => 'กรุณากรอกอีเมลให้ถูกต้อง',
            'password.required' => 'กรุณากรอกรหัสผ่าน',
            'password.min' => 'รหัสผ่านต้องมีความยาวอย่างน้อย 8 ตัวอักษร',
            'password.regex' => 'รหัสผ่านต้องมีอักษรตัวใหญ่อย่างน้อย 1 ตัว',

        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 400);
        } elseif ($request->password != $request->conpass) {
            return response()->json([
                'status' => 'error',
                'message' => 'รหัสผ่านไม่ตรงกัน'
            ], 400);
        } elseif (Customer::where('username', $request->username)->exists()) {
            return response()->json([
                'status' => 'error',
                'message' => 'ชื่อผู้ใช้งานซ้ำ กรุณาใช้ชื่ออื่น'
            ], 400);
        } elseif (Customer::where('email', $request->email)->exists()) {
            return response()->json([
                'status' => 'error',
                'message' => 'อีเมลซ้ำ กรุณาใช้อีเมลอื่น'
            ], 400);
        }

        // The incoming request is valid...

        // Retrieve the validated input data...
        $validated = $validator->validated();

        //should check exits user and email.

        $data = new customer();
        $data->username = $request->username;
        $data->email = $request->email;
        $data->confirmed = 1;
        $data->blocked = 0;
        // $data->firstName = $request->firstName;
        // $data->lastName = $request->lastName;
        // $data->age = $request->age;
        // $data->career = $request->career;
        // $data->gender = $request->gender;
        // $data->whereFrom = $request->whereFrom;
        $data->password = sha1($request->password);
        $data->save();

        return response()->json([
            'status' => 'success',
            'message' => 'ลงทะเบียนสำเร็จ',
            'data' => $data
        ], 201);
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
