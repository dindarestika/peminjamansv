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
						<h3 class="panel-title">EDIT DATA</h3>
							</div>
								<div class="panel-body">
                                <form action="/peminjamanalat/{{$peminjamanalat->id}}/update" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="mb-3">
                                    <label class="form-label">Nama Peminjam</label>
                                    <input type="text" name="nama_peminjam" value="{{$peminjamanalat->nama_peminjam}}" class="form-control" id="" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">NIM Peminjam</label>
                                    <input type="text" name="nim_peminjam" value="{{$peminjamanalat->nim_peminjam}}" class="form-control" id="" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nomo Hp</label>
                                    <input type="text" name="no_hp" value="{{$peminjamanalat->no_hp}}" class="form-control" id="" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" name="alamat" value="{{$peminjamanalat->alamat}}" class="form-control" id="" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email_peminjam" value="{{$peminjamanalat->email_peminjam}}" class="form-control" id="" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Peminjaman</label>
                                    <input type="date" name="tgl_peminjaman" value="{{$peminjamanalat->tgl_peminjaman}}" class="form-control" id="" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Pengembalian</label>
                                    <input type="date" name="tgl_pengembalian" value="{{$peminjamanalat->tgl_pengembalian}}" class="form-control" id="" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Jumlah ALat</label>
                                    <input type="text" name="jumlah_alat" value="{{$peminjamanalat->jumlah_alat}}" class="form-control" id="" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <input type="text" name="status_peminjaman" value="{{$peminjamanalat->status_peminjaman}}" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Upload Scan KTM</label></br>
                                    <object data="{{asset('file/'.$peminjamanalat->ktm)}}" width="1000" height="800"></object>
                                    <input type="file" name="ktm" value="{{asset('file/'.$peminjamanalat->ktm)}}" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Upload Surat Peminjaman</label></br>
                                    <object data="{{asset('file/'.$peminjamanalat->surat_peminjaman)}}" width="1000" height="800"></object>
                                    <input type="file" name="surat_peminjaman" value="{{$peminjamanalat->surat_peminjaman}}" class="form-control" >
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-warning">Update</button>
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
@section('content1')
    @if(session('berhasil'))
    <div class="alert alert-success" role="alert">
    {{session('berhasil')}}
    </div>
    @endif
<div class="row">
<div class="col-lg-12">
<h1>Edit Data</h1>
        <form action="/peminjamanalat/{{$peminjamanalat->id}}/update" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="mb-3">
                <label class="form-label">Nama Peminjam</label>
                <input type="text" name="nama_peminjam" value="{{$peminjamanalat->nama_peminjam}}" class="form-control" id="" >
            </div>
            <div class="mb-3">
                <label class="form-label">NIM Peminjam</label>
                <input type="text" name="nim_peminjam" value="{{$peminjamanalat->nim_peminjam}}" class="form-control" id="" >
            </div>
            <div class="mb-3">
                <label class="form-label">Nomo Hp</label>
                <input type="text" name="no_hp" value="{{$peminjamanalat->no_hp}}" class="form-control" id="" >
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="alamat" value="{{$peminjamanalat->alamat}}" class="form-control" id="" >
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email_peminjam" value="{{$peminjamanalat->email_peminjam}}" class="form-control" id="" >
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Peminjaman</label>
                <input type="date" name="tgl_peminjaman" value="{{$peminjamanalat->tgl_peminjaman}}" class="form-control" id="" >
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Pengembalian</label>
                <input type="date" name="tgl_pengembalian" value="{{$peminjamanalat->tgl_pengembalian}}" class="form-control" id="" >
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah ALat</label>
                <input type="text" name="jumlah_alat" value="{{$peminjamanalat->jumlah_alat}}" class="form-control" id="" >
            </div>
            <div class="mb-3">
                <input type="hidden" name="status_peminjaman" value="{{$peminjamanalat->status_peminjaman}}" class="form-control" id="" >
            </div>
            <div class="mb-3">
                <label class="form-label">Upload Scan KTM</label>
                <input type="file" name="ktm" value="{{$peminjamanalat->ktm}}" class="form-control" >
            </div>
            <div class="mb-3">
                <label class="form-label">Upload Surat Peminjaman</label>
                <input type="file" name="surat_peminjaman" value="{{$peminjamanalat->surat_peminjaman}}" class="form-control" >
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-warning">Update</button>
        </div>
        </div>
        </form>
</div>
</div>
@endsection
