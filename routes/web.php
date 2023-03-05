<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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
    return view('welcome');
});
Route::get('/customers/list', [CustomerController::class, 'index'])->name("customer.index");
Route::delete('customers/{id}', [CustomerController::class, 'destroy'])->name("customer.destroy");
Route::get('/customers/create', [CustomerController::class, 'create'])->name("customer.create");
Route::post('/customers', [CustomerController::class, 'store'])->name("customer.store");
Route::get('customers/{id}', [CustomerController::class, 'show'])->name("customer.show");
Route::put('customers/{id}', [CustomerController::class, 'update'])->name("customer.update");


