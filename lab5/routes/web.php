<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tin/ds', [TinController::class, 'index']);
Route::get('/tin/them', [TinController::class, 'them']);
Route::post('/tin/them', [TinController::class, 'them_']);
Route::get('/tin/xoa/{id}', [TinController::class, 'xoa']);
Route::get('/tin/capnhat/{id}', [TinController::class, 'capnhat']);
Route::post('/tin/capnhat/{id}', [TinController::class, 'capnhat_']);