<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

// 第一引数のURLに相当する'about'には'/'を省略してもアクセスさせることが可能
Route::get('about', function () {
    return view('about');
});

// Route::get('/contact', 'ContactController@index');

Route::get('/contact', [ContactController::class, 'index']);