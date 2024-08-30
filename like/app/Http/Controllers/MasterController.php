<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use App\Models\paragraphs;
use App\Models\products;
use App\Models\promotions;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (session('data') == null) {
            return redirect('/login');
        }
        $blogs = blogs::orderBy('id', 'desc')->get();
        $promotions = promotions::orderBy('id', 'desc')->get();
        $products = products::orderBy('id', 'desc')->get();
        return view('master.index', ['products' => $products, 'promotions' => $promotions, 'blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createProduct(Request $request)
    {
        //
        $data = new products();
        $data->details = $request->details;
        $data->type = $request->type;
        $data->price = $request->price;
        $data->amount = $request->price;
        $data->adminId = session('data')[0]->id;
        $data->save();

        return back();
    }

    public function createPromotion(Request $request)
    {
        //
        $data = new promotions();
        $data->details = $request->details;
        $data->price = $request->price;
        $data->isPublish = 1;
        $data->adminId = session('data')[0]->id;
        $img = $request->file('img');
        $imgPath = $img->store('public/imgs');
        $data->coverImage = $imgPath;
        $data->save();


        return back();
    }

    public function createBlog(Request $request)
    {
        $data = new blogs();
        $data->topic = $request->topic;
        $data->details = $request->details;
        // $data->category = $request->category;
        $data->category = 'test';
        // $data->ref = $request->ref;
        $data->ref = 'test';
        $data->adminId = session('data')[0]->id;

        // Handle cover and header image upload
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $coverPath = $cover->store('public/imgs');
            $data->coverImage = $coverPath;
        }

        if ($request->hasFile('header')) {
            $header = $request->file('header');
            $headerPath = $header->store('public/imgs');
            $data->headerImg = $headerPath;
        }

        $data->save();

        // Handle paragraphs
        if ($request->has('paragraphs')) {
            foreach ($request->paragraphs as $key => $paragraph) {
                $blogParagraph = new paragraphs();
                $blogParagraph->blogId = $data->id;
                $blogParagraph->details = $paragraph['details'];

                // Handle paragraph image upload
                if (isset($paragraph['paraImg']) && $request->hasFile("paragraphs.$key.paraImg")) {
                    $paraImg = $request->file("paragraphs.$key.paraImg");
                    $paraPath = $paraImg->store('public/imgs');
                    $blogParagraph->image = $paraPath;
                }

                $blogParagraph->save();
            }
        }

        return back();
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

    /**
     * Remove the specified resource from storage.
     */
    public function deleteProduct(string $id)
    {
        //
        products::where('id', $id)->delete();
        return back();
    }

    public function deletePromotion(string $id)
    {
        //
        promotions::where('id', $id)->delete();
        return back();
    }

    public function deleteBlog(string $id)
    {
        // Find the blog by id
        $blog = blogs::find($id);

        if ($blog) {
            // Delete associated paragraphs
            paragraphs::where('blogId', $id)->delete();
            // Delete the blog
            $blog->delete();
        }

        return back();
    }
}
