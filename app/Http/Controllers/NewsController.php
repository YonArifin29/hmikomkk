<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;        
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function index(Request $request): View
    {
        $query = DB::table('users as u')
            ->join('news as n', 'u.id', '=', 'n.user_id')
            ->select('u.name', 'n.id', 'n.title', 'n.image', 'n.content', 'n.created_at')->orderBy('n.id', 'desc');

        // Cek apakah ada input pencarian
        if ($request->has('search') && !empty($request->search)) {
            $query->where('n.title', 'like', '%' . $request->search . '%')
                ->orWhere('u.name', 'like', '%' . $request->search . '%');
        }

        return view('news.news-list', [
            'newses' => $query->paginate(7)
        ]);
    }

    public function add(): View
    {
        $categories = Category::all();

        // dd($categories);
        return view('news.add-news', ['categories' => $categories]);
    }

    public function add_news(Request $request)
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
            return redirect('/news/add')
                ->withErrors($validator)
                ->withInput();
        }

        $news = new news;
        $news->user_id = '1';
        $news->title = $request->title;
        $news->image = $request->image;
        $news->content = $request->content;

        // Handle Image Upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('newses', 'public');
            $news->image = $imagePath;
        }

        if ($news->save()) {
            $news->categories()->sync($request->category);
            return redirect('/news')->with('status', 'success')->with('message', 'Data berhasil disimpan.');
        } else {
            return redirect('/news')->with('status', 'fail')->with('message', 'Data gagal disimpan.');
        }
    }

    public function edit($id): View | RedirectResponse
    {
        $news = news::with('categories')->find($id);
    
        if (!$news) {
            return redirect('/news')->with('status', 'fail')->with('message', 'Berita tidak ditemukan.');
        }
    
        $categories = Category::all();
        
        return view('news.edit-news', [
            'news' => $news,
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

        $news = news::findOrFail($id);

        // Update data news
        $news->title = $request->title;
        $news->content = $request->content;

        // Handle kategori (banyak ke banyak)
        $news->categories()->sync($request->category);

        // Handle image upload jika ada file baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($news->image) {
                Storage::delete('public/' . $news->image);
            }

            // Simpan gambar baru
            $path = $request->file('image')->store('newses', 'public');
            $news->image = $path;
        }

        $news->save();

        return redirect('/news')->with('success', 'news berhasil diperbarui.');
    }
    public function delete($id)
    {
        // Cari news berdasarkan ID
        $news = news::find($id);

        // Jika news tidak ditemukan, kembalikan dengan pesan error
        if (!$news) {
            return redirect('/news')->with('status', 'fail')->with('message', 'news tidak ditemukan.');
        }

        // Hapus gambar jika ada
        if ($news->image) {
            Storage::delete('public/' . $news->image);
        }

        // Hapus relasi kategori (many-to-many)
        $news->categories()->detach();

        // Hapus news
        $news->delete();

        return redirect('/news')->with('status', 'success')->with('message', 'news berhasil dihapus.');
    }
}
