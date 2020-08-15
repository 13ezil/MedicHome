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

use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;

Route::get('/homepage', [MainController::class, 'home'])->name('homepage');
Route::get('/medicineDetail', [MainController::class, 'medicine'])->name('medicinedetail');
Route::get('/order', [MainController::class, 'order'])->name('order');
Route::get('/history', [MainController::class, 'history'])->name('history');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'admin', 'prefix' => 'admin', 'as' => 'admin.','middleware'=>'auth'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('viewmedicine');
    Route::get('/create', [AdminController::class, 'create'])->name('createmedicine');
    Route::post('/store', [AdminController::class, 'store'])->name('store');
    Route::get('/update/{id}', [AdminController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('delete');
    Route::post('/updatemedicine', [AdminController::class, 'updatemedicine'])->name('updatemedicine');
});

