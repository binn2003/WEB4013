<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DienThoaiController extends Controller
{
    //Hiện thị giao diện
    public function view()
    {
        return view('');
    }

    public function add()
    {
        return view('addDienThoai');
    }
}
