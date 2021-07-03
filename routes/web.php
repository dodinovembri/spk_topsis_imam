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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('recomendation', [App\Http\Controllers\RecomendationController::class, 'index'])->name('index');
Route::get('recomendation/create', [App\Http\Controllers\RecomendationController::class, 'create'])->name('create');
Route::post('recomendation/store', [App\Http\Controllers\RecomendationController::class, 'store'])->name('store');
Route::get('recomendation/show/{id}', [App\Http\Controllers\RecomendationController::class, 'show'])->name('show');
Route::get('recomendation/edit/{id}', [App\Http\Controllers\RecomendationController::class, 'edit'])->name('edit');
Route::post('recomendation/update/{id}', [App\Http\Controllers\RecomendationController::class, 'update'])->name('update');
Route::get('recomendation/destroy/{id}', [App\Http\Controllers\RecomendationController::class, 'destroy'])->name('destroy');
Route::get('recomendation/filter', [App\Http\Controllers\RecomendationController::class, 'filter'])->name('filter');
Route::post('recomendation/search', [App\Http\Controllers\RecomendationController::class, 'search'])->name('search');

Route::get('destination', [App\Http\Controllers\DestinationController::class, 'index'])->name('index');
Route::get('destination/create', [App\Http\Controllers\DestinationController::class, 'create'])->name('create');
Route::post('destination/store', [App\Http\Controllers\DestinationController::class, 'store'])->name('store');
Route::get('destination/show/{id}', [App\Http\Controllers\DestinationController::class, 'show'])->name('show');
Route::get('destination/edit/{id}', [App\Http\Controllers\DestinationController::class, 'edit'])->name('edit');
Route::post('destination/update/{id}', [App\Http\Controllers\DestinationController::class, 'update'])->name('update');
Route::get('destination/destroy/{id}', [App\Http\Controllers\DestinationController::class, 'destroy'])->name('destroy');

Route::get('category', [App\Http\Controllers\CategoryController::class, 'index'])->name('index');
Route::get('category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('create');
Route::post('category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('store');
Route::get('category/show/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('show');
Route::get('category/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('edit');
Route::post('category/update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('update');
Route::get('category/destroy/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('destroy');
