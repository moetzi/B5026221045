@extends('master')

@section('title','Tambah Kaos')

@section('konten')
    <br>
    <br>
	<center><h3>Data Kaos Baru</h3><center>

	<br/>
    <br/>

	<form action="/kaos/store" method="post" class="form-horizontal justify-content-center">
		{{ csrf_field() }}

        <div class="form-group row">
            <label for="merk" class="col-form-label col-sm-4 text-right">Merk Kaos:</label>
            <input type="text" class="form-control" style="width: 400px" placeholder="Masukkan Merk Kaos" id="merk" name="merk">
        </div>

        <div class="form-group row">
            <label for="stock" class="col-form-label col-sm-4 text-right">Stock:</label>
            <input type="number" class="form-control" style="width: 400px" placeholder="Masukkan Stock Kaos" id="stock" name="stock">
        </div>

        <div class="form-group row">
            <label for="ketersediaan" class="col-form-label col-sm-4 text-right">Ketersediaan:</label>
            <select class="form-control" style="width: 400px" id="ketersediaan" name="ketersediaan">
              <option value="Y">tersedia</option>
              <option value="N">tidak tersedia</option>
            </select>
        </div>

        <br>
        <br>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mr-4" value="Simpan Data">Simpan</button>
            <div class="mr-2"></div>
            <a class="btn btn-dark" href="/kaos">Kembali</a>
        </div>
	</form>

    <br>

@endsection
