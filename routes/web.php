<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// user
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/add', [UserController::class, 'add'])->name('user.add');
Route::post('/user/add_user', [UserController::class, 'add_user'])->name('user.insert');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/delete/{id}', [UserController::class, 'delete']);

// member
Route::get('/member', [MemberController::class, 'index'])->name('member.index');
Route::get('/member/add', [MemberController::class, 'add'])->name('member.add');
Route::post('/member/add_member', [MemberController::class, 'add_member'])->name('member.insert');
Route::get('/member/edit/{id}', [MemberController::class, 'edit'])->name('member.edit');
Route::put('/member/update/{id}', [MemberController::class, 'update'])->name('member.update');
Route::delete('/member/delete/{id}', [MemberController::class, 'delete'])->name('member.delete');

// Training
Route::get('/training', [TrainingController::class, 'index'])->name('training.index');
Route::get('/training/add', [TrainingController::class, 'add'])->name('training.add');
Route::post('/training/add_training', [TrainingController::class, 'add_training'])->name('training.insert');
Route::get('/training/edit/{id}', [TrainingController::class, 'edit'])->name('training.edit');
Route::put('/training/update/{id}', [TrainingController::class, 'update'])->name('training.update');
Route::delete('/training/delete/{id}', [TrainingController::class, 'delete'])->name('training.delete');