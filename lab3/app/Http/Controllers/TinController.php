<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class TinController extends Controller
{
    function index()
    {
        return view("home");
    }

    function chitiet($id = 0)
    {
        $tin = DB::table('tin')->select('*')->where('id', $id)->first();
        $data = ['id' => $id, 'tin' => $tin];
        return view("chitiet", $data);
    }

    function tintrongloai($loaiTin)
    {
        $listtin = DB::table('tin')->where('loaiTin', $loaiTin)->get();
        $tenloai = DB::table('tin')
            ->join('loaitin', 'tin.loaiTin', '=', 'loaitin.idLT')
            ->select('moTa','idLT')
            ->where('loaiTin', '=', $loaiTin)
            ->first();
        return view("tintrongloai", ['loaiTin' => $loaiTin, 'listtin' => $listtin, 'tenloai' => $tenloai]);
    }
}
