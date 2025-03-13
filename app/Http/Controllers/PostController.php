<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;
use App\Enums\CategoryAlias;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    public function create(int $id): View|RedirectResponse
    {
        $category = Category::find($id);
        if (!$category) return redirect()->route('categories.create.view');
        $alias = array_values(array_filter(CategoryAlias::cases(), fn(mixed $c) => $c->value == $category->alias))[0];
        $category_name = $category->category;
        return view('posts.create.' . strtolower($alias->value), compact('category_name'));
    }
}
