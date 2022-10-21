<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpeController;

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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route operator
Route::get('/operator',[OpeController::class, 'index']);
Route::get('/operator/form',[OpeController::class, 'create']);
Route::post('/operator/store',[OpeController::class, 'store']);
Route::get('/operator/edit/{id}',[OpeController::class, 'edit']);
Route::put('/operator/{id}',[OpeController::class, 'update']);
Route::delete('/operator/{id}',[OpeController::class, 'destroy']);