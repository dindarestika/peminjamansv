<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormpeminjamanruangController extends Controller
{
    public function index(Request $request)
    {
        $data_peminjamanruang = \App\Models\Peminjamanruang::all();
        return view('form.peminjamanruang', ['data_peminjamanruang' => $data_peminjamanruang]);
    }

    public function create(Request $request)
    {
        $peminjamanruang= \App\Models\Peminjamanruang::create($request->all());
        if($request->hasFile('ktm')){
            $request->file('ktm')->move('file/', $request->file('ktm')->getClientOriginalName());
            $peminjamanruang->ktm = $request->file('ktm')->getClientOriginalName();
            $peminjamanruang->save();
        }
        if($request->hasFile('surat_peminjaman')){
            $request->file('surat_peminjaman')->move('file/', $request->file('surat_peminjaman')->getClientOriginalName());
            $peminjamanruang->surat_peminjaman = $request->file('surat_peminjaman')->getClientOriginalName();
            $peminjamanruang->save();
        }
        return redirect('formpeminjamanruang/')->with('berhasil', 'Input Berhasil');
    }

}
