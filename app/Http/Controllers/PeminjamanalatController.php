<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanalatController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_peminjamanalat = \App\Models\Peminjamanalat::where('nama_peminjam', 'LIKE', '%' .$request->cari. '%')->get();
        }else{
            $data_peminjamanalat = \App\Models\Peminjamanalat::all();
        }
        return view('peminjamanalat.index', ['data_peminjamanalat' => $data_peminjamanalat]);
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
        return redirect('peminjamanalat')->with('berhasil', 'Input Berhasil');
    }

    public function edit($id)
    {
        $peminjamanalat = \App\Models\Peminjamanalat::find($id);
        return view('peminjamanalat/edit', ['peminjamanalat' => $peminjamanalat]);
    }

    public function detail($id)
    {
        $peminjamanalat = \App\Models\Peminjamanalat::find($id);
        return view('peminjamanalat/detail', ['peminjamanalat' => $peminjamanalat]);
    }

    public function update(Request $request, $id)
    {
        $peminjamanalat = \App\Models\Peminjamanalat::find($id);
        $peminjamanalat->update($request->all());
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
        return redirect('/peminjamanalat')->with('berhasil', 'Update Berhasil');
    }

    public function delete($id)
    {
        $peminjamanalat = \App\Models\Peminjamanalat::find($id);
        $peminjamanalat->delete();
        return redirect('/peminjamanalat')->with('berhasil', 'Delete Berhasil');
    }

}
