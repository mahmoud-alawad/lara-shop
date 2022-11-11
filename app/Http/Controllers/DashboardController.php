<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    /**
     * return the main view dashboard
     */
    public function index()
    {
        return view('dashboard.index', ['products' => Product::all()]);
    }

    /**
     * return the main view dashboard
     */
    public function showAllProducts()
    {
        return view('dashboard.products', ['products' => Product::all()]);
    }
    
    /**
     * return create product
     */
    public function showCreate()
    {
        return view('dashboard.create');
    }

    /**
     * return edit product
     */
    public function edit(Request $request)
    {
        return view('dashboard.edit', ['product' =>  Product::findOrFail($request['id'])]);
    }
}
