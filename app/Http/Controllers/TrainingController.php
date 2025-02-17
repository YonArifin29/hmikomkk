<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class TrainingController extends Controller
{
    public function index(): View
    {
        return view('training.training-list', [
            'trainings' => Training::all()->sortDesc()
        ]);
    }

    public function add(): View
    {
        return view('training.add-training', []);
    }

    public function add_training(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'training_name' => 'required',
            'training_category' => 'required',
        ], [
            'training_name.required' => 'Nama Training wajib diisi.',
            'training_category.required' => 'Kategori training wajib diisi.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $training = new Training();
        $training->training_name = $request->training_name;
        $training->training_category = $request->training_category;
        
        if ($training->save()) {
            return redirect('/training')->with('status', 'success')->with('message', 'Data berhasil disimpan.');
        }

        return redirect('/training')->with('status', 'fail')->with('message', 'Data gagal disimpan.');
    }

    public function edit($id)
    {
        $training = Training::find($id);
    
        if (!$training) {
            return redirect('/training')->with('status', 'fail')->with('message', 'Data tidak ditemukan.');
        }
    
        return view('training.edit-training', ['training' => $training]);
    }
    
    public function update(Request $request, $id)
    {
        // Validate request data
        $validator = Validator::make($request->all(), [
            'training_name' => 'required',
            'training_category' => 'required',
        ], [
            'training_name.required' => 'Nama Training wajib diisi.',
            'training_category.required' => 'Kategori training wajib diisi.',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $training = Training::find($id);
    
        if (!$training) {
            return redirect()->route('training.index')->with('status', 'fail')->with('message', 'Data tidak ditemukan.');
        }
    
        // Update training data
        $training->update([
            'training_name' => $request->training_name,
            'training_category' => $request->training_category,
        ]);
    
        return redirect()->route('training.index')->with('status', 'success')->with('message', 'Data berhasil diperbarui.');
    }

    public function delete($id)
    {
        // Find user by ID
        $training = Training::find($id);

        // Check if training exists
        if (!$training) {
            return redirect('/training')->with('status', 'fail')->with('message', 'Data gagal dihapus.');
        }

        // Delete the training
        $training->delete();

        // Redirect with success message
        return redirect('/training')->with('status', 'success')->with('message', 'Data berhasil dihapus.');
    }
    
}
