<?php

namespace App\Http\Controllers;

use App\Models\Sosmed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class SosmedController extends Controller
{
    public function index(): View
    {
        return view('sosmed.sosmed-list', [
            'sosmeds' => Sosmed::all()->sortDesc()
        ]);
    }

    public function add(): View
    {
        return view('sosmed.add-sosmed', []);
    }

    public function add_sosmed(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'platform_name' => 'required'
        ], [
            'platform_name.required' => 'Platform sosmed wajib diisi.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $sosmed = new Sosmed();
        $sosmed->platform_name = $request->platform_name;
        
        if ($sosmed->save()) {
            return redirect('/sosmed')->with('status', 'success')->with('message', 'Data berhasil disimpan.');
        }

        return redirect('/sosmed')->with('status', 'fail')->with('message', 'Data gagal disimpan.');
    }

    public function edit($id)
    {
        $sosmed = Sosmed::find($id);
    
        if (!$sosmed) {
            return redirect('/sosmed')->with('status', 'fail')->with('message', 'Data tidak ditemukan.');
        }
    
        return view('sosmed.edit-sosmed', ['sosmed' => $sosmed]);
    }
    
    public function update(Request $request, $id)
    {
        // Validate request data
        $validator = Validator::make($request->all(), [
            'platform_name' => 'required',
        ], [
            'platform_name.required' => 'Platform sosmed wajib diisi.',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $sosmed = Sosmed::find($id);
    
        if (!$sosmed) {
            return redirect()->route('sosmed.index')->with('status', 'fail')->with('message', 'Data tidak ditemukan.');
        }
    
        // Update sosmed data
        $sosmed->update([
            'platform_name' => $request->platform_name
        ]);
    
        return redirect()->route('sosmed.index')->with('status', 'success')->with('message', 'Data berhasil diperbarui.');
    }

    public function delete($id)
    {
        // Find user by ID
        $sosmed = Sosmed::find($id);

        // Check if sosmed exists
        if (!$sosmed) {
            return redirect('/sosmed')->with('status', 'fail')->with('message', 'Data gagal dihapus.');
        }

        // Delete the sosmed
        $sosmed->delete();

        // Redirect with success message
        return redirect('/sosmed')->with('status', 'success')->with('message', 'Data berhasil dihapus.');
    }
}
