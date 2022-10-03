<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Wisata::all();
        return view(
            'adminweb.datawisata',
            ["title => Wisata"],
            compact('datas')
        );
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
        $gambar1 = $request->file('gambar1')->getClientOriginalName();
        $request->file('gambar1')->storeAs('wisata', $gambar1);
        $gambar2 = $request->file('gambar2')->getClientOriginalName();
        $request->file('gambar2')->storeAs('wisata', $gambar2);
        $gambar3 = $request->file('gambar3')->getClientOriginalName();
        $request->file('gambar3')->storeAs('wisata', $gambar3);
        $gambar4 = $request->file('gambar4')->getClientOriginalName();
        $request->file('gambar4')->storeAs('wisata', $gambar4);
        $gambar5 = $request->file('gambar5')->getClientOriginalName();
        $request->file('gambar5')->storeAs('wisata', $gambar5);
        $model = new Wisata();
        $model->gambar1 = $request->file('gambar1')->getClientOriginalName();
        $model->gambar2 = $request->file('gambar2')->getClientOriginalName();
        $model->gambar3 = $request->file('gambar3')->getClientOriginalName();
        $model->gambar4 = $request->file('gambar4')->getClientOriginalName();
        $model->gambar5 = $request->file('gambar5')->getClientOriginalName();
        $model->nama_wisata = $request->nama_wisata;
        $model->deskripsi = $request->deskripsi;
        $model->alamat = $request->alamat;
        $model->gmaps = $request->gmaps;
        $model->fb = $request->fb;
        $model->ig = $request->ig;
        $model->yt = $request->yt;
        $model->save();
        return redirect('/data-wisata')->with(['success' => 'Data Wisata Berhasil Ditambah']);
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
        $model = Wisata::find($id);
        return view(
            'adminweb.edit.editwisata',
            ["title => Wisata"],
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
        $model = Wisata::find($id);
        if ($request->gambar1 == '') {
            $model->gambar1 = $request->gambar1lama;
        } else {
            $gambar1 = $request->file('gambar1')->getClientOriginalName();
            $request->file('gambar1')->storeAs('wisata', $gambar1);
            Storage::delete('wisata/' . $request->gambar1lama);
            $model->gambar1 = $request->file('gambar1')->getClientOriginalName();
        }
        if ($request->gambar2 == '') {
            $model->gambar2 = $request->gambar2lama;
        } else {
            $gambar2 = $request->file('gambar2')->getClientOriginalName();
            $request->file('gambar2')->storeAs('wisata', $gambar2);
            Storage::delete('wisata/' . $request->gambar2lama);
            $model->gambar2 = $request->file('gambar2')->getClientOriginalName();
        }
        if ($request->gambar3 == '') {
            $model->gambar3 = $request->gambar3lama;
        } else {
            $gambar3 = $request->file('gambar3')->getClientOriginalName();
            $request->file('gambar3')->storeAs('wisata', $gambar3);
            Storage::delete('wisata/' . $request->gambar3lama);
            $model->gambar3 = $request->file('gambar3')->getClientOriginalName();
        }
        if ($request->gambar4 == '') {
            $model->gambar4 = $request->gambar4lama;
        } else {
            $gambar4 = $request->file('gambar4')->getClientOriginalName();
            $request->file('gambar4')->storeAs('wisata', $gambar4);
            Storage::delete('wisata/' . $request->gambar4lama);
            $model->gambar4 = $request->file('gambar4')->getClientOriginalName();
        }
        if ($request->gambar5 == '') {
            $model->gambar5 = $request->gambar5lama;
        } else {
            $gambar5 = $request->file('gambar5')->getClientOriginalName();
            $request->file('gambar5')->storeAs('wisata', $gambar5);
            Storage::delete('wisata/' . $request->gambar5lama);
            $model->gambar5 = $request->file('gambar5')->getClientOriginalName();
        }
        $model->nama_wisata = $request->nama_wisata;
        $model->deskripsi = $request->deskripsi;
        $model->alamat = $request->alamat;
        $model->gmaps = $request->gmaps;
        $model->fb = $request->fb;
        $model->ig = $request->ig;
        $model->yt = $request->yt;
        $model->status = $request->status;
        $model->save();
        return redirect('/data-wisata')->with(['success' => 'Data Profile Berhasil Diedit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $model = Wisata::find($id);
        Storage::delete('wisata/' . $model->gambar1);
        Storage::delete('wisata/' . $model->gambar2);
        Storage::delete('wisata/' . $model->gambar3);
        Storage::delete('wisata/' . $model->gambar4);
        Storage::delete('wisata/' . $model->gambar5);
        $model->delete();
        return redirect('/data-wisata')->with(['success' => 'Data Produk Berhasil Dihapus']);
    }
}