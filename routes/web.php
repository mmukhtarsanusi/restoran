<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('login.index');
});
Route::resource('login', LoginController::class);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/admin', function() {
    return view('admin.index');
})->name('admin.index');
Route::resource('admin/userlist', UserController::class);