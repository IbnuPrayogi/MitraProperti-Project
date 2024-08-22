<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class UserBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $headline = Blog::where('category','news')->first();
        $news = Blog::where('category','news')->get()->take(3);
        $panduan = Blog::where('category','panduan')->get();
        $lifestyle = Blog::where('category','lifestyle')->get()->take(3);
        $tips = Blog::where('category','tips')->get();
        $design = Blog::where('category','design')->get();


        return view('user.blog',compact('news','panduan','lifestyle','tips','design','headline'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $blog = Blog::where('id',$id)->get()->first();
        
        return view('user.blog-detail',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}