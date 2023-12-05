@extends('master')

@section('title','Tambah Kaos')

@section('konten')
	<h3>Data Kaos Baru</h3>

	<br/>

	<form action="/kaos/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group">
            <label for="merk">Merk Kaos:</label>
            <input type="text" class="form-control" style="width: 400px" placeholder="Masukkan Merk Kaos" id="merk" name="merk">
        </div>

        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="number" class="form-control" style="width: 400px" placeholder="Masukkan Stock Kaos" id="stock" name="stock">
        </div>

        <div class="form-group">
            <label for="ketersediaan">Select list (select one):</label>
            <select class="form-control" id="ketersediaan" name="ketersediaan">
              <option value="Y">tersedia</option>
              <option value="N">tidak tersedia</option>
            </select>
        </div>

        <div class="d-flex flex-row bg-transparent ">
            <button type="submit" class="btn btn-primary mr-4" value="Simpan Data">Simpan</button>
            <div class="mr-2"></div>
            <a class="btn btn-dark" href="/kaos">Kembali</a>
        </div>
	</form>

@endsection
