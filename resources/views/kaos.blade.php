@extends('master')

@section('title','Keranjang Belanja')

@section('konten')
	<h3>Data Kaos</h3>
    <br>
	<a href="/kaos/tambahkaos" class="btn btn-primary"> + Tambah</a>
    <br/>
    <br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Kaos</th>
			<th>Merk Kaos</th>
			<th>Stock Kaos</th>
			<th>Tersedia</th>
		</tr>
		@foreach($kaos as $p)
		<tr>
			<td>{{ $p->kodekaos }}</td>
			<td>{{ $p->merkkaos }}</td>
			<td>{{ $p->stockkaos }}</td>
			<td>
                @if ($p->ketersediaan=="Y")
                Y
                @elseif ($p->ketersediaan=="N")
                N
                @endif
            </td>
		</tr>
		@endforeach
	</table>
@endsection
