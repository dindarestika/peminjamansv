<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatapeminjamanController extends Controller
{
    public function datapeminjamanalat(Request $request)
    {
        if($request->has('cari')){
            $data_peminjamanalat = \App\Models\Peminjamanalat::where('nama_peminjam', 'LIKE', '%' .$request->cari. '%')->get();
        }else{
            $data_peminjamanalat = \App\Models\Peminjamanalat::all();
        }
        return view('data.peminjamanalat', ['data_peminjamanalat' => $data_peminjamanalat]);
    }
    public function datapeminjamanruang(Request $request)
    {
        if($request->has('cari')){
            $data_peminjamanruang = \App\Models\Peminjamanruang::where('nama_peminjam', 'LIKE', '%' .$request->cari. '%')->get();
        }else{
            $data_peminjamanruang = \App\Models\Peminjamanruang::all();
        }
        return view('data.peminjamanruang', ['data_peminjamanruang' => $data_peminjamanruang]);
    }
}
