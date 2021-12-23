<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjamanalat extends Model
{
    use HasFactory;
    protected $table = 'peminjamanalat';
    protected $fillable = ['nama_peminjam', 'nim_peminjam', 'no_hp', 'alamat', 'email_peminjam', 'tgl_peminjaman', 'tgl_pengembalian', 'jumlah_alat', 'status_peminjaman', 'ktm', 'surat_peminjaman'];
}
