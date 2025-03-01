<?php

namespace App\Http\Controllers;

use App\Models\DetailTraining;
use App\Models\Member;
use App\Models\Sosmed;
use App\Models\Training;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class MemberController extends Controller
{
    public function index(): View
    {
        return view('member.member-list', [
            'members' => Member::all()->sortDesc()
        ]);
    }

    public function add(): View
    {
        return view('member.add-member');
    }

    public function add_member(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone_number' => 'required|numeric',
            'gender' => 'required',
            'status' => 'required',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'username.required' => 'Username wajib diisi.',
            'phone_number.required' => 'Nomor telepon wajib diisi.',
            'phone_number.numeric' => 'Nomor telepon tidak valid.',
            'gender.required' => 'Jenis kelamin wajib dipilih.',
            'status.required' => 'Status wajib dipilih.',
        ]);

        if ($validator->fails()) {
            return redirect('/member/add')
                ->withErrors($validator)
                ->withInput();
        }

        $member = new Member;
        $member->name = $request->name;
        $member->phone_number = $request->phone_number;
        $member->gender = $request->gender;
        $member->status = $request->status;
        $member->image = 'yon.jpg';

        // Handle Image Upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('members', 'public');
            $member->image = $imagePath;
        }

        if ($member->save()) {
            return redirect('/member')->with('status', 'success')->with('message', 'Data berhasil disimpan.');
        } else {
            return redirect('/member')->with('status', 'fail')->with('message', 'Data gagal disimpan.');
        }
    }

    public function edit($id): View |RedirectResponse
    {
       
        $member = Member::find($id);
        $trainings = Training::all();
        $training = DetailTraining::where('member_id', $id)->get();

        // dd($training);
        
        if (!$member) {
            return redirect('/member')->with('status', 'fail')->with('message', 'Anggota tidak ditemukan.');
        }

        return view('member.edit-member', ['member' => $member, 'trainings' => $trainings, 'trainingsFollowedByMember' => $training]);
    }

    public function update(Request $request, $id)
    {
        
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone_number' => 'required|numeric',
            'gender' => 'required',
            'status' => 'required',
            'training' => 'array', // Ensure it's an array
            'training.*' => 'exists:training,id' // Validate each selected training
        ]);

        if ($validator->fails()) {
            return redirect('/member/edit/' . $id)
                ->withErrors($validator)
                ->withInput();
        }

        $member = Member::findOrFail($id);

        $member->name = $request->name;
        $member->phone_number = $request->phone_number;
        $member->gender = $request->gender;
        $member->status = $request->status;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('members', 'public');
            $member->image = $imagePath;
        }

        // Save member first
        $member->save();

        // Update training details (sync to pivot table)

        // dd($request->all());


        $member->trainings()->sync($request->training);

        return redirect('/member')->with('status', 'success')->with('message', 'Data berhasil diperbarui.');
    }


}
