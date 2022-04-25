<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

// Route to home page
Route::get('/', [HomeController::class,'index']);

// Route to products page
Route::get('/products', [AdminController::class,'product']);

// Route to form to insert products  
Route::get('/insert_product', [AdminController::class,'insert_products']);

// Route to insert product
Route::post('/uploadproduct', [AdminController::class,'uploadprod']);

// Route to delete product
Route::get('/delete_product/{id}', [AdminController::class,'deleteprod']);

// Route to update product
Route::get('/updateprod/{id}', [AdminController::class,'updateprod']);

// Route to submit product update form
Route::post('/apdateproduct/{id}',[AdminController::class, 'submitupdateform']);

// Route to displays users
Route::get('/users', [AdminController::class,'user']);

// Route to delete user
Route::get('/delete_user/{id}', [AdminController::class,'delete_user']);


// Route to redirect users after login 
Route::get('/redirects', [HomeController::class,'redirects']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
