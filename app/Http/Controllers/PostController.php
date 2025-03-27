<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;
use App\Enums\CategoryAlias;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    private function store_post(string $title, string $description, Request $req): Post
    {
        $post = Post::create([
            'title' => $title,
            'description' => $description,
            'user_id' => Auth::user()->id
        ]);

        if ($req->hasFile('images')) {
            foreach ($req->file('images') as $image) {
                $path = $image->store('posts/images', 'public');
                $post->images()->create([
                    'path' => $path,
                    'original_name' => $image->getClientOriginalName(),
                    'mime_type' => $image->getClientMimeType(),
                    'size' => $image->getSize(),
                ]);
            }
        }
        return $post;
    }

    public function create(int $id): View|RedirectResponse
    {
        $category = Category::find($id);
        if (!$category) return redirect()->route('categories.create.view');
        $alias = array_values(array_filter(CategoryAlias::cases(), fn(mixed $c) => $c->value == $category->alias))[0];
        return view('posts.create.' . strtolower($alias->value), compact('category'));
    }

    public function store(Request $req, int $id)
    {

        // $category = Category::find($id)->alias;
        $validated = $req->validate([
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|min:1|max:4096',
            'title' => 'required|string|min:2|max:255',
            'description' => 'required|string',
        ]);

        $post = $this->store_post($validated['title'], $validated['description'], $req);
        // switch ($category) {
        //     case CategoryAlias::TECHNOLOGY->value:
        //         // Technology-specific fields handling
        //         break;

        //     case CategoryAlias::GAMING->value:
        //         // Gaming-specific fields handling
        //         break;

        //     case CategoryAlias::ENTERTAINMENT->value:
        //         // Entertainment-specific fields handling
        //         break;

        //     case CategoryAlias::SCIENCE->value:
        //         // Science-specific fields handling
        //         break;
        //         descriptionyAlias::BUSINESSFINANCE->value:
        //         // Business/Finance-specific fields handling
        //         break;

        //     case CategoryAlias::REALESTATE->value:
        //         // Real Estate-specific fields handling
        //         break;

        //     case CategoryAlias::VEHICLES->value:
        //         // Vehicles-specific fields handling
        //         break;

        //     case CategoryAlias::LIFESTYLE->value:
        //         // Lifestyle-specific fields handling
        //         break;

        //     case CategoryAlias::EDUCATION->value:
        //         // Education-specific fields handling
        //         break;

        //     case CategoryAlias::HEALTHWELLNESS->value:
        //         // Health/Wellness-specific fields handling
        //         break;

        //     case CategoryAlias::MEMESHUMOR->value:
        //         // Memes/Humor-specific fields handling
        //         break;

        //     default:
        //         return redirect()->route('posts.create.view');
        //         break;
        // }


    }
}
