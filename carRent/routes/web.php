<?php

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
    return view('welcome');
});

Route::get('/insertType', [App\Http\Controllers\TypeController::class, 'create'])->name('addType');
Route::post('/insertType/store', [App\Http\Controllers\TypeController::class, 'store'])->name('addType');
Route::get('/viewType', [App\Http\Controllers\TypeController::class, 'view'])->name('showType');
Route::get('/deleteType/{id}', [App\Http\Controllers\TypeController::class, 'delete'])->name('deleteType');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
