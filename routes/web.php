<?php

use App\Http\Controllers\BoardController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('welcome');});
Route::get('/home', function () { return view('welcome');});
// Route::get('/blog/board', function () { return view('blog.board');});
// Route::resource('/blog', [\App\Http\Controllers\BoardController::class, 'create']);
// Route::resource('blogs', BoardController::class@index);
Route::get('/blogs', [\App\Http\Controllers\BoardController::class, 'index']);


Auth::routes();

