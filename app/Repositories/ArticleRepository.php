<?php

namespace App\Repositories;

use App\Helpers\ResponseFormatter;
use App\Interfaces\ArticleRepositoryInterface;
use App\Models\Articles;

class ArticleRepository
{
    public function getAllArticle()
    {
        try {
            $data = Articles::with('categorys')->paginate(15);
            return ResponseFormatter::success('Collected data  Successfully', $data);
        } catch (Exception $th) {
            return ResponseFormatter::error('Failed to get data', json_decode($th->getMessage()), 500);
        }
    }

    public function getArticleById($article)
    {


        try {
            $data = Articles::with('categorys')->findOrFail($article);
            return ResponseFormatter::success('Collected data  Successfully', $data);
        } catch (Exception $th) {
            return ResponseFormatter::error('Failed to get data', json_decode($th->getMessage()), 500);
        }
    }

    public function CreateArticle($article)
    {
        return response()->json([
            'message' => 'Ok',
            'data' => Articles::findOrFail($article)
        ]);
    }
    public function EditArticle($article)
    {
        return response()->json([
            'message' => 'Ok',
            'data' => Articles::findOrFail($article)
        ]);
    }

    public function deleteArticle($article)
    {

        try {
            $data = $article->delete();
            return ResponseFormatter::success('Collected data  Successfully', $data);
        } catch (Exception $th) {
            return ResponseFormatter::error('Failed to get data', json_decode($th->getMessage()), 500);
        }
    }
}
