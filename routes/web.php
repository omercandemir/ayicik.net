<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PanelController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('about', [HomeController::class, 'about'])->name('home.about');

Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('blog/{slug}', [BlogController::class, 'show'])->name('blog.detail');
Route::get('blog/category/{slug}', [CategoryController::class, 'showBlog'])->name('blog.category');

Route::get('project', [ProjectController::class, 'index'])->name('project.index');
Route::get('project/{slug}', [ProjectController::class, 'show'])->name('project.detail');
Route::get('project/category/{slug}', [CategoryController::class, 'showProject'])->name('project.category');
Route::get('login', [PanelController::class, 'login'])->name('panel.login');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [PanelController::class, 'index'])->name('panel.index');
});