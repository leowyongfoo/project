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
Route::get('/carDetail/{id}', [App\Http\Controllers\CarController::class, 'viewCarDetail'])->name('car.detail');

Route::post('/addMyCar', [App\Http\Controllers\MyCarController::class, 'add'])->name('add.to.car');
Route::get('/myCar', [App\Http\Controllers\MyCarController::class, 'viewMyCar'])->name('my.car');
Route::get('/viewMyCar', [App\Http\Controllers\MyCarController::class, 'viewMyCar'])->name('view.myCart'); 
Route::get('/deleteMyCar/{id}', [App\Http\Controllers\MyCarController::class, 'delete'])->name('deleteMyCar');

Route::post('/createorder', [App\Http\Controllers\OrderController::class, 'add'])->name('create.order');
Route::get('/myorder', [App\Http\Controllers\OrderController::class, 'viewOrder'])->name('my.order');

Route::post('/paypal', [App\Http\Controllers\PaymentController::class, 'payWithpaypal'])->name('paypal');
Route::get('/status', [App\Http\Controllers\PaymentController::class, 'getPaymentStatus'])->name('status');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
