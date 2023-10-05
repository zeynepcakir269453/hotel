<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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

Route::get('register', function () {
    return view('customer_register');
})->name('register');

/*Route::get('list', function () {
    return view('customer_search');
});*/
Route::post('customer_search', [CustomerController::class, 'search'])->name('customer_search');

Route::post('customerregister',  [CustomerController::class, 'customerregister'])->name('customerregister');
Route::get('list',  [CustomerController::class, 'index'])->name('list');
Route::get('/',  [CustomerController::class, 'index'])->name('/');
