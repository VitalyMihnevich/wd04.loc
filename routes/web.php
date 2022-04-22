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

Route::get('mypage', [\App\Http\Controllers\MyController::class, 'myPage']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//ADMIN
Route::get('admin', [\App\Http\Controllers\Admin\AdminController::class, 'admin']);

//ADMIN COUNTRY
//Route::get('admin/country', [\App\Http\Controllers\Admin\CountryController::class, 'index']);
//Route::get('admin/country/create', [\App\Http\Controllers\Admin\CountryController::class, 'create']);
//Route::post('admin/country/store', [\App\Http\Controllers\Admin\CountryController::class, 'store'])->name('admin.country_store');
//Route::get('admin/country/{id}/edit', [\App\Http\Controllers\Admin\CountryController::class, 'edit'])->name('admin.country_edit');
//Route::put('admin/country/{id}/update', [\App\Http\Controllers\Admin\CountryController::class, 'update'])->name('admin.country_update');
//Route::delete('admin/country/{id}/delete', [\App\Http\Controllers\Admin\CountryController::class, 'delete'])->name('admin.country_delete');

Route::prefix('admin')->group(function (){

    Route::resource('article', \App\Http\Controllers\Admin\ArticleController::class);
    Route::resource('country', \App\Http\Controllers\Admin\CountryController::class);
});

//Route::resource('admin/article', \App\Http\Controllers\Admin\ArticleController::class);
//AUTH

//Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
//Route::get('login', [\App\Http\Controllers\AuthController::class, 'login']);
//Route::post('auth', [\App\Http\Controllers\AuthController::class, 'auth']);

Auth::routes();

