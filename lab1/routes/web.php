<?php

use App\Http\Controllers\TinController;
use App\Http\Controllers\SinhVienController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [TinController::class, 'index']);
Route::get('/lien-he', [TinController::class, 'lienhe']);
Route::get('/ct/{id}', [TinController::class, 'lay1tin']);
Route::get('/thongtinsv', [SinhVienController::class, 'thongTinSV']);
// Route::get('/', function () {
//     return view('welcome');
// });
