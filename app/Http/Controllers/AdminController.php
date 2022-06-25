<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;

class AdminController extends Controller
{
    public function homepage()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function tutorial()
    {
        return view('frontend.tutorial');
    }

    public function dashboard()
    {
        $blog = Blog::count();
        $category = Category::count();
        return view('backend.index', compact('blog', 'category'));
    }
}
