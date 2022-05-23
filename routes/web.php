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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/superadmin/home', [App\Http\Controllers\HomeController::class, 'superadminindex'])->name('superadmin.home')->middleware('Role');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminindex'])->name('admin.home')->middleware('Role');
Route::get('/teacher/home', [App\Http\Controllers\HomeController::class, 'teacherindex'])->name('teacher.home')->middleware('Role');