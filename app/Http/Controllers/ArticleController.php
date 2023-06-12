<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Category;
use App\Models\Author;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article deleted successfully.');
    }
    public function create()
    {
        $categories = Category::all();
        $authors = Author::all();
        return view('articles.create', ['categories' => $categories, 'authors' => $authors]);
    }

    public function store(Request $request)
{
    // Kiểm tra và xác thực dữ liệu được gửi từ form
    $validatedData = $request->validate([
        'hinhanh' => 'required',
        'tieude' => 'required',
        'ten_bhat' => 'required',
        'ma_tloai' => 'required',
        'ma_tgia' => 'required',
        'tomtat' => 'required',
    ]);

    // Tạo bản ghi mới
    $article = new Article();
    $article->hinhanh = $validatedData['hinhanh'];
    $article->tieude = $validatedData['tieude'];
    $article->ten_bhat = $validatedData['ten_bhat'];
    $article->ma_tloai = $validatedData['ma_tloai'];
    $article->ma_tgia = $validatedData['ma_tgia'];
    $article->tomtat = $validatedData['tomtat'];
    $article->save();

    // Chuyển hướng về trang danh sách bài viết
    return redirect()->route('articles.index')->with('success', 'Article created successfully.');
}

public function edit(Article $article)
{
    $categories = Category::all();
    $authors = Author::all();
    return view('articles.edit', ['article' => $article, 'categories' => $categories, 'authors' => $authors]);
}
public function update(Request $request, Article $article)
{
    $validatedData = $request->validate([
        'hinhanh' => 'required',
        'tieude' => 'required',
        'ten_bhat' => 'required',
        'tomtat' => 'required',
    ]);

    $article->hinhanh = $validatedData['hinhanh'];
    $article->tieude = $validatedData['tieude'];
    $article->ten_bhat = $validatedData['ten_bhat'];
    $article->tomtat = $validatedData['tomtat'];
    $article->save();

    return redirect()->route('articles.index')->with('success', 'Article updated successfully.');
}

public function show(Article $article)
{
    $article->load('category', 'author');
    return view('articles.show', compact('article'));
}


}
