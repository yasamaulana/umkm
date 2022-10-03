<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileumkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Produk::all();
        return view('adminweb/dataprofile', ["title" => "Profile"], compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Produk::find($id);
        return view(
            'adminweb.edit.editprofile',
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
        if ($request->gambar1 == '') {
            $model->gambar1 = $request->gambar1lama;
        } else {
            $gambar1 = $request->file('gambar1')->getClientOriginalName();
            $request->file('gambar1')->storeAs('gambar', $gambar1);
            Storage::delete('gambar/' . $request->gambar1lama);
            $model->gambar1 = $request->file('gambar1')->getClientOriginalName();
        }
        if ($request->gambar2 == '') {
            $model->gambar2 = $request->gambar2lama;
        } else {
            $gambar2 = $request->file('gambar2')->getClientOriginalName();
            $request->file('gambar2')->storeAs('gambar', $gambar2);
            Storage::delete('gambar/' . $request->gambar2lama);
            $model->gambar2 = $request->file('gambar2')->getClientOriginalName();
        }
        if ($request->gambar3 == '') {
            $model->gambar3 = $request->gambar3lama;
        } else {
            $gambar3 = $request->file('gambar3')->getClientOriginalName();
            $request->file('gambar3')->storeAs('gambar', $gambar3);
            Storage::delete('gambar/' . $request->gambar3lama);
            $model->gambar3 = $request->file('gambar3')->getClientOriginalName();
        }
        if ($request->gambar4 == '') {
            $model->gambar4 = $request->gambar4lama;
        } else {
            $gambar4 = $request->file('gambar4')->getClientOriginalName();
            $request->file('gambar4')->storeAs('gambar', $gambar4);
            Storage::delete('gambar/' . $request->gambar4lama);
            $model->gambar4 = $request->file('gambar4')->getClientOriginalName();
        }
        if ($request->gambar5 == '') {
            $model->gambar5 = $request->gambar5lama;
        } else {
            $gambar5 = $request->file('gambar5')->getClientOriginalName();
            $request->file('gambar5')->storeAs('gambar', $gambar5);
            Storage::delete('gambar/' . $request->gambar5lama);
            $model->gambar5 = $request->file('gambar5')->getClientOriginalName();
        }
        $model->kategori = $request->kategori;
        $model->nama_usaha = $request->nama_usaha;
        $model->nama_pemilik = $request->nama_pemilik;
        $model->alamat = $request->alamat;
        $model->deskripsi = $request->deskripsi;
        $model->wa = $request->wa;
        $model->save();
        return redirect('/data-profile')->with(['success' => 'Data Profile Berhasil Diedit']);
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
        return redirect('/data-profile')->with(['success' => 'Data Produk Berhasil Dihapus']);
    }
}