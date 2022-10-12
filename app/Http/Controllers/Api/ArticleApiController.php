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
    public function show($articles)
    {
        return $this->articleRepository->getArticleById($articles);
    }
    public function update(Request $request, Articles $articles)
    {
        //
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
