<?php

use App\Http\Controllers\{ArticleController,CategoryController,PannelController,MenuController,HomeController};
// use App\Http\Controllers\CategoryController;
// use App\Http\Controllers\PannelController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/menu/{name}', [HomeController::class,'menu'])->name('menu');



Auth::routes();

Route::prefix('/pannel')->group(function () {
    Route::get('/', [PannelController::class,'index'])->name('pannel');
    Route::get('/articles/edit/{id}', [PannelController::class,'articleEdit'])->name('article-edit');
    Route::get('/menu/edit/{id}', [PannelController::class,'menuEdit'])->name('menu-edit');
    /* Article Routes */
    Route::get('/articles', [ArticleController::class,'index'])->name('pannel-articles');
    Route::post('/articles', [ArticleController::class,'store'])->name('article-store');
    Route::delete('/articles/{id}', [ArticleController::class,'destroy'])->name('article-delete');
    Route::put('/articles/edit/{id}', [ArticleController::class,'update'])->name('article-update');
    /* Category */
    Route::get('/categories', [CategoryController::class,'index'])->name('pannel-categories');
    Route::post('/categories', [CategoryController::class,'store'])->name('category-store');
    Route::delete('/categories/{id}', [CategoryController::class,'destroy'])->name('category-delete');
    Route::put('/categories/edit/{id}', [CategoryController::class,'update'])->name('category-update');
    /* menu */
    Route::get('/menu', [MenuController::class,'index'])->name('pannel-menu');
    Route::post('/menu', [MenuController::class,'store'])->name('menu-store');
    Route::delete('/menu/{id}', [MenuController::class,'destroy'])->name('menu-delete');
    Route::put('/menu/edit/{id}', [MenuController::class,'update'])->name('menu-update');
});

