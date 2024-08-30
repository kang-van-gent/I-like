<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use App\Models\customer;
use App\Models\orders;
use App\Models\products;
use App\Models\promotions;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\DB;

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
        if (session('data') == null) {
            return redirect('/login');
        }
        $id = session('data')[0]->id;

        // Get user from database ny session
        $user = customer::find($id);
        $count = count(Cart::getContent());
        return view('admin.index', ["userInfo" => $user, 'counting' => $count]);
    }

    /**
     * Display a listing of the resource.
     */
    public function services(Request $request)
    {
        if (session('data') == null) {
            return redirect('/login');
        }

        $query = products::query();

        // Apply filters if they exist
        if ($request->has('platform') && $request->platform != 'all') {
            $query->where('platform', $request->platform);
        }

        // Apply search if it exists
        if ($request->has('search') && !empty($request->search)) {
            $query->where('details', 'like', '%' . $request->search . '%');
        }

        // Get distinct products by name
        $query->select([
            'details',
            DB::raw('MIN(id) as id'), // Use aggregate functions like MIN or MAX
            DB::raw('MIN(platform) as platform'),
            DB::raw('MIN(service) as service'),
            DB::raw('MIN(amount) as amount'),
            DB::raw('MIN(price) as price')
        ])
            ->groupBy('details');

        // Paginate the results
        $products = $query->paginate(18); // Adjust the number per page as needed
        // dd($query->get());
        $count = count(Cart::getContent());

        // Return the view with the necessary data
        return view('admin.services', [
            'products' => $products,
            'counting' => $count,
            'platform' => $request->platform ?? 'all', // Maintain current filter state
            'search' => $request->search ?? '', // Maintain current search state
        ]);
    }

    public function filterServices(Request $request)
    {
        $platform = $request->input('platform');
        $search = $request->input('search');

        $query = products::query();

        if ($platform && $platform != 'all') {
            $query->where('platform', $platform);
        }

        if ($search) {
            $query->where('details', 'LIKE', "%$search%");
        }

        $products = $query->get();

        return response()->json($products);
    }

    public function getProductByDetails(Request $request)
    {
        $details = $request->input('details');

        // Find products that match the details
        $products = products::where('details', 'LIKE', '%' . $details . '%')->get();

        // Return the array of products
        return response()->json($products);
    }

    /**
     * Display a listing of the resource.
     */
    public function updateServices()
    {
        if (session('data') == null) {
            return redirect('/login');
        }


        $promotions = promotions::all();
        $count = count(Cart::getContent());
        return view('admin.update', ['promotions' => $promotions, 'counting' => $count]);
    }

    /**
     * Display a listing of the resource.
     */
    public function affiliates()
    {
        if (session('data') == null) {
            return redirect('/login');
        }


        $count = count(Cart::getContent());
        return view('admin.affiliates', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function childPanel()
    {
        if (session('data') == null) {
            return redirect('/login');
        }


        $count = count(Cart::getContent());
        return view('admin.child-panel', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function pricing()
    {
        if (session('data') == null) {
            return redirect('/login');
        }


        $count = count(Cart::getContent());
        return view('admin.pricing', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function blog()
    {
        if (session('data') == null) {
            return redirect('/login');
        }


        $count = count(Cart::getContent());
        $blogs = blogs::orderBy('id', 'desc')->get();
        return view('admin.blog', ['blogs' => $blogs, 'counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function terms()
    {
        if (session('data') == null) {
            return redirect('/login');
        }


        $count = count(Cart::getContent());
        return view('admin.terms', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function addfunds()
    {
        if (session('data') == null) {
            return redirect('/login');
        }


        $count = count(Cart::getContent());
        return view('admin.addfunds', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function buys()
    {
        if (session('data') == null) {
            return redirect('/login');
        }


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
        if (session('data') == null) {
            return redirect('/login');
        }


        $count = count(Cart::getContent());
        return view('admin.drip-feed', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function faq()
    {
        if (session('data') == null) {
            return redirect('/login');
        }


        $count = count(Cart::getContent());
        return view('admin.faq', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function howitworks()
    {
        if (session('data') == null) {
            return redirect('/login');
        }


        $count = count(Cart::getContent());
        return view('admin.howitworks', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function subscriptions()
    {
        if (session('data') == null) {
            return redirect('/login');
        }


        $count = count(Cart::getContent());
        return view('admin.subscriptions', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function refill()
    {
        if (session('data') == null) {
            return redirect('/login');
        }


        $count = count(Cart::getContent());
        return view('admin.refill', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function orders(Request $request)
    {
        if (session('data') == null) {
            return redirect('/login');
        }

        $id = session('data')[0]->id;

        $query = orders::where('user_id', $id);

        // $query = orders::query();

        // Apply filters if they exist
        if ($request->has('status') && $request->status != 'all') {
            $query->where('status', $request->status);
        }

        $query->orderBy('id', 'desc');

        $orders = $query->paginate(10); // Adjust the number per page as needed
        $count = count(Cart::getContent());
        // dd($orders);

        return view('admin.orders', [
            'orders' => $orders,
            'counting' => $count,
            'status' => $request->status ?? 'all', // Maintain current filter state
        ]);
    }

    public function filterOrders(Request $request)
    {
        if (session('data') == null) {
            return redirect('/login');
        }


        $status = $request->input('status');

        $query = orders::query();

        if ($status && $status != 'all') {
            $query->where('status', $status);
        }

        $orders = $query->get();

        return response()->json($orders);
    }
    /**
     * Display a listing of the resource.
     */
    public function massorder()
    {
        if (session('data') == null) {
            return redirect('/login');
        }


        $count = count(Cart::getContent());
        return view('admin.massorder', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function tickets()
    {
        if (session('data') == null) {
            return redirect('/login');
        }


        $count = count(Cart::getContent());
        return view('admin.tickets', ['counting' => $count]);
    }
    /**
     * Display a listing of the resource.
     */
    public function developers()
    {
        if (session('data') == null) {
            return redirect('/login');
        }


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
                    'amount' => $product->amount,
                    'platform' => $product->platform,
                    'link' => '',
                    'type' => $product->type,
                    'service' => $product->service,
                    'comments' => '',
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