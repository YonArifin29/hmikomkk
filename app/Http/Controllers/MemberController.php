<?php

namespace App\Http\Controllers;

use App\Models\DetailTraining;
use App\Models\Member;
use App\Models\Sosmed;
use App\Models\Training;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;



class MemberController extends Controller
{
    public function index(Request $request): View
    {
        $query = Member::query();

        // Cek apakah ada input pencarian
        if ($request->has('search') && !empty($request->search)) {
            $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('phone_number', 'like', '%' . $request->search . '%');
        }

        return view('member.member-list', [
            'members' => $query->orderBy('created_at', 'desc')->paginate(7)
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
        $member->date_of_birth = $request->date_of_birth;
        $member->address = $request->address;
        $member->year_of_entering_college = $request->year_of_entering_college;
        $member->year_of_entering_hmi = $request->year_of_entering_hmi;
        
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
       
        $member = Member::with('detailSosmed.sosmed')->find($id);
        $trainings = Training::all();
        $training = DetailTraining::where('member_id', $id)->get();
        $platforms = Sosmed::all();
        
        if (!$member) {
            return redirect('/member')->with('status', 'fail')->with('message', 'Anggota tidak ditemukan.');
        }

        return view('member.edit-member', ['member' => $member, 'trainings' => $trainings, 'trainingsFollowedByMember' => $training,  'platforms' => $platforms]);
    }

    public function show(Request $request, $id): View|RedirectResponse|JsonResponse
    {
        // Ambil data member dengan relasi sosial media
        $member = Member::with('detailSosmed.sosmed')->find($id);

        // Jika anggota tidak ditemukan, kembalikan response sesuai tipe request
        if (!$member) {
            if ($request->wantsJson()) {
                return response()->json(['status' => 'fail', 'message' => 'Anggota tidak ditemukan.'], 404);
            }
            return redirect('/member')->with('status', 'fail')->with('message', 'Anggota tidak ditemukan.');
        }

        // Ambil data pelatihan dan sosial media
        $trainings = Training::all();
        $training = DetailTraining::where('member_id', $id)->get();
        $platforms = Sosmed::all();

        // Jika request adalah JSON, kembalikan data sebagai response API
        if ($request->wantsJson()) {
            return response()->json([
                'member' => $member,
                'trainings' => $trainings,
                'trainingsFollowedByMember' => $training,
                'platforms' => $platforms
            ]);
        }

        // Jika request biasa (HTML), kembalikan ke view
        return view('member.view-member', [
            'member' => $member,
            'trainings' => $trainings,
            'trainingsFollowedByMember' => $training,
            'platforms' => $platforms
        ]);
    }

    public function update(Request $request, $id)
    {
        
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone_number' => 'required|numeric',
            'gender' => 'required',
            'status' => 'required',
            'training' => 'array', // Ensure it's an array
            'training.*' => 'exists:training,id', // Validate each selected training
            'social_media' => 'array',
            'social_media.*.platform_id' => 'exists:sosmed,id',
            'social_media.*.link' => 'nullable|url'
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
        $member->date_of_birth = $request->date_of_birth;
        $member->address = $request->address;
        $member->year_of_entering_college = $request->year_of_entering_college;
        $member->year_of_entering_hmi = $request->year_of_entering_hmi;
        
         // Cek apakah ada file baru
        if ($request->hasFile('image')) {
        // Hapus foto lama jika ada
        if ($member->image) {
            Storage::disk('public')->delete($member->image);
        }

        // Simpan foto baru
        $imagePath = $request->file('image')->store('members', 'public');
        $member->image = $imagePath;
    }

        // Save member first
        $member->save();

        $member->trainings()->sync($request->training);

         // Update social media
         $member->sosmed()->delete();
         if ($request->has('sosmed')) {
             foreach ($request->sosmed as $social) {
                 if (!empty($social['link'])) {
                     $member->sosmed()->create([
                         'sosmed_id' => $social['sosmed_id'],
                         'link' => $social['link']
                     ]);
                 }
             }
         }

        return redirect('/member')->with('status', 'success')->with('message', 'Data berhasil diperbarui.');
    }

    public function delete($id)
    {
        // Find member by ID
        $member = Member::find($id);

        // Check if member exists
        if (!$member) {
            return redirect('/member')->with('status', 'fail')->with('message', 'Data gagal dihapus.');
        }

        if ($member->image) {
            Storage::disk('public')->delete($member->image);
        }
        // Hapus relasi sosial media dan training sebelum menghapus member
        $member->sosmed()->delete();
        $member->trainings()->detach();
        
        // Delete the member
        $member->delete();

        // Redirect with success message
        return redirect('/member')->with('status', 'success')->with('message', 'Data berhasil dihapus.');
    }

    public function memberFe(Request $request): View
    {
        $query = Member::query();

        // Cek apakah ada input pencarian
        if ($request->has('search') && !empty($request->search)) {
            $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('phone_number', 'like', '%' . $request->search . '%');
        }

        return view('fe.member.member', [
            'members' => $query->orderBy('created_at', 'desc')->paginate(7)
        ]);
    }


}
