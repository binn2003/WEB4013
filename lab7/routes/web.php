<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get("hs", [App\Http\Controllers\HsController::class, 'hs']);
Route::post("hs", [App\Http\Controllers\HsController::class, 'hs_store'])->name('hs_store');
Route::get("sv", [App\Http\Controllers\SvController::class, 'sv']);
Route::post("sv", [App\Http\Controllers\SvController::class, 'sv_store'])->name('sv_store');

use App\Mail\GuiEmail;

Route::get("/guimail", function(){
    Mail::mailer('mailgun')
    ->send( new GuiEmail() );
 });