<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\CategoryRequest;
use App\Models\Articles;
use App\Models\Categories;
use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;

class ArticleApiController extends Controller
{

    private ArticleRepository  $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function index()
    {
        return $this->articleRepository->getAllArticle();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $base64 = base64_decode($request->image);
        $article = Articles::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' =>  $base64,
            'category_id' => $request->category_id
        ]);
    }

    public function storeCategory(CategoryRequest $request)
    {

        $article = Categories::create([
            'name' => $request->name,
            'name' => auth()->user()->id,
        ]);

        return response()->json([
            'message' => 'Category Was Created',
            'data' => $article
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show($articles)
    {
        return $this->articleRepository->getArticleById($articles);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articles $articles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articles $articles)
    {
        //
    }
}
