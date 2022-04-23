<?php
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminHomeController as AdminHouseController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AdminPanel\Homecontroller as Admin;


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

//**************Admin Panel Routes***************************
Route::get('/admin',[Admin::class,'index'])->name('admin');

//****************Admin Category ROUTES********************
Route::get('/admin/category',[\App\Http\Controllers\AdminPanel\CategoryController::class,'index'])->name('admin_category');
Route::get('/admin/category/create',[\App\Http\Controllers\AdminPanel\CategoryController::class,'create'])->name('admin_category_create');

Route::post('/admin/category/store',[\App\Http\Controllers\AdminPanel\CategoryController::class,'store'])->name('admin_category_store');
