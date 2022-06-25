<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;

class AdminController extends Controller
{
    public function homepage()
    {
        $blog = Blog::paginate(4);
        $category = Category::paginate(3);
        return view('frontend.index', compact('blog', 'category'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function tutorial(Request $request)
    {
        $blog = Blog::paginate(4);
        $category = Category::paginate(4);
        return view('frontend.tutorial', compact('blog', 'category'));
    }

    public function viewcategory($id)
    {
        if(Category::where('id', $id)->exists()){
            $category = Category::where('id', $id)->first();
            $blog = Blog::where('category_id', $category->id)->get();
            return view('frontend.category.index', compact('category', 'blog'));
        }else{
            return redirect('/tutorial');
        }
    }

    public function dashboard()
    {
        $blog = Blog::count();
        $category = Category::count();
        return view('backend.index', compact('blog', 'category'));
    }
}
