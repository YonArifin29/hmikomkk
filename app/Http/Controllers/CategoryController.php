<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        return view('category.category-list', [
            'categories' => Category::all()->sortDesc()
        ]);
    }

    public function add(): View
    {
        return view('category.add-category', []);
    }

    public function add_category(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ], [
            'name.required' => 'Nama Kategori wajib diisi.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $category = new Category();
        $category->name = $request->name;
        
        if ($category->save()) {
            return redirect('/category')->with('status', 'success')->with('message', 'Data berhasil disimpan.');
        }

        return redirect('/category')->with('status', 'fail')->with('message', 'Data gagal disimpan.');
    }

    public function edit($id)
    {
        $category = Category::find($id);
    
        if (!$category) {
            return redirect('/category')->with('status', 'fail')->with('message', 'Data tidak ditemukan.');
        }
    
        return view('category.edit-category', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        // Validate request data
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ], [
            'name.required' => 'Nama Kategori wajib diisi.',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $category = Category::find($id);
    
        if (!$category) {
            return redirect()->route('category.index')->with('status', 'fail')->with('message', 'Data tidak ditemukan.');
        }
    
        // Update category data
        $category->update([
            'name' => $request->name
        ]);
    
        return redirect()->route('category.index')->with('status', 'success')->with('message', 'Data berhasil diperbarui.');
    }

    public function delete($id)
    {
        // Find user by ID
        $category = Category::find($id);

        // Check if category exists
        if (!$category) {
            return redirect('/category')->with('status', 'fail')->with('message', 'Data gagal dihapus.');
        }

        // Delete the category
        $category->delete();

        // Redirect with success message
        return redirect('/category')->with('status', 'success')->with('message', 'Data berhasil dihapus.');
    }
}
