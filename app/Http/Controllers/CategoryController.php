<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        $category = Category::all();
        return view('category.create', compact('category'));
    }

    public function index()
    {
        $category = Category::all()->sortBy('name');
        return view('category.index', compact('category'));
    }

    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Category::create([
            'name' => $request->name
        ]);
        return redirect()->route('home')->with('successMessage', 'Hai aggiunto una categoria');
    }
}
