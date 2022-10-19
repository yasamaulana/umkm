<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UmkmController extends Controller
{
    public function index()
    {
        $datas = Produk::all();
        return view('umkm', ["title" => "UMKM"], compact('datas'));
    }

    public function cari(Request $request)
    {
        // $datas = Produk::latest();

        // if (request('cari')) {
        //     $datas->where('nama_pemilik', 'like', '%' . request('cari') . '%');
        // }
        // return view('umkm', ["title" => "UMKM"], compact('datas'));
    }
}