<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanruangController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_peminjamanruang = \App\Models\Peminjamanruang::where('nama_peminjam', 'LIKE', '%' .$request->cari. '%')->get();
        }else{
        $data_peminjamanruang = \App\Models\Peminjamanruang::all();
        }
        return view('peminjamanruang.index', ['data_peminjamanruang' => $data_peminjamanruang]);
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
        return redirect('peminjamanruang')->with('berhasil', 'Input Berhasil');
    }

    public function edit($id)
    {
        $peminjamanruang = \App\Models\Peminjamanruang::find($id);
        return view('peminjamanruang/edit', ['peminjamanruang' => $peminjamanruang]);
    }

    public function detail($id)
    {
        $peminjamanruang = \App\Models\Peminjamanruang::find($id);
        return view('peminjamanruang/detail', ['peminjamanruang' => $peminjamanruang]);
    }

    public function update(Request $request, $id)
    {
        $peminjamanruang = \App\Models\Peminjamanruang::find($id);
        $peminjamanruang->update($request->all());
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
        return redirect('/peminjamanruang')->with('berhasil', 'Update Berhasil');
    }

    public function delete($id)
    {
        $peminjamanruang = \App\Models\Peminjamanruang::find($id);
        $peminjamanruang->delete();
        return redirect('/peminjamanruang')->with('berhasil', 'Delete Berhasil');
    }
}
