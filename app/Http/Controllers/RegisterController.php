<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('daftar', ["title" => "Daftar"]);
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
        $request->validate([
            'nama' => ['required'],
            'alamat' => ['required'],
            'nomor' => ['required'],
            'status' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:5'],
        ]);

        $model = new User();
        $model->nama = $request->nama;
        $model->alamat = $request->alamat;
        $model->nomor = $request->nomor;
        $model->email = $request->email;
        $model->status = $request->status;
        $model->password = Hash::make($request->password);
        $model->save();
        return redirect('/login')->with(['success' => 'Pembuatan akun berhasil dilakukan, silahkan untuk login kembali']);
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
        $data = $request->except('_token');
        $item->update($data);
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
}