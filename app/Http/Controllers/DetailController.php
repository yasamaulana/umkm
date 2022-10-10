<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use App\Models\Produk;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($id)
    {
        $datas = Produk::find($id);
        $comment = Komentar::where('idtoko', '=', $id)->get();
        return view('detail', ["title" => "Home"], compact('datas', 'comment'));
    }
}