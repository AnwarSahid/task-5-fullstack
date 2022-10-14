<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\CategoryRequest;
use App\Models\Articles;
use App\Models\Categories;
use App\Repositories\ArticleRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class ArticleApiController extends Controller
{

    private ArticleRepository  $articleRepository;
    private CategoryRepository $categoryRepository;

    public function __construct(ArticleRepository $articleRepository, CategoryRepository $categoryRepository)
    {
        $this->articleRepository = $articleRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        return $this->articleRepository->getAllArticle();
    }

    public function storeArticle(ArticleRequest $request)
    {

        return $this->articleRepository->CreateArticle($request);
    }

    public function show($articles)
    {
        return $this->articleRepository->getArticleById($articles);
    }

    public function updateArticle(Request $request, Articles $articles)
    {
        return $request;
        return $this->articleRepository->EditArticle($request, $articles);
    }

    public function destroy(Articles $articles)
    {
        return $this->articleRepository->deleteArticle($articles);
    }

    public function storeCategory(CategoryRequest $request)
    {
        return $this->categoryRepository->createCategory($request);
    }


    public function showCategory()
    {
        return $this->categoryRepository->getCategoryByUserId();
    }

    public function updateCategory(Request $request, Categories $category)
    {
        return $request;
        return $this->categoryRepository->updateCategory($request, $category);
    }

    public function destroyCategory(Categories $category)
    {
        return $this->categoryRepository->deleteCategory($category);
    }

    public function allCategory()
    {
        return $this->categoryRepository->getallCategory();
    }
}
