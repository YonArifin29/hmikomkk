<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(Request $request): View 
    {
        $query = DB::table('users as u')
            ->join('articles as a', 'u.id', '=', 'a.user_id')
            ->select('u.name', 'a.id', 'a.title', 'a.image', 'a.content', 'a.created_at')->orderBy('a.id', 'desc');

        // Cek apakah ada input pencarian
        if ($request->has('search') && !empty($request->search)) {
            $query->where('a.title', 'like', '%' . $request->search . '%')
                ->orWhere('u.name', 'like', '%' . $request->search . '%');
        }

        return view('article.article-list', [
            'articles' => $query->paginate(7) // Tambahkan pagination di sini
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
            $article->categories()->sync($request->category);
            return redirect('/article')->with('status', 'success')->with('message', 'Data berhasil disimpan.');
        } else {
            return redirect('/article')->with('status', 'fail')->with('message', 'Data gagal disimpan.');
        }
    }

    public function edit($id): View | RedirectResponse
    {
        $article = Article::with('categories')->find($id);
    
        if (!$article) {
            return redirect('/article')->with('status', 'fail')->with('message', 'Kajian tidak ditemukan.');
        }
    
        $categories = Category::all();
        
        return view('article.edit-article', [
            'article' => $article,
            'categories' => $categories
        ]);
    }

    public function show($id): View | RedirectResponse
    {
        $article = Article::with(['categories', 'user'])->find($id);
    
        if (!$article) {
            return redirect('/article')->with('status', 'fail')->with('message', 'Kajian tidak ditemukan.');
        }
    
        $categories = Category::all();
    
        return view('article.view-article', [
            'article' => $article,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|array',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
        ]);

        $article = Article::findOrFail($id);

        // Update data artikel
        $article->title = $request->title;
        $article->content = $request->content;

        // Handle kategori (banyak ke banyak)
        $article->categories()->sync($request->category);

        // Handle image upload jika ada file baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($article->image) {
                Storage::delete('public/' . $article->image);
            }

            // Simpan gambar baru
            $path = $request->file('image')->store('articles', 'public');
            $article->image = $path;
        }

        $article->save();

        return redirect('/article')->with('success', 'Artikel berhasil diperbarui.');
    }
    public function delete($id)
    {
        // Cari artikel berdasarkan ID
        $article = Article::find($id);

        // Jika artikel tidak ditemukan, kembalikan dengan pesan error
        if (!$article) {
            return redirect('/article')->with('status', 'fail')->with('message', 'Artikel tidak ditemukan.');
        }

        // Hapus gambar jika ada
        if ($article->image) {
            Storage::delete('public/' . $article->image);
        }

        // Hapus relasi kategori (many-to-many)
        $article->categories()->detach();

        // Hapus artikel
        $article->delete();

        return redirect('/article')->with('status', 'success')->with('message', 'Artikel berhasil dihapus.');
    }
}
