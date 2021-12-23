@extends('layouts.frontend')
@section('content')
<div class="container">
  <div class="content pt-4 pt-lg-0"></br></br>					
		<h3 class="panel-title">Data Peminjaman Alat</h3>
        <div class="right">
            <form class="d-flex" method="GET" action="/datapeminjamanalat">
                <input class="form-control me-2" name="cari" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
		<div class="panel-body">
			<table class="table table-dark table-sm">
				<thead>
					<tr>
                        <th>Nama </th>
                        <th>NIM</th>
                        <th>Alamat</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Status</th>
					</tr>
				</thead>
				<tbody>
                @foreach($data_peminjamanalat as $peminjamanalat)
                    <tr>
                        <td>{{$peminjamanalat->nama_peminjam}}</td>
                        <td>{{$peminjamanalat->nim_peminjam}}</td>
                        <td>{{$peminjamanalat->alamat}}</td>
                        <td>{{$peminjamanalat->tgl_peminjaman}}</td>
                        <td>{{$peminjamanalat->status_peminjaman}}</td>            
                    </tr>
                @endforeach
				</tbody>
			</table>
		</div>
    </div>
</div>

@stop

