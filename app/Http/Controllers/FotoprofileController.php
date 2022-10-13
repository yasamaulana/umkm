<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FotoprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $model = User::find($id);
        $fotoprofile = $request->file('fotoprofile')->getClientOriginalName();
        $request->file('fotoprofile')->storeAs('fotoprofile', $fotoprofile);
        Storage::delete('fotoprofile/' . $request->fotoprofilelama);
        $model->fotoprofile = $request->file('gambar5')->getClientOriginalName();
        return back();
    }
}