<?php

use App\Http\Controllers\CategoryCotroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MealController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\VisitorController;
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



Route::get('/', [VisitorController ::class, 'index'])->name('VPage');

Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');


    Route::get('/category', [CategoryCotroller::class, 'show'])->name('cat.show');

    Route::post('/category/store', [CategoryCotroller::class, 'store'])->name('cat.store');

    Route::get('/category/{id}', [CategoryCotroller::class, 'delete'])->name('cat.delete');

    Route::post('/category/update', [CategoryCotroller::class, 'update'])->name('cat.update');

    //meals

    Route::get('/meal/show', [MealController::class, 'index'])->name('meal.index');

    Route::get('/meal/create', [MealController::class, 'create'])->name('meal.create');

    Route::post('/meal/store', [MealController::class, 'store'])->name('meal.store');

    Route::get('/meal/edit/{id}', [MealController::class, 'edit'])->name('meal.edit');
    
    Route::get('/meal/delete/{id}', [MealController::class, 'delete'])->name('meal.delete');

    Route::post('/meal/update/{id}', [MealController::class, 'update'])->name('meal.update');   

    Route::get('/meal/show/{id}', [MealController::class, 'show_details'])->name('meal_deatails');


    //orders router

    Route::post('/order/store', [HomeController::class, 'orderStore'])->name('order.store');   

    Route::get('/order/show', [HomeController::class, 'show_order'])->name('order.show');

  
    Route::post('/order/{id}/status', [HomeController::class, 'changeStatus'])->name('order.status');

    
   
