@extends('master')

@section('title','Tambah Pegawai')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai Baru</h3>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" placeholder="Masukkan nama" id="nama" name="nama">
        </div>

        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <input type="text" class="form-control" placeholder="Masukkan jabatan" id="jabatan" name="jabatan">
        </div>

        <div class="form-group">
            <label for="umur">Umur:</label>
            <input type="number" class="form-control" placeholder="Masukkan umur" id="umur" name="umur">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea type="number" class="form-control" placeholder="Masukkan alamat lengkap" id="alamat" name="alamat"></textarea>
        </div>

        <div class="d-flex flex-row-reverse bg-transparent">
            <a class="btn btn-dark ml-2" href="/pegawai">Kembali</a>
            <button type="submit" class="btn btn-primary" value="Simpan Data">Simpan Data</button>
        </div>

		{{-- Nama <input type="text" name="nama"> <br/>
		Jabatan <input type="text" name="jabatan"> <br/>
		Umur <input type="number" name="umur"> <br/>
		Alamat <textarea name="alamat"></textarea> <br/>
		<input type="submit" value="Simpan Data"> --}}
	</form>
@endsection
