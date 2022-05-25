<?php



use App\Http\Controllers\SuperAdmin\SuperAdminController;

use App\Http\Controllers\SuperAdmin\ClassController1;








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
Route::group(['middleware' => 'prevent-back-history'],function(){








Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/superadmin/home', [App\Http\Controllers\HomeController::class, 'superadminindex'])->name('superadmin.home')->middleware('Role');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminindex'])->name('admin.home')->middleware('Role');
Route::get('/teacher/home', [App\Http\Controllers\HomeController::class, 'teacherindex'])->name('teacher.home')->middleware('Role');



// SuperAdmin management all route
Route::prefix('superadmin')->group(function(){
    Route::get('/logout', [SuperAdminController::class, 'Logout'])->name('superadmin.logout');





});




Route::prefix('class')->group(function(){
    // Route::get('/view', [Class1Controller1::class, 'ClassView'])->name('class.view');
    // Route::post('/store', [Class1Controller1::class, 'ClassStore'])->name('class.store');
    // // Route::put('/class-update/{id}', [Class1Controller1::class, 'ClassUpdate'])->name('class-update');
    // // Route::get('/delete/{id}', [Class1Controller1::class, 'ClassDelete'])->name('class.delete');

    Route::resource('manage-class', 'App\Http\Controllers\ClassController');

});



// common route beteen Super admin and admin

/// Student Registration Routes  










});//pevent Back middleware