<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category/allcategory', ['categories' => $categories]);
    }
    public static function getall(){
        return Category::all();
    }
    public function create()
    {
        return view('category/addcategory');
    }
    public function store(Request $request)
    {
        $newcat = Category::create([
            'name' => $request->name
        ]);
        
        return redirect('/categories');
    }
}
