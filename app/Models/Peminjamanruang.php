<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjamanruang extends Model
{
    use HasFactory;
    protected $table = 'peminjamanruang';
    protected $fillable = ['nama_peminjam', 'nim_peminjam', 'no_hp', 'alamat', 'email_peminjam', 'tgl_peminjaman', 'tgl_pengembalian', 'jumlah_ruang', 'status_peminjaman', 'ktm', 'surat_peminjaman'];
}
