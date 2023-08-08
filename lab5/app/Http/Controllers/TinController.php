<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\TinModel;

class TinController extends Controller
{
    public function index()
    {
        $data = \App\Models\TinModel::all();
        return view('danhsach', ['data' => $data]);
    }

    public function them()
    {
        return view('them');
    }

    public function them_()
    {
        $t = new TinModel;
        $t->id = $_POST['id'];
        $t->tieuDe = $_POST['tieuDe'];
        $t->tomTat = $_POST['tomTat'];
        $t->urlHinh = $_POST['urlHinh'];
        $t->idLT = $_POST['idLT'];
        $t->ngayDang = Carbon::now();
        $t->save();
        return redirect('/tin/ds');
    }

    public function xoa($id)
    {
        $t = TinModel::find($id);
        if ($t == null)
            return redirect('/thongbao');
        $t->delete();
        return redirect('/tin/ds');
    }

    public function capnhat($id)
    {
        $t = TinModel::find($id);
        if ($t == null)
            return redirect('/thongbao');
        return view('capnhattin', ['t' => $t]);
    }

    public function capnhat_($id)
    {
        $t = TinModel::find($id);
        if ($t == null)
        return redirect('/thongbao');
        $t->tieuDe = $_POST['tieuDe'];
        $t->tomTat = $_POST['tomTat'];
        $t->urlHinh = $_POST['urlHinh'];
        $t->idLT = $_POST['idLT'];
        $t->save();
        return redirect('/tin/ds');
    }
}
