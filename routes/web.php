<?php

use App\Http\Controllers\AdminPanel\ProductController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminHomeController as AdminHouseController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AdminPanel\Homecontroller as Admin;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;


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
Route::get('/hello',function(){
    return 'Hello World';
});

Route::get('/welcome', function () {
    return view('welcome');
});
// Route::get( '/',action:\App\Http\Controllers\HomeController::class,'index')->name('home');
Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/test',[HomeController::class,'test'])->name('test');
Route::get('/param/{id}/{number}',[App\Http\Controllers\HomeController::class,'param'])->name('param');
Route::post('/save',[HomeController::class,'save'])->name('save');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::prefix('admin')->name('admin.')->group(function() {
    // ******************** ADMIN PANEL ROUTES ********************
    Route::get('/', [AdminPanelHomeController::class, 'index'])->name('index');

    // ******************** ADMIN CATEGORY ROUTES ********************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/index2', 'index2')->name('index2');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });
});


// ************ ADMIN PRODUCT ROUTES
Route::prefix('product')->name('product.')->controller(ProductController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}','update')->name('update');
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/delete/{id}', 'destroy')->name('delete');
});
