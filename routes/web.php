<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;

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
//Route::get('/', function () {
  //  return view('welcome');
// });




Auth::routes();

Route::get('/',[App\Http\Controllers\Frontend\FrontendController::class,'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::controller(App\Http\Controllers\Admin\SliderController::class)->group(function () {
        Route::get('/sliders', 'index');
        Route::get('/sliders/create', 'create');
        Route::post('/sliders/create', 'store');
        Route::get('/sliders/{slider}/edit','edit');
        Route::put('sliders/{slider}', 'update');
        Route::get('sliders/{slider}/delete','destroy');



    });



    //Directory Routes
    Route::controller(App\Http\Controllers\Admin\DirectoryController::class)->group(function () {
    Route::get('/directory', 'index');
    Route::get('/directory/create', 'create')->name('admin.directory.create');

    Route::post('/directory', 'store');
    Route::get('/directory/{directory}/edit', 'edit');
    Route::put('/directory/{directory}', 'update');

});


 //Department Routes
Route::controller(App\Http\Controllers\Admin\DepartmentController::class)->group(function () {

    Route::get('/department','index');
    Route::get('/department/create', 'create')->name('admin.department.create');
    Route::post('/department','store');
    Route::get('/department/{department}/edit','edit');
    Route::put('/department/{department}', 'update');
    Route::get('/department/{department}/delete', 'destroy');
});

//Extension Routes

    Route::get('/extension',App\Http\Livewire\Admin\Extension\Index::class);




});


