<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // BẮT BUỘC PHẢI THÊM DÒNG NÀY

class BookController extends Controller
{
    public function index()
    {
        // Lấy 8 cuốn rẻ nhất
        $data = DB::select("select * from sach order by gia_ban asc limit 0,8");
        return view("books.index", compact("data"));
    }

    public function theloai($id)
    {
        // Lấy sách theo thể loại
        $data = DB::select("select * from sach where the_loai = ?", [$id]);
        return view("books.index", compact("data"));
    }
}