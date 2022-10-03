<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminuser/settingakun', ["title" => "Setting"]);
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
        $item = User::find($id);
        $item->nama = $request->nama;
        $item->alamat = $request->alamat;
        $item->nomor = $request->nomor;
        $item->email = $request->email;
        $item->save();
        return redirect('/setting-akun')->with(['success' => 'Data Akun Kamu Berhasil Diedit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ganti(Request $request)
    {
        $password1 = $request->password1;
        $password2 = $request->password2;

        if (!Hash::check($request->passwordlama, auth()->user()->password)) {
            return redirect('/setting-akun')->with("error", "Gagal! Password lama yang anda masukan salah");
        }
        if ($password1 != $password2) {
            return redirect('/setting-akun')->with("error", "Gagal! Anda salah memasukan konfrmasi password");
        }
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password2)
        ]);
        return redirect('/setting-akun')->with("success", "Berhasil Ganti password");
    }
}