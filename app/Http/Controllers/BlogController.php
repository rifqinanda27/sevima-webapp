<?php

namespace App\Http\Controllers;

use Storage;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('backend.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('backend.blog.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'image' =>  'required',
            'desc' => 'required',
        ]);

        $imgData = Storage::disk('public')->put('image', $request->file('image'));
        $imgData2 = Storage::disk('public')->put('image2', $request->file('image2'));
        $imgData3 = Storage::disk('public')->put('image3', $request->file('image3'));

        Blog::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'image' => $imgData,
            'image2' => $imgData2,
            'image3' => $imgData3,
            'desc' => $request->desc,
        ]);

        return redirect('/admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::with('category')->find($id);
        $category = Category::all();
        return view('backend.blog.edit', compact('blog', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'desc' => 'required',
        ]);

        $imgData = $request->img_old;
        if ( $request->has('image') ) {
            $delete = Blog::findOrFail($id);
            Storage::disk('public')->delete($delete->image);
            $imgData = Storage::disk('public')->put('image', $request->file('image'));
        }
        $imgData2 = $request->img_old3;
        if ( $request->has('image2') ) {
            $delete = Blog::findOrFail($id);
            Storage::disk('public')->delete($delete->image2);
            $imgData = Storage::disk('public')->put('image2', $request->file('image2'));
        }
        $imgData3 = $request->img_old3;
        if ( $request->has('image3') ) {
            $delete = Blog::findOrFail($id);
            Storage::disk('public')->delete($delete->image3);
            $imgData = Storage::disk('public')->put('image3', $request->file('image3'));
        }

        Blog::where('id', $id)->update([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'image' => $imgData,
            'desc' => $request->desc,
        ]);

        return redirect('/admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Blog::findOrFail($id);
        Blog::find($id)->delete();
        Storage::disk('public')->delete($delete->image);
        Storage::disk('public')->delete($delete->image2);
        Storage::disk('public')->delete($delete->image3);
        $delete->delete();

        return redirect('/admin/posts');

    }
}
