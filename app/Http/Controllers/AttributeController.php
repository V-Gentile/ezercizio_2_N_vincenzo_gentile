<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attribute;

class AttributeController extends Controller
{
    public function create()
    {
        return view('attribute.create');
    }

    public function index()
    {
        $attributes = Attribute::all()->sortBy('name');
        return view('attribute.index', compact('attributes'));
    }

    public function store(Request $request)
    {
        Attribute::create([
            'name' => $request->name
        ]);
        
        return redirect()->route('home')->with('successMessage', 'Hai creato un nuovo Attributo');
    }

    public function show(Attribute $attribute)
    {
    return view('attribute.show', compact('attribute'));
    }
}
