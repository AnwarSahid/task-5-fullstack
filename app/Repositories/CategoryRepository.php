<?php

namespace App\Repositories;

use App\Models\Categories;

class CategoryRepository
{

    public function getCategoryByUserId()
    {
        $categories = Categories::where('user_id', auth()->user()->id)->limit(15)->latest()->get();
        return response()->json([
            'message' => 'ok',
            'data' => $categories
        ]);
    }

    public function createCategory($request)
    {
        $article = Categories::create([
            'name' => $request->name,
            'user_id' => auth('sanctum')->user()->id,
        ]);

        return response()->json([
            'message' => 'Category Was Created',
            'data' => $article
        ]);
    }

    public function updateCategory($request, $category)
    {
        $category->update([
            'name' => $request->name,
        ]);

        return response()->json([
            'message' => 'Category Was Updated',
            'data' => $category
        ]);
    }
    public function deleteCategory($categorys)
    {
        $categorys->delete();
        return response()->json([
            'message' => 'Category Was Deleted',
        ]);
    }
}
