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
				<div class="col-md-12">
                <div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">DETAIL DATA</h3>
							</div>
								<div class="panel-body">
                                <form action="/peminjamanalat" >
                                {{csrf_field()}}
                                <div class="mb-3">
                                    <label class="form-label">Nama Peminjam</label>
                                    <input type="text" name="nama_peminjam" value="{{$peminjamanalat->nama_peminjam}}" class="form-control" disabled id="" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">NIM Peminjam</label>
                                    <input type="text" name="nim_peminjam" value="{{$peminjamanalat->nim_peminjam}}" disabled class="form-control" id="" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nomo Hp</label>
                                    <input type="text" name="no_hp" value="{{$peminjamanalat->no_hp}}" disabled class="form-control" id="" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" name="alamat" value="{{$peminjamanalat->alamat}}" disabled class="form-control" id="" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email_peminjam" value="{{$peminjamanalat->email_peminjam}}" disabled class="form-control" id="" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Peminjaman</label>
                                    <input type="date" name="tgl_peminjaman" value="{{$peminjamanalat->tgl_peminjaman}}" disabled class="form-control" id="" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Pengembalian</label>
                                    <input type="date" name="tgl_pengembalian" value="{{$peminjamanalat->tgl_pengembalian}}" disabled class="form-control" id="" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Jumlah ALat</label>
                                    <input type="text" name="jumlah_alat" value="{{$peminjamanalat->jumlah_alat}}" disabled class="form-control" id="" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <input type="text" name="status_peminjaman" value="{{$peminjamanalat->status_peminjaman}}" disabled class="form-control" id="" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Upload Scan KTM</label></br>
                                    <object data="{{asset('file/'.$peminjamanalat->ktm)}}" width="1000" height="800"></object>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Upload Surat Peminjaman</label></br>
                                    <object data="{{asset('file/'.$peminjamanalat->surat_peminjaman)}}" width="1000" height="800"></object>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-warning">Back</button>
                            </div>
                            </div>
                            </form>
							</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
