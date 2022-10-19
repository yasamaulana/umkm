<?php

namespace App\Http\Controllers;

use App\Models\Follower;
use App\Models\Komentar;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    public function index($id)
    {
        if (Auth()) {
            $follow = Follower::where('namafw', '=', Auth::id())->get();
        }
        $datas = Produk::find($id);
        $comment = Komentar::where('idtoko', '=', $id)->get();
        return view('detail', ["title" => "Home"], compact('datas', 'comment', 'follow'));
    }
}