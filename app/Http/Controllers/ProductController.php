<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product/allproducts', ['products' => $products]);
    }
    public function create()
    {
        return view('product/addpro',['categories'=>CategoryController::getall()]);
    }
    public function store(Request $request)
    {
        $newpro = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'cat_id'=>$request->cat
        ]);
        
        return redirect('/products');
    }
}
