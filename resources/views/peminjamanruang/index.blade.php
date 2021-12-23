@extends('layouts.master')
@section('content')
@if(session('berhasil'))
    <div class="alert alert-success" role="alert">
    {{session('berhasil')}}
    </div>
    @endif
<div class="main">
<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Peminjaman Ruang</h3>
                                    <div class="right">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                    <i class="lnr lnr-plus-circle"></i></button>
                                    </div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                                <th>Nama </th>
                                                <th>NIM</th>
                                                <th>Nomor Hp</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <!--
                                                <th>Tgl Peminjaman</th>
                                                <th>Tgl Pengembalian</th>
                                                <th>Jumlah Ruang</th>
                                                <th>Status</th>
                                                <th>File KTM</th>
                                                <th>Surat Peminjaman</th>
                                                -->
                                                <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($data_peminjamanruang as $peminjamanruang)
                                            <tr>
                                                <td>{{$peminjamanruang->nama_peminjam}}</td>
                                                <td>{{$peminjamanruang->nim_peminjam}}</td>
                                                <td>{{$peminjamanruang->no_hp}}</td>
                                                <td>{{$peminjamanruang->alamat}}</td>
                                                <td>{{$peminjamanruang->email_peminjam}}</td>
                                                <!--
                                                <td>{{$peminjamanruang->tgl_peminjaman}}</td>
                                                <td>{{$peminjamanruang->tgl_pengembalian}}</td>
                                                <td>{{$peminjamanruang->jumlah_ruang}}</td>
                                                <td>{{$peminjamanruang->status_peminjaman}}</td>
                                                <td>{{$peminjamanruang->ktm}}</td>
                                                <td>{{$peminjamanruang->surat_peminjaman}}</td>
                                                -->
                                                <td>
                                                    <a href="/peminjamanruang/{{$peminjamanruang->id}}/detail" class="btn btn-primary btn-sm ">Detail </a>
                                                    <a href="/peminjamanruang/{{$peminjamanruang->id}}/edit" class="btn btn-warning btn-sm ">Edit </a>
                                                    <a href="/peminjamanruang/{{$peminjamanruang->id}}/delete" class="btn btn-danger btn-sm " onclick="return confirm('Yakin ingin menghapus?')">Delete </a>
                                                </td>
                                            </tr>
                                            @endforeach
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
					</div>
				</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA</h5>
        </div>
        <div class="modal-body">
        <form action="peminjamanruang/create" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="mb-3">
                <label class="form-label">Nama Peminjam</label>
                <input type="text" name="nama_peminjam" class="form-control" id="" >
            </div>
            <div class="mb-3">
                <label class="form-label">NIM Peminjam</label>
                <input type="text" name="nim_peminjam" class="form-control" id="" >
            </div>
            <div class="mb-3">
                <label class="form-label">Nomo Hp</label>
                <input type="text" name="no_hp" class="form-control" id="" >
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" id=""></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email_peminjam" class="form-control" id="" >
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Peminjaman</label>
                <input type="date" name="tgl_peminjaman" class="form-control" id="" >
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Pengembalian</label>
                <input type="date" name="tgl_pengembalian" class="form-control" id="" >
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah Ruang</label>
                <input type="text" name="jumlah_ruang" class="form-control" id="" >
            </div>
            <div class="mb-3">
                <input type="hidden" name="status_peminjaman" value="Sedang diajukan" class="form-control" id="" >
            </div>
            <div class="mb-3">
                <label class="form-label">Upload Scan KTM</label>
                <input type="file" name="ktm" class="form-control" >
            </div>
            <div class="mb-3">
                <label class="form-label">Upload Surat Peminjaman</label>
                <input type="file" name="surat_peminjaman" class="form-control" >
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
        </form>
</div>
@stop
