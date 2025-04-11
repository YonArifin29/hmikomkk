<?php


use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SosmedController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::middleware(['error.handler'])->group(function () {
//     Route::get('/some-page', [SomeController::class, 'index']);
// });

Route::middleware(['web', 'guest.user'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/articles', [ArticleController::class, 'articles'])->name('articles.index');
    Route::get('/newsFe', [NewsController::class, 'news'])->name('news.news');
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
});

Route::middleware(['web', 'auth.user'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::middleware(['role:admin'])->group(function () {
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
        Route::get('/member/{id}', [MemberController::class, 'show'])->name('member.show');
        Route::put('/member/update/{id}', [MemberController::class, 'update'])->name('member.update');
        Route::delete('/member/delete/{id}', [MemberController::class, 'delete'])->name('member.delete');
    });
    
    // Training
    Route::get('/training', [TrainingController::class, 'index'])->name('training.index');
    Route::get('/training/add', [TrainingController::class, 'add'])->name('training.add');
    Route::post('/training/add_training', [TrainingController::class, 'add_training'])->name('training.insert');
    Route::get('/training/edit/{id}', [TrainingController::class, 'edit'])->name('training.edit');
    Route::put('/training/update/{id}', [TrainingController::class, 'update'])->name('training.update');
    Route::delete('/training/delete/{id}', [TrainingController::class, 'delete'])->name('training.delete');

    // category news and kajian
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/add', [CategoryController::class, 'add'])->name('category.add');
    Route::post('/category/add_category', [CategoryController::class, 'add_category'])->name('category.insert');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('edit.edit');
    Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    // kajian
    Route::get('/article', [ArticleController::class, 'index'])->name('article.index');
    Route::get('/article/add', [ArticleController::class, 'add'])->name('article.add');
    Route::post('/article/add_article', [ArticleController::class, 'add_article'])->name('article.insert');
    Route::get('/article/edit/{id}', [ArticleController::class, 'edit'])->name('edit.edit');
    Route::get('/article/{id}', [ArticleController::class, 'show'])->name('edit.show');
    Route::put('/article/update/{id}', [ArticleController::class, 'update'])->name('article.update');
    Route::delete('/article/delete/{id}', [ArticleController::class, 'delete'])->name('article.delete');

    // news
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/add', [NewsController::class, 'add'])->name('news.add');
    Route::post('/news/add_news', [NewsController::class, 'add_news'])->name('news.insert');
    Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name('edit.edit');
    Route::put('/news/update/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/news/delete/{id}', [NewsController::class, 'delete'])->name('news.delete');

    // Sosmed
    Route::get('/sosmed', [SosmedController::class, 'index'])->name('sosmed.index');
    Route::get('/sosmed/add', [SosmedController::class, 'add'])->name('sosmed.add');
    Route::post('/sosmed/add_sosmed', [SosmedController::class, 'add_sosmed'])->name('sosmed.insert');
    Route::get('/sosmed/edit/{id}', [SosmedController::class, 'edit'])->name('sosmed.edit');
    Route::put('/sosmed/update/{id}', [SosmedController::class, 'update'])->name('sosmed.update');
    Route::delete('/sosmed/delete/{id}', [SosmedController::class, 'delete'])->name('sosmed.delete');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});






// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
// });

require __DIR__.'/auth.php';
