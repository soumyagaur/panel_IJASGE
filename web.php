<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;

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











Auth::routes();
Route::group(["middleware" => "web1"], function(){
// Route::any('/', [HomeController::class, 'index']);

Route::any('/home', [ArticleController::class, 'index']);
Route::any('/', [ArticleController::class, 'index']);

// article

Route::any('add_article', [ArticleController::class, 'add_article']);
Route::post('add', [ArticleController::class, 'add'])->name('add');

Route::any('{id}/edit_article',[ArticleController::class, 'edit_article']);
Route::put('{id}/update',[ArticleController::class, 'update']);

Route::get('{id}/delete',[ArticleController::class, 'destroy']);



Route::get('all_article', [ArticleController::class, 'all_article']);

// editor 

Route::any('add_editor', [ArticleController::class, 'add_editor']);
Route::post('store', [ArticleController::class, 'store'])->name('store');

Route::any('{id}/edit_editor',[ArticleController::class, 'edit_editor']);
Route::put('{id}/update_editor',[ArticleController::class, 'update_editor']);
Route::get('delete_editor/{id}',[ArticleController::class, 'delete_editor']);


Route::any('all_editor', [ArticleController::class, 'all_editor']);



Route::any('add_indexing', [ArticleController::class, 'add_indexing']);
Route::any('manage_user', [ArticleController::class, 'manage_user']);




});




