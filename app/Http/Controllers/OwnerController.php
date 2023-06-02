<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        $owners = Owner::all();
        return view('owner/allowner', ['owners' => $owners]);
    }
    public function create()
    {
        return view('owner/addowner');
    }
    public function store(Request $request)
    {
        $newown = Owner::create([
            'name' => $request->name
        ]);
        
        return redirect('/owners');
    }
}
