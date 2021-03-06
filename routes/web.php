<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\SuperAdmin\SuperAdminController;


use App\Http\Controllers\SuperAdmin\StatusController;








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

Route::group(['middleware' => 'prevent-back-history'],function(){












Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/superadmin/home', [App\Http\Controllers\HomeController::class, 'superadminindex'])->name('superadmin.home')->middleware('Role');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminindex'])->name('admin.home')->middleware('Role');
Route::get('/teacher/home', [App\Http\Controllers\HomeController::class, 'teacherindex'])->name('teacher.home')->middleware('Role');

Route::get('/dev', [App\Http\Controllers\HomeController::class, 'devProfile'])->name('dev.profile');


// SuperAdmin management all route start
Route::prefix('superadmin')->group(function(){
    Route::get('/logout', [SuperAdminController::class, 'Logout'])->name('superadmin.logout');





});


// Academic Route Start



Route::prefix('Academic')->group(function(){
   
    Route::resource('manage-session', 'App\Http\Controllers\SuperAdmin\SessionController');
    Route::resource('manage-group', 'App\Http\Controllers\SuperAdmin\GroupController');
    Route::resource('manage-shift', 'App\Http\Controllers\SuperAdmin\ShiftController');
    Route::resource('manage-fee-category', 'App\Http\Controllers\SuperAdmin\FeeCategoryController');



    Route::resource('manage-fee-amount', 'App\Http\Controllers\SuperAdmin\FeeAmountController');


});

// Academic Route End


//manage student start


Route::prefix('Student')->group(function(){

    Route::get('new-reg', 'App\Http\Controllers\SuperAdmin\StudentController@create')->name('new-reg');
    Route::resource('manage-student', 'App\Http\Controllers\SuperAdmin\StudentController');



});

Route::post ('studentstatus/update/{id}', [StatusController::class, 'StudentStatus'])->name('studentstatus.update');



Route::prefix('teacher')->group(function(){

    Route::get('new-join', 'App\Http\Controllers\SuperAdmin\TeacherController@create')->name('new-join');
    Route::resource('manage-teacher', 'App\Http\Controllers\SuperAdmin\TeacherController');


});


Route::get('studentpasswordset/{id}', 'App\Http\Controllers\SuperAdmin\AssignPasswordController@PasswordAssignShow')->name('studentpass.set');

Route::post('Setstudentpassword/{student_id}','App\Http\Controllers\SuperAdmin\AssignPasswordController@PasswordAssignStore')->name('studentpass.update');

// SuperAdmin management all route end

















});//pevent Back middleware