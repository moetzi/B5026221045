@extends('master')

@section('title','Tambah Pembelian')

@section('konten')
	<h3>Data Pembelian Baru</h3>

	<br/>

	<form action="/keranjangbelanja/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group">
            <label for="kodebarang">Kode Barang:</label>
            <input type="number" class="form-control" style="width: 400px" placeholder="Masukkan Kode Barang" id="kodebarang" name="kodebarang">
        </div>

        <div class="form-group">
            <label for="jumlah">Jumlah:</label>
            <input type="number" class="form-control" style="width: 400px" placeholder="Masukkan Jumlah Barang" id="jumlah" name="jumlah">
        </div>

        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="number" class="form-control" style="width: 400px" placeholder="Masukkan Harga Barang " id="harga" name="harga">
        </div>

        <br>

        <div class="d-flex flex-row bg-transparent ">
            <a class="btn btn-dark" href="/keranjangbelanja">Kembali</a>
            <div class="mr-2"></div>
            <button type="submit" class="btn btn-primary mr-4" value="Simpan Data">Beli</button>
        </div>

	</form>

@endsection
