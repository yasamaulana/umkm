<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = User::where('status', 'admin')->get();
        return view('adminweb/dataadmin', ["title" => "Data User"], compact('datas'));
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
        $model = new User();
        $model->nama = $request->nama;
        $model->alamat = $request->alamat;
        $model->nomor = $request->nomor;
        $model->email = $request->email;
        $model->status = $request->status;
        $model->password = Hash::make($request->password);
        $model->save();
        return back()->with(['success' => 'Berhasi Menambah Data Pengguna']);
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
        //
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
        $model = User::find($id);
        $model->nama = $request->nama;
        $model->alamat = $request->alamat;
        $model->nomor = $request->nomor;
        $model->email = $request->email;
        $model->password = Hash::make($request->password);
        $model->save();
        return back()->with(['success' => 'Berhasi Mengedit Data Pengguna']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = User::find($id);
        $model->delete();
        return back()->with(['success' => 'Berhasi Menghapus Data Pengguna']);
    }
}