<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataumkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Produk::all();
        return view('adminweb/dataumkm', ["title" => "UMKM"], compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Produk::find($id);
        return view(
            'adminweb.edit.editumkm',
            compact('model')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Produk::find($id);
        $model->nama_usaha = $request->nama_usaha;
        $model->wa = $request->wa;
        $model->ig = $request->ig;
        $model->tiktok = $request->tiktok;
        $model->fb = $request->fb;
        $model->shopee = $request->shopee;
        $model->tokped = $request->tokped;
        $model->save();
        return redirect('/data-umkm')->with(['success' => 'Data Profile Berhasil Diedit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Produk::find($id);
        Storage::delete('gambar/' . $model->gambar1);
        Storage::delete('gambar/' . $model->gambar2);
        Storage::delete('gambar/' . $model->gambar3);
        Storage::delete('gambar/' . $model->gambar4);
        Storage::delete('gambar/' . $model->gambar5);
        $model->delete();
        return redirect('/data-umkm')->with(['success' => 'Data Produk Berhasil Dihapus']);
    }
}