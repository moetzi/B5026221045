@extends('masterkaryawan')

@section('title','Data Karyawan')

@section('konten')
	<h3>Data Karyawan</h3>

    <br/>
    <br/>


	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
            <th>Opsi</th>
		</tr>
		@foreach($karyawan as $p)
		<tr>
			<td>{{ $p->kodepegawai }}</td>
			<td>{{ strtoupper($p->namalengkap) }}</td>
            <td>{{ strtolower($p->divisi) }}</td>
			<td>{{ $p->departemen }}</td>
			{{-- <td>
                {{ ($p->ketersediaan == "N") ? $stockkaos=0 : $p->stockkaos }}
            </td>
			<td>
                @if ($p->stockkaos>0 && $p->ketersediaan=="Y")
                Tersedia
                @elseif ($p->stockkaos<=0 || $p->ketersediaan=="N")
                Tidak tersedia
                @endif
            </td> --}}
            <td>
				<a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <br>
	<a href="/karyawan/tambah" class="btn btn-primary"> + Tambah</a>
@endsection
