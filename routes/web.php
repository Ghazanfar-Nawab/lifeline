<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\userController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::view('/add-post','add-post');
Route::post('/post-add',  [AdminController::class, 'post_add']);
Route::get('/show-posts',  [AdminController::class, 'show_posts']);
Route::get('/user-posts',  [userController::class, 'show_posts']);

Route::get('delete-product/{id}', [AdminController::class, 'deleteproduct']);
Route::get('edit/{id}', [AdminController::class, 'show_product']);
Route::post('edit/update_product', [AdminController::class, 'update_product']);
