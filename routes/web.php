<?php

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

Route::get('/', function () {
    return view('auth/login');
});




Route::get('/', [HomeController::class, 'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect']);




Route::get('/catagory', [AdminController::class, 'view_catagory']);

Route::post('/addCatagory', [AdminController::class, 'addCatagory']);

Route::get('/delete/{id}', [AdminController::class, 'delete']);

Route::get('/product', [AdminController::class, 'product']);

Route::post('/addProduct', [AdminController::class, 'addProduct']);

Route::get('/showProduct', [AdminController::class, 'ShowProduct']);

Route::get('/delete-product/{id}', [AdminController::class, 'deleteproduct']);

Route::get('/Edit-product/{id}', [AdminController::class, 'Editproduct']);

Route::post('/update-product/{id}', [AdminController::class, 'updateproduct']);
