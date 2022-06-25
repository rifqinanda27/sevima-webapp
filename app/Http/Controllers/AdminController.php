<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;

class AdminController extends Controller
{
    public function homepage()
    {
        $blog = Blog::paginate(3);
        $category = Category::paginate(3);
        return view('frontend.index', compact('blog', 'category'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function posts(Request $request)
    {
        if ($request->search) {
            $blog = Blog::with('category')
            ->where('title', 'LIKE', '%' . $request->search . '%')
            ->orWhere('desc', 'LIKE', '%' . $request->search . '%')
            ->paginate(4);
        } else {
            $blog = Blog::paginate(4);
        }

        $category = Category::get();
        $random = Blog::paginate(4)->sortBy('title');
        return view('frontend.tutorial', compact('blog', 'category', 'random'));
    }

    public function allcategory()
    {
        $category = Category::all();
        return view('frontend.category.all', compact('category'));
    }

    public function viewcategory(Request $request, $id)
    {
        if(Category::where('id', $id)->exists()){
            if ($request->search) {
                $category = Category::where('id', $id)->first();
                $blog = Blog::with('category')
                ->orWhere('title', 'LIKE', '%' . $request->search . '%')
                ->orWhere('desc', 'LIKE', '%' . $request->search . '%')
                ->paginate(4);
            } else {
                $category = Category::where('id', $id)->first();
                $blog = Blog::where('category_id', $category->id)->paginate(4);
            }

            $categories = Category::paginate(4);
            $random = Blog::paginate(4)->sortBy('title');
            return view('frontend.category.index', compact('category', 'blog', 'categories', 'random'));
        }else{
            return redirect('/tutorial');
        }
    }

    public function viewpost($id)
    {
        $blog = Blog::with('category')->find($id);
        $blogs = Blog::all();
        $category = Category::all();
        $random = Blog::paginate(4)->sortBy('title');
        return view('frontend.show', compact('blog', 'blogs', 'category', 'random'));
    }

    public function dashboard()
    {
        $blog = Blog::count();
        $category = Category::count();
        return view('backend.index', compact('blog', 'category'));
    }
}
