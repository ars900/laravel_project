<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GroupController;
use Illuminate\Support\Facades\Auth;
use App\Http\Kernel;
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


//admin


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/gogroup', [App\Http\Controllers\GroupController::class, 'gogroup'])->name('gogroup');
Route::get('/add_user', [App\Http\Controllers\GroupController::class, 'add_user'])->name('add_user');

Route::post('/makegroup', [App\Http\Controllers\GroupController::class, 'makegroup'])->name('makegroup');


Route::get('/group', [App\Http\Controllers\GroupController::class, 'index'])->name('group');



Route::post('/register',"App\Http\Controllers\Auth\RegisterController@create")->name('create');


Auth::routes();

