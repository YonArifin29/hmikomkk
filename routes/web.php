<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/user', function () {
//     return view('user-list');
// });

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/add', [UserController::class, 'add']);
Route::post('/user/add_user', [UserController::class, 'add_user']);
Route::post('/user/delete', [UserController::class, 'delete']);


Route::get('/user/edit', function () {
    return view('edit-user');
});
