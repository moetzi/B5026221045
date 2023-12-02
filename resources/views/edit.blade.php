@extends('master')

@section('title','Edit Pegawai')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	{{-- <a href="/pegawai"> Kembali</a> --}}

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="form-group row align-items-center">
            <label for="nama" class="col-form-label col-sm-4 text-right">Nama</label>
            <div class="col-sm-4">
            <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" class="form-control">
            </div>
        </div>
        <div class="form-group row align-items-center">
            <label for="jabatan" class="=col-form-label col-sm-4 text-right">Jabatan</label>
            <div class="col-sm-4">
            <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" class="form-control">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <label for="umur" class="col-form-label col-sm-4 text-right">Umur</label>
            <div class="col-sm-4">
            <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}" class="form-control">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <label for="alamat" class="col-form-label col-sm-4 text-right">Alamat</label>
            <div class="col-sm-4">
            <textarea required="required" name="alamat" class="form-control" placeholder="Masukkan Alamat">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mr-2" value="Simpan Data">Simpan Data</button>
            <a class="btn btn-dark" href="/pegawai">Kembali</a>
        </div>

		{{-- Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data"> --}}
	</form>
	@endforeach
@endsection
