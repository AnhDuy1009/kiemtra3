<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class BookController extends Controller
{
    public function laySachKinhDien()
    {
       
        $sach = DB::table('sach as s')
            ->join('dm_the_loai as t', 's.the_loai', '=', 't.id')
            ->select('s.tieu_de', 's.nha_xuat_ban', 's.tac_gia', 's.gia_ban', 's.hinh_anh')
            ->where('t.ten_the_loai', '=', 'Tác phẩm kinh điển')
            ->get();

        return view('sach_kinh_dien', compact('sach'));
    }
}