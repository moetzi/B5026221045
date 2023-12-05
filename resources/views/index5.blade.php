@extends('master')

@section('title','Keranjang Belanja')

@section('konten')
	<h3>Data Keranjang Belanja</h3>
    <br>
	<a href="/keranjangbelanja/beli" class="btn btn-primary"> + Beli</a>
    <br/>
    <br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $p)
		<tr>
			<td>{{ $p->keranjangbelanja_id }}</td>
			<td>{{ $p->keranjangbelanja_kodebarang }}</td>
			<td>{{ $p->keranjangbelanja_jumlah }}</td>
			<td>{{ number_format($p->keranjangbelanja_harga,0,',','.') }}</td>
            <td>{{ number_format(($p->keranjangbelanja_jumlah * $p->keranjangbelanja_harga),0,',','.') }}</td>
			<td>
				<a href="/keranjangbelanja/hapus/{{ $p->keranjangbelanja_id }}" class="btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
