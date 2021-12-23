<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormpeminjamanalatController extends Controller
{
    public function index(Request $request)
    {
        $data_peminjamanalat = \App\Models\Peminjamanalat::all();
        return view('form.peminjamanalat', ['data_peminjamanalat' => $data_peminjamanalat]);
    }

    public function create(Request $request)
    {
        $peminjamanalat= \App\Models\Peminjamanalat::create($request->all());
        if($request->hasFile('ktm')){
            $request->file('ktm')->move('file/', $request->file('ktm')->getClientOriginalName());
            $peminjamanalat->ktm = $request->file('ktm')->getClientOriginalName();
            $peminjamanalat->save();
        }
        if($request->hasFile('surat_peminjaman')){
            $request->file('surat_peminjaman')->move('file/', $request->file('surat_peminjaman')->getClientOriginalName());
            $peminjamanalat->surat_peminjaman = $request->file('surat_peminjaman')->getClientOriginalName();
            $peminjamanalat->save();
        }
        return redirect('formpeminjamanalat/')->with('berhasil', 'Input Berhasil');
    }

}
