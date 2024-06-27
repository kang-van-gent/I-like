<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $blogs = blogs::all();
        return view('client.blog', ['blogs' => $blogs]);
    }

    /**
     * Display a listing of the resource.
     */
    public function post()
    {
        $id = request('id');
        $blog = blogs::find($id);
        $lastest = blogs::take(2)->get();
        return view('client.post')->with(['blog' => $blog, 'lastest' => $lastest]);
    }

    /**
     * Display a listing of the resource.
     */
    public function blogs()
    {

        $blogs = blogs::all();
        return view('client.blog', ['blogs' => $blogs]);
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
