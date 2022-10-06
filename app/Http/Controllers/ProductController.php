<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index() {
        $records = Product::all();
        return view('index', compact('records'));
    }

    public function create() {
        return view('create');
    }

    public function store(ProductRequest $request) {
        Product::create($request->all());
        return redirect('/product')->with('status', 'Product Created Successfully.');
    }
}
