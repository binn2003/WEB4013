<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    // function thongTinSV()
    // {
    //     $fullname = 'Võ Quý Đức';
    //     $birthday = '25/11/2003';
    //     $gender = 'Nam';
    //     $hobby = 'Nghe nhạc';
    //     return view('infoSV',compact('fullname'));
    // }

    function thongTinSV()
    {
        $data = [
                'fullname' => 'Võ Quý Đức',
                'birthday' => '25/11/2003',
                'gender' => 'Nam',
                'hobby' => 'Nghe nhạc',
                'it' => 'Thiết Kế Website'];
        return view('infoSV', $data);
    }
}
