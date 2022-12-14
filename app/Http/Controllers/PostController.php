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
        return redirect()->route('all.user.post')->with('message', 'Artikel Berhasil Dibuat');
    }
    public function storeCategory(Request $request)
    {

        $attr = $request->validate([
            'name' => 'required|max:30',
        ]);
        $attr['user_id'] = auth()->user()->id;
        Categories::create($attr);
        return back()->with('succesCategory', 'Kategori Berhasil Dibuat');
    }

    public function edit(Articles $article)
    {

        $categories = Categories::where('user_id', auth()->user()->id)->limit(15)->latest()->get();
        return view('post.edit-post', compact('article', 'categories'));
    }


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

        return redirect()->route('all.user.post')->with('message', 'Artikel Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyArticle(Articles $article)
    {
        $article->delete();
        return redirect()->route('all.user.post')->with('delete', 'Artikel berhasil dihapus');
    }
    public function destroyCategory(Categories $category)
    {

        $category->delete();
        return back()->with('deleteCategory', 'Kategori Berhasil Dihapus');
    }
}
