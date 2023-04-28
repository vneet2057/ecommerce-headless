<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Category\CategoriesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('index');
    Route::get('connect', 'AccountController@connect')->name('connect');


    // categories routes
    Route::get('/categories',[CategoriesController::class,'index'])->name('admin.category.index');
    Route::get('/add-category',[CategoriesController::class,'create'])->name('admin.category.create');
    Route::post('/add-category',[CategoriesController::class,'store'])->name('admin.category.store');
    Route::get('/edit-category/{id}',[CategoriesController::class,'edit'])->name('admin.category.edit');
    Route::post('/edit-category/{id}',[CategoriesController::class,'update'])->name('admin.category.update');
    Route::get('/delete-category/{id}',[CategoriesController::class,'destroy'])->name('admin.category.destroy');
    Route::get('/change-category-status/{id}',[CategoriesController::class,'changeStatus'])->name('admin.category.change.status');


    Route::post('send-message',[AdminController::class,'sendMessage'])->name('send.message');

});
