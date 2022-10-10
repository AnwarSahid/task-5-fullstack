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
            'data' => Articles::all()
        ]);
    }

    public function getArticleById($article)
    {
        return response()->json([
            'message' => 'Ok',
            'data' => Articles::findOrFail($article)
        ]);
    }

    public function CreateArticle($article)
    {



        return response()->json([
            'message' => 'Ok',
            'data' => Articles::findOrFail($article)
        ]);
    }
}
