<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use App\Models\customer;
use App\Models\products;
use App\Models\promotions;
use Illuminate\Http\Request;
use Cart;

class AdminController extends Controller
{

    // protected $cart;

    // public function __construct(Cart $cart)
    // {
    //     $this->cart = $cart;
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get session.
        $id = session('data')[0]->id;
        // Get user from database ny session
        $user = customer::find($id);
        $count = count(Cart::getContent());
        return view('admin.index', ["userInfo" => $user, 'counting' => $count]);
    }

    /**
     * Display a listing of the resource.
     */
    public function services()
    {
        $products = products::all();
        $count = count(Cart::getContent());
        return view('admin.services', ['products' => $products, 'counting' => $count]);
    }

    /**
     * Display a listing of the resource.
     */
    public function updateServices()
    {
        $promotions = promotions::all();
        $count = count(Cart::getContent());
        return view('admin.update', ['promotions' => $promotions, 'counting' => $count]);
    }

    /**
     * Display a listing of the resource.
     */
    public function affiliates()
    {
        $count = count(Cart::getContent());
        return view('admin.affiliates', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function childPanel()
    {
        $count = count(Cart::getContent());
        return view('admin.child-panel', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function pricing()
    {
        $count = count(Cart::getContent());
        return view('admin.pricing', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function blog()
    {
        $count = count(Cart::getContent());
        $blogs = blogs::orderBy('id', 'desc')->get();
        return view('admin.blog', ['blogs' => $blogs, 'counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function terms()
    {
        $count = count(Cart::getContent());
        return view('admin.terms', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function addfunds()
    {
        $count = count(Cart::getContent());
        return view('admin.addfunds', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function buys()
    {
        $total = Cart::getTotal();
        $items = Cart::getContent();
        $count = count(Cart::getContent());
        return view('admin.buys', ['items' => $items, 'total' => $total, 'counting' => $count]);
        // return $items;
    }
    /**
     * Display a listing of the resource.
     */
    public function dripFeed()
    {
        $count = count(Cart::getContent());
        return view('admin.drip-feed', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function faq()
    {
        $count = count(Cart::getContent());
        return view('admin.faq', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function howitworks()
    {
        $count = count(Cart::getContent());
        return view('admin.howitworks', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function subscriptions()
    {
        $count = count(Cart::getContent());
        return view('admin.subscriptions', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function refill()
    {
        $count = count(Cart::getContent());
        return view('admin.refill', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function orders()
    {
        $count = count(Cart::getContent());
        return view('admin.orders', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function massorder()
    {
        $count = count(Cart::getContent());
        return view('admin.massorder', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function tickets()
    {
        $count = count(Cart::getContent());
        return view('admin.tickets', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function developers()
    {
        $count = count(Cart::getContent());
        return view('admin.developer', ['counting' => $count]);
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
    public function store($productId)
    {
        //
        $product = products::find($productId);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        };


        try {
            Cart::add([
                'id' => $product->id,
                'name' => $product->details,
                'price' => $product->price,
                'quantity' => 1, // Default quantity
                'attributes' => [
                    'amount' => $product->amount
                ],
            ]);
        } catch (\Darryldecode\Cart\Exceptions\InvalidItemException $e) {
            // Log the exception message for further debugging
            return response()->json(['error' => 'Invalid item: ' . $e->getMessage()], 400);
        }

        return back();
    }
    public function removeItem($productId)
    {
        Cart::remove($productId);
        return back();
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
