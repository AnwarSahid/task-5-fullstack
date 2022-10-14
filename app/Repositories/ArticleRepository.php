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

    public function CreateArticle($request)
    {
        try {
            $attr = $request->validate([
                'title' => 'required|max:255',
                'image' => 'required|mimes:jpg,png,jfif|max:2048',
                'content' => 'required',
                'category_id' => 'required'
            ]);

            $attr['user_id'] = auth()->user()->id;
            $attr['image'] = $request->file('image')->store('image', 'public');
            $data = Articles::create($attr);
            return ResponseFormatter::created('Create Article Successfully', $data);
        } catch (Exception $th) {
            return ResponseFormatter::error('Failed to get data', json_decode($th->getMessage()), 500);
        }
    }
    public function EditArticle($request, $articles)
    {
        try {
            $attr = $request->validate([
                'title' => 'required|max:255',
                'image' => 'required|mimes:jpg,png,jfif|max:2048',
                'content' => 'required',
                'category_id' => 'required'
            ]);

            $attr['user_id'] = auth()->user()->id;
            $attr['image'] = $request->file('image')->store('image', 'public');
            $data = $articles->update($attr);
            return ResponseFormatter::created('Update Article Successfully', $data);
        } catch (Exception $th) {
            return ResponseFormatter::error('Failed to get data', json_decode($th->getMessage()), 500);
        }
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
