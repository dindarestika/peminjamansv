<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanruangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamanruang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam');
            $table->string('nim_peminjam');
            $table->string('no_hp');
            $table->text('alamat');
            $table->string('email_peminjam');
            $table->date('tgl_peminjaman');
            $table->date('tgl_pengembalian');
            $table->integer('jumlah_ruang');
            $table->string('status_peminjaman');
            $table->string('ktm');
            $table->string('surat_peminjaman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjamanruang');
    }
}
