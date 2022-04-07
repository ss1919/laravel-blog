<?php


use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryIndexController;
use App\Http\Controllers\TagIndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contacts');
Route::get('/article/{slug}', [HomeController::class, 'show'])->name('posts.single');
Route::get('/category/{slug}', [CategoryIndexController::class, 'index'])->name('categories.single');
Route::get('/tag/{slug}', [TagIndexController::class, 'index'])->name('tags.single');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', [MainController::class, 'index'])->name('admin.index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/tags', TagController::class);
    Route::resource('/posts', PostController::class);
});

Route::group(['middleware' => 'guest'], function (){
    Route::get('/registration', [UserController::class, 'create'])->name('registration.create');
    Route::post('/registration', [UserController::class, 'store'])->name('registration.store');
    Route::get('/login', [UserController::class, 'loginForm'])->name('login.create');
    Route::post('/login', [UserController::class, 'login'])->name('login');
});

Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');
