<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create(): View
    {
        $categories = Category::all();
        return view('categories.create', compact('categories'));
    }

    public function show(int $id): View
    {
        return view('categories.show', compact('id'));
    }
}
