<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        $categories = Category::all();

        // dd($categories);
        return view('article.add-article', ['categories' => $categories]);
    }

    public function add_article(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required',
            'content' => 'required',
        ], [
            'title.required' => 'Title wajib diisi.',
            'image.required' => 'Gambar wajib diisi.',
            'content.require' => 'Konten wajib diisi.',
        ]);

        if ($validator->fails()) {
            return redirect('/article/add')
                ->withErrors($validator)
                ->withInput();
        }

        $article = new Article;
        $article->user_id = '1';
        $article->title = $request->title;
        $article->image = $request->image;
        $article->content = $request->content;

        // Handle Image Upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('articles', 'public');
            $article->image = $imagePath;
        }

        if ($article->save()) {
            $article->category()->sync($request->category);
            return redirect('/article')->with('status', 'success')->with('message', 'Data berhasil disimpan.');
        } else {
            return redirect('/article')->with('status', 'fail')->with('message', 'Data gagal disimpan.');
        }
    }
}
