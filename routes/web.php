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
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

Route::get('contact', [App\Http\Controllers\ContactController::class, 'index'])->name('index');
Route::get('contact/create', [App\Http\Controllers\ContactController::class, 'create'])->name('create');
Route::post('contact/store', [App\Http\Controllers\ContactController::class, 'store'])->name('store');
Route::get('contact/show/{id}', [App\Http\Controllers\ContactController::class, 'show'])->name('show');
Route::get('contact/edit/{id}', [App\Http\Controllers\ContactController::class, 'edit'])->name('edit');
Route::post('contact/update/{id}', [App\Http\Controllers\ContactController::class, 'update'])->name('update');
Route::get('contact/destroy/{id}', [App\Http\Controllers\ContactController::class, 'destroy'])->name('destroy');


/**
 * route for administrator
 */

Route::prefix('admin')->group(function () {
    Route::get('profile', [App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('index');
    Route::get('profile/create', [App\Http\Controllers\Admin\ProfileController::class, 'create'])->name('create');
    Route::post('profile/store', [App\Http\Controllers\Admin\ProfileController::class, 'store'])->name('store');
    Route::get('profile/show/{id}', [App\Http\Controllers\Admin\ProfileController::class, 'show'])->name('show');
    Route::get('profile/edit/{id}', [App\Http\Controllers\Admin\ProfileController::class, 'edit'])->name('edit');
    Route::post('profile/update/{id}', [App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('update');
    Route::get('profile/destroy/{id}', [App\Http\Controllers\Admin\ProfileController::class, 'destroy'])->name('destroy');
    Route::get('profile/change_password', [App\Http\Controllers\Admin\ProfileController::class, 'change_password'])->name('change_password');
    Route::post('profile/update_password/{id}', [App\Http\Controllers\Admin\ProfileController::class, 'update_password'])->name('update_password');

    Route::get('type', [App\Http\Controllers\Admin\TypeController::class, 'index'])->name('index');
    Route::get('type/create', [App\Http\Controllers\Admin\TypeController::class, 'create'])->name('create');
    Route::post('type/store', [App\Http\Controllers\Admin\TypeController::class, 'store'])->name('store');
    Route::get('type/show/{id}', [App\Http\Controllers\Admin\TypeController::class, 'show'])->name('show');
    Route::get('type/edit/{id}', [App\Http\Controllers\Admin\TypeController::class, 'edit'])->name('edit');
    Route::post('type/update/{id}', [App\Http\Controllers\Admin\TypeController::class, 'update'])->name('update');
    Route::get('type/destroy/{id}', [App\Http\Controllers\Admin\TypeController::class, 'destroy'])->name('destroy');    

    Route::get('alternative', [App\Http\Controllers\Admin\AlternativeController::class, 'index'])->name('index');
    Route::get('alternative/create', [App\Http\Controllers\Admin\AlternativeController::class, 'create'])->name('create');
    Route::post('alternative/store', [App\Http\Controllers\Admin\AlternativeController::class, 'store'])->name('store');
    Route::get('alternative/show/{id}', [App\Http\Controllers\Admin\AlternativeController::class, 'show'])->name('show');
    Route::get('alternative/edit/{id}', [App\Http\Controllers\Admin\AlternativeController::class, 'edit'])->name('edit');
    Route::post('alternative/update/{id}', [App\Http\Controllers\Admin\AlternativeController::class, 'update'])->name('update');
    Route::get('alternative/destroy/{id}', [App\Http\Controllers\Admin\AlternativeController::class, 'destroy'])->name('destroy');    
});