<?php



use App\Http\Controllers\SuperAdmin\SuperAdminController;

use App\Http\Controllers\SuperAdmin\ClassController;








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
    Route::get('/logout', [ClassController::class, 'Logout'])->name('superadmin.logout');





});




Route::prefix('class')->group(function(){
    Route::get('/view', [ClassController::class, 'ClassView'])->name('class.view');
    Route::post('/store', [ClassController::class, 'ClassStore'])->name('class.store');

    Route::get('/edit/{id}', [ClassController::class, 'ClassEdit'])->name('class.edit');
    Route::post ('/update/{id}', [ClassController::class, 'ClassUpdate'])->name('class.update');
    Route::get('/delete/{id}', [ClassController::class, 'ClassDelete'])->name('class.delete');


});



// common route beteen Super admin and admin

/// Student Registration Routes  










});//pevent Back middleware