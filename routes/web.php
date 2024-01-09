<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DepositsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//PUT
Route::put('/dashboard/users/update/{id}', [UsersController::class, 'update'])->middleware('auth')->name('users.update');
Route::put('/dashboard/clients/update/{id}', [ClientsController::class, 'update'])->middleware('auth')->name('clients.update');
Route::put('/dashboard/products/update/{id}', [ProductsController::class, 'update'])->middleware('auth')->name('products.update');
Route::put('/dashboard/deposits/update/{id}', [DepositsController::class, 'update'])->middleware('auth')->name('deposits.update');
//DELETE
Route::delete('/dashboard/users/delete/{id}', [UsersController::class, 'delete'])->middleware('auth')->name('users.delete');
Route::delete('/dashboard/clients/delete/{id}', [ClientsController::class, 'delete'])->middleware('auth')->name('clients.delete');
Route::delete('/dashboard/products/delete/{id}', [ProductsController::class, 'delete'])->middleware('auth')->name('products.delete');
Route::delete('/dashboard/deposits/delete/{id}', [DepositsController::class, 'delete'])->middleware('auth')->name('deposits.delete');
//GET
Route::get('/', function(){ return view('index'); });
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/dashboard/users', [DashboardController::class, 'users'])->middleware('auth')->name('/dashboard/users');
Route::get('/dashboard/sell', [DashboardController::class, 'sell'])->middleware('auth')->name('/dashboard/sell');
Route::get('/dashboard/clients', [DashboardController::class, 'clients'])->middleware('auth')->name('/dashboard/clients');
Route::get('/dashboard/clients/{id}', [DashboardController::class, 'frmModClient'])->middleware('auth')->name('/dashboard/clients/');
Route::get('/dashboard/products', [DashboardController::class, 'products'])->middleware('auth')->name('/dashboard/products');
Route::get('/dashboard/products/{id}', [DashboardController::class, 'frmModProduct'])->middleware('auth')->name('/dashboard/products/');
Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->middleware('auth')->name('/dashboard/profile');
Route::get('/dashboard/statistics', [DashboardController::class, 'statistics'])->middleware('auth')->name('/dashboard/statistics');
//POST
Route::post('/login', [AuthController::class, 'login']);
Route::post('/dashboard/users/create', [UsersController::class, 'create'])->middleware('auth')->name('users.create');
Route::post('/dashboard/clients/create', [ClientsController::class, 'create'])->middleware('auth')->name('clients.create');
Route::post('/dashboard/deposits/create', [DepositsController::class, 'create'])->middleware('auth')->name('deposits.create');
Route::post('/dashboard/products/create', [ProductsController::class, 'create'])->middleware('auth')->name('products.create');
