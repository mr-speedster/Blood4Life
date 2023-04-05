<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [HomeController::class, 'index'])
        ->name('home');

/*Admin Routes*/

Route::get('admin/home', [HomeController::class, 'adminHome'])
        ->name('admin.home')->middleware('Valid_admin');

Route::get('admin/create', [AdminController::class, 'index'])
        ->name('admin.create');

Route::post('admin/create', [AdminController::class, 'create'])
        ->name("admin.create.data");

Route::get('admin/edit/{id}', [AdminController::class, 'edit'])
        ->name("admin.edit");

Route::post('admin/edit/{id}', [AdminController::class, 'update'])
        ->name("admin.edit.data");

Route::get('admin/delete/{id}', [AdminController::class, 'destroy'])
        ->name("admin.delete");