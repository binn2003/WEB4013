<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinModel extends Model
{
    // use HasFactory;
    protected $table = 'tin';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $dates = ['ngayDang'];
    protected $fillable = [
        'tieuDe', 
        'tomTat', 
        'urlHinh', 
        'ngayDang', 
        'noiDung', 
        'loaiTin', 
        'xem', 
        'noiBat', 
        'anHien', 
        'tags', 
        'lang',
    ];
}
