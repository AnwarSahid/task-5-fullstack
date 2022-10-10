<?php

namespace App\Repositories;

use App\Interfaces\ArticleRepositoryInterface;
use App\Models\Articles;

class ArticleRepository
{

    public function getAllArticle()
    {

        return response()->json([
            'message' => 'Ok',
            'data' => Articles::with('categorys')->paginate(5)
        ]);
    }

    public function getArticleById($article)
    {
        return response()->json([
            'message' => 'Ok',
            'data' => Articles::with('categorys')->findOrFail($article)
        ]);
    }

    public function CreateArticle($article)
    {
        return response()->json([
            'message' => 'Ok',
            'data' => Articles::findOrFail($article)
        ]);
    }

    public function deleteArticle($article)
    {
        $article->delete();

        return response()->json([
            'message' => 'Article Was Deleted'
        ]);
    }
}
