<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Categories;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPost()
    {
        $categories = Categories::where('user_id', auth()->user()->id)->limit(15)->latest()->get();
        return view('post.create-post', compact('categories'));
    }
    public function index()
    {
        $articles = Articles::paginate(10);
        return view('post.articles', compact('articles'));
    }

    public function indexUserPost()
    {
        // $categories = Articles::where('user_id', auth()->user()->id)->limit(10)->latest()->get();
        return view('post.all-user-post');
    }

    public function detailArticle(Articles $article)
    {
        return view('post.detail-post', compact('article'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePost(Request $request)
    {

        $attr = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|mimes:jpg,png,jfif|max:2048',
            'content' => 'required',
            'category_id' => 'required'
        ]);


        $attr['user_id'] = auth()->user()->id;
        $attr['image'] = $request->file('image')->store('image', 'public');


        Articles::create($attr);
        return back()->with('message', 'posting was created');
    }
    public function storeCategory(Request $request)
    {

        $attr = $request->validate([
            'name' => 'required|max:30',
        ]);
        $attr['user_id'] = auth()->user()->id;
        Categories::create($attr);
        return back()->with('message', 'posting was created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Articles $article)
    {

        $categories = Categories::where('user_id', auth()->user()->id)->limit(15)->latest()->get();
        return view('post.edit-post', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articles $article)
    {

        $attr = $this->validate($request, [
            'title' => 'required|max:255',
            'image' => 'required|mimes:jpg,png,jfif|max:2048',
            'content' => 'required',
            'category_id' => 'required'
        ]);


        $attr['user_id'] = auth()->user()->id;
        $attr['image'] = $request->file('image')->store('image', 'public');

        $article->update($attr);

        return back()->with('message', 'posting was created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
