<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/xemnhieu', function () {
    $query = DB::table('tin')
        ->select('id', 'tieuDe', 'xem')
        ->orderBy('xem', 'desc')
        ->limit(10);
    $data = $query->get();
    foreach ($data as $tin) echo "<h2><a style='text-decoration: none;' href='/tin/{$tin->id}'> {$tin->tieuDe} </a></h2>";
});

Route::get('/tinmoi', function () {
    $query = DB::table('tin')
        ->select('id', 'tieuDe', 'ngayDang')
        ->orderBy('ngayDang', 'desc')
        ->limit(10);
    $data = $query->get();
    return view('tinmoi', ['data' => $data]);
});

Route::get('/tintrongloai/{id}', function ($id) {
    $query = DB::table('tin')
        ->select('id', 'tieuDe', 'tomTat')
        ->where('loaiTin', '=', $id)
        ->orderBy('ngayDang', 'desc')
        ->get();
    $tenloai = DB::table('tin')
    ->join('loaitin', 'tin.loaiTin', '=', 'loaitin.idLT')
    ->select('moTa')
    ->where('loaiTin','=', $id)
    ->first();
    return view('tintrongloai', ['data' => $query,'tenloai' => $tenloai]);
});

Route::get('/tin/{id}', function ($id) {
    $tin = DB::table('tin')->where('id', $id)->first();
    return view('chitiettin', ['tin' => $tin]);
});
