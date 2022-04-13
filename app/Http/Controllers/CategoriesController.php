<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
  public function show($slug)
  {
    $category = Category::where('slug', $slug)->firstOrFail();
    $posts = $category->posts()->orderBy('id', 'desc')->paginate(2);
    return view('categories.show', compact('posts', 'category'));
  }
}
