<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\UsersController;

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

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/createarticleview', function () {
    return view('createarticle');
});

Route::get('/', [ArticlesController ::class, 'baseRedirect']);
Route::get('/article/{id?}', [ArticlesController ::class, 'openArticle']);
Route::get('/article/{id?}/edit', [ArticlesController ::class, 'openEditArticle']);
Route::get('/article/{id?}/edit', [ArticlesController ::class, 'openEditArticle']);
Route::get('/manageusers', [UsersController ::class, 'openManageUser']);


Route::post('/register', [AuthController ::class, 'register']);
Route::post('/login', [AuthController ::class, 'login']);
Route::post('/deletearticle', [ArticlesController ::class, 'deleteArticle']);
Route::post('/editarticle', [ArticlesController ::class, 'editArticle']);
Route::post('/removeadmin', [UserController ::class, 'removeAdmin']);
Route::post('/makeadmin', [UserController ::class, 'makeAdmin']);
Route::post('/createarticle', [ArticlesController ::class, 'createArticle']);
