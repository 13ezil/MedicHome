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

Route::group(['middleware'=>'auth','middleware' => 'user'], function () {
Route::get('/homepage', [MainController::class, 'home'])->name('homepage');
Route::get('/medicineDetail', [MainController::class, 'medicine'])->name('medicinedetail');
Route::get('/order', [MainController::class, 'order'])->name('order');
Route::get('/history', [MainController::class, 'history'])->name('history');
Route::get('/selectOrder/{id}', [MainController::class, 'selectOrder'])->name('selectorder');
Route::post('/placeOrder', [MainController::class, 'placeOrder'])->name('placeorder');
});
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

Route::group(['namespace' => 'admin', 'prefix' => 'admin', 'as' => 'admin.','middleware'=>'auth','middleware' => 'admin'], function () {
    Route::get('/view', [AdminController::class, 'index'])->name('viewmedicine');
    Route::get('/create', [AdminController::class, 'create'])->name('createmedicine');
    Route::post('/store', [AdminController::class, 'store'])->name('store');
    Route::get('/update/{id}', [AdminController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('delete');
    Route::post('/updatemedicine', [AdminController::class, 'updatemedicine'])->name('updatemedicine');
    Route::get('/notification', [AdminController::class, 'notification'])->name('notification');
    Route::post('/getnotification', [AdminController::class, 'getNotification'])->name('getnotification');
});

Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout'])->name('logout');