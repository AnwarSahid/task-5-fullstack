<?php

namespace App\Repositories;

use App\Helpers\ResponseFormatter;

use App\Models\Categories;

class CategoryRepository
{
    public function getallCategory()
    {
        try {
            $data = Categories::paginate(15);
            return ResponseFormatter::success('Collected data successfully', $data, 200);
        } catch (Exception $th) {
            return ResponseFormatter::error('Failed to load', json_decode($th->getMessage()), 500);
        }
    }


    public function getCategoryByUserId()
    {
        try {
            $data = Categories::where('user_id', auth()->user()->id)->limit(15)->latest()->get();
            return ResponseFormatter::success('Collected data successfully', $data, 200);
        } catch (Exception $th) {
            return ResponseFormatter::error('Failed to load', json_decode($th->getMessage()), 500);
        }
    }

    public function createCategory($request)
    {

        try {
            $data = Categories::create([
                'name' => $request->name,
                'user_id' => auth('sanctum')->user()->id,
            ]);
            return ResponseFormatter::created('Create Category Successfully', $data);
        } catch (Exception $th) {
            return ResponseFormatter::error('Failed to Create', json_decode($th->getMessage()), 500);
        }
    }

    public function updateCategory($request, $category)
    {

        try {
            $data = $category->update([
                'name' => $request->name,
            ]);
            return ResponseFormatter::created('Update Category Successfully', $data);
        } catch (Exception $th) {
            return ResponseFormatter::error('Failed to update', json_decode($th->getMessage()), 500);
        }
    }
    public function deleteCategory($categorys)
    {
        try {
            $data = $categorys->delete();
            return ResponseFormatter::created('Delete    Category Successfully', $data);
        } catch (Exception $th) {
            return ResponseFormatter::error('Failed to update', json_decode($th->getMessage()), 500);
        }
    }
}
