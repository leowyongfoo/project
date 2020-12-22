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

Route::get('/insertCar', [App\Http\Controllers\CarController::class, 'create'])->name('addCar');
Route::post('/insertCar/store', [App\Http\Controllers\CarController::class, 'store'])->name('addCar');
Route::get('/viewCar', [App\Http\Controllers\CarController::class, 'view'])->name('showCar');
Route::get('/deleteCar/{id}', [App\Http\Controllers\CarController::class, 'delete'])->name('deleteCar');
Route::get('/editCar/{id}', [App\Http\Controllers\CarController::class, 'edit'])->name('editCar');
Route::post('/updateCar', [App\Http\Controllers\CarController::class, 'update'])->name('updateCar');
Route::get('/clientView', [App\Http\Controllers\CarController::class, 'clientView'])->name('clientView');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
