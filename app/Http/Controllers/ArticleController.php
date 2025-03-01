<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        $article = new Article();
        
        return view('article.article-list', [
            'articles' => $article->getAticleWithWriter()
        ]);
    }

    public function add(): View
    {
        return view('article.add-article');
    }
}
