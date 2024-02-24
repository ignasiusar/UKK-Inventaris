<?php
  
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SupllierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PinjamController;
use App\Models\User;
use App\Models\Supplier;
use Illuminate\Support\Facades\Has;
use Illuminate\Support\Facades\Sorage;
  
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
    return view('index');
});
  
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'userInd'])->name('user.ind');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('admin/inventaris/index', [HomeController::class,'adminInvent'])->name('admin.invent');
    Route::get('admin/supplier', [HomeController::class,'adminSup'])->name('admin.sup');
    Route::get('admin/pinjam', [HomeController::class,'adminPinj'])->name('admin.pinj');
    Route::resource('supplier',SupllierController::class);
    Route::resource('products', ProductController::class);
    Route::resource('pinjam', PinjamController::class);
});