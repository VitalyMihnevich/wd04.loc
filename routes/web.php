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

//ADMIN
Route::get('main', [\App\Http\Controllers\Admin\AdminController::class, 'main']);
Route::get('admin/country', [\App\Http\Controllers\Admin\CountryController::class, 'index']);
Route::get('admin/country/create', [\App\Http\Controllers\Admin\CountryController::class, 'create']);
Route::post('admin/country/store', [\App\Http\Controllers\Admin\CountryController::class, 'store'])->name('admin.country_store');
Route::get('admin/country/edit/{id}', [\App\Http\Controllers\Admin\CountryController::class, 'edit'])->name('admin.country_edit');
Route::put('admin/country/update/{id}', [\App\Http\Controllers\Admin\CountryController::class, 'update'])->name('admin.country_update');
Route::delete('admin/country/delete/{id}', [\App\Http\Controllers\Admin\CountryController::class, 'delete'])->name('admin.country_delete');
