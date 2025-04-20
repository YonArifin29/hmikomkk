<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
     
    {
        $articleCategories = DB::table('detail_category_Articles as ac')
        ->join('categories as c', 'ac.category_id', '=', 'c.id')
        ->select('ac.article_id', 'c.id as category_id', 'c.name as category_name')
        ->get()
        ->groupBy('article_id');
    
        $queryArticle = DB::table('users as u')
        ->join('articles as a', 'u.id', '=', 'a.user_id')
        ->select('u.name as author', 'a.id', 'a.title', 'a.image', 'a.content', 'a.created_at')
        ->orderBy('a.id', 'desc');

        $articles = $queryArticle->get()->map(function ($article) use ($articleCategories) {
        // Clean up title and content
        $article->title = htmlspecialchars($article->title, ENT_QUOTES, 'UTF-8');
        $content = strip_tags($article->content);
        $content = html_entity_decode($content, ENT_QUOTES | ENT_HTML5, 'UTF-8'); 
        $article->content = $content;

        // Tambahkan kategori (kalau ada)
        $article->categories = $articleCategories[$article->id] ?? collect();

        return $article;
    })->take(4);

            $queryNews = DB::table('users as u')
            ->join('news as n', 'u.id', '=', 'n.user_id')
            ->select('u.name as author', 'n.id', 'n.title', 'n.image', 'n.content', 'n.created_at')->orderBy('n.id', 'desc');

            $articleCategories = DB::table('detail_category_news as ac')
            ->join('categories as c', 'ac.category_id', '=', 'c.id')
            ->select('ac.news_id as news_id', 'c.id as category_id', 'c.name as category_name')
            ->get()
            ->groupBy('news_id');

            $news = $queryNews->get()->map(function ($news) use ($articleCategories) {
                // Clean up title and content
                $news->title = htmlspecialchars($news->title, ENT_QUOTES, 'UTF-8');
                $content = strip_tags($news->content);
                $content = html_entity_decode($content, ENT_QUOTES | ENT_HTML5, 'UTF-8'); 
                $news->content = $content; 
                $news->categories = $articleCategories[$news->id] ?? collect(); 
        
                return $news; 
            })->take(4);

        return view('fe.home.home', 
        [
            'articles' => $articles,
            'newses' => $news,
        ]
    ); 
    }
}
