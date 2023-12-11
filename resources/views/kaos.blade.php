@extends('master')

@section('title','Data Kaos')

@section('konten')
	<h3>Data Kaos</h3>
    <br>
	<a href="/kaos/tambahkaos" class="btn btn-primary"> + Tambah</a>
    <br/>
    <br/>
    <form action="/kaos/cari" method="GET">
		<input class="form-control"  type="text" name="cari" placeholder="Cari Kaos .."
        value="{{ old("cari", isset($cari) ? $cari : '') }}">
        <br/>
		<input class="btn btn-primary"  type="submit" value="CARI">
	</form>
    <br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Kaos</th>
			<th>Merk Kaos</th>
			<th>Stock Kaos</th>
			<th>Ketersediaan</th>
            <th>Opsi</th>
		</tr>
		@foreach($kaos as $p)
		<tr>
			<td>{{ $p->kodekaos }}</td>
			<td>{{ $p->merkkaos }}</td>
			<td>
                {{ ($p->ketersediaan == "N") ? $stockkaos=0 : $p->stockkaos }}
            </td>
			<td>
                @if ($p->stockkaos>0 && $p->ketersediaan=="Y")
                Tersedia
                @elseif ($p->stockkaos<=0 || $p->ketersediaan=="N")
                Tidak tersedia
                @endif
            </td>
            <td>
                <a href="/kaos/viewkaos/{{ $p->kodekaos }}" class="btn btn-success">View</a>
                |
				<a href="/kaos/editkaos/{{ $p->kodekaos }}" class="btn btn-warning">Edit</a>
				|
				<a href="/kaos/hapus/{{ $p->kodekaos }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
