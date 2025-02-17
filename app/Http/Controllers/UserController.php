<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        return view('user.user-list', [
            'users' => User::all()->sortDesc()
        ]);
    }

    public function add(): View
    {
        return view('user.add-user', []);
    }

    public function add_user(Request $request)
    {

        $user = new User;
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required',
            'phone_number' => 'required|numeric',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'username.required' => 'Username wajib diisi.',
            'phone_number.required' => 'Nomor telepon wajib diisi.',
            'phone_number.numeric' => 'Nomor telepon tidak valid.',
        ]);

        if ($validator->fails()) {
            return redirect('/user/add')
                        ->withErrors($validator)
                        ->withInput();
        }
 
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password =  Hash::make($request->password);
        $user->phone_number = $request->phone_number;
        
        $user->save();
        
        $status = $user->save();

        if($status) {
            return redirect('/user')->with('status', 'success')->with('message', 'Data berhasil disimpan.');
        } else {
            return redirect('/user')->with('status', 'fail')->with('message', 'Data gagal disimpan.');
        }
    }

    public function edit($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect('/user')->with('status', 'fail')->with('message', 'User tidak ditemukan.');
        }

        return view('user.edit-user', ['user' => $user]);
    }

    public function update(Request $request, User $user, $id)
    {
        // Validate request data
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required',
            'phone_number' => 'required|numeric|digits_between:10,15',
            'role' => 'required',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'username.required' => 'Username wajib diisi.',
            'phone_number.required' => 'Nomor telepon wajib diisi.',
            'role.required' => 'Role wajib dipilih.',
            'phone_number.numeric' => 'Nomor telepon tidak valid.',
            'phone_number.digits_between' => 'Nomor telepon tidak valid.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::find($id);

        // Update user data
        $user->update($request->only(['name', 'username', 'phone_number', 'role']));

        return redirect()->route('user.index')->with('status', 'success')->with('message', 'User berhasil diperbarui.');
    }

    public function delete($id)
    {
        // Find user by ID
        $user = User::find($id);

        // Check if user exists
        if (!$user) {
            return redirect('/user')->with('status', 'fail')->with('message', 'Data gagal dihapus.');
        }

        // Delete the user
        $user->delete();

        // Redirect with success message
        return redirect('/user')->with('status', 'success')->with('message', 'Data berhasil dihapus.');
    }
}
