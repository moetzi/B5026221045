@extends('master')

@section('title','Edit kaos')

@section('konten')
    <br>
	<center><h3>Edit Kaos</h3></center>

	<br/>

	@foreach($kaos as $p)
	<form action="/kaos/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->kodekaos }}"> <br/>
        <div class="form-group row align-items-center">
            <label for="kode" class="col-form-label col-sm-4 text-right">Kode Kaos</label>
            <div class="col-sm-4">
            <input type="text" required="required" name="kode" value="{{ $p->kodekaos }}" class="form-control">
            </div>
        </div>
        <div class="form-group row align-items-center">
            <label for="merk" class="=col-form-label col-sm-4 text-right">Merk Kaos</label>
            <div class="col-sm-4">
            <input type="text" required="required" name="merk" value="{{ $p->merkkaos }}" class="form-control">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <label for="stock" class="col-form-label col-sm-4 text-right">Stock Kaos</label>
            <div class="col-sm-4">
            <input type="number" required="required" name="stock" value="{{ $p->stockkaos }}" class="form-control">
            </div>
        </div>

        <div class="form-group row align-items-center">
            <label for="ketersediaan" class="col-form-label col-sm-4 text-right">Ketersediaan</label>
            <div class="col-sm-4">
            <select class="form-control" id="ketersediaan" name="ketersediaan">
              <option value="Y">tersedia</option>
              <option value="N">tidak tersedia</option>
            </select>
            </div>
        </div>

        <br>
        <br>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mr-2" value="Simpan Data">Simpan Data</button>
            <a class="btn btn-dark" href="/kaos">Kembali</a>
        </div>

	</form>
	@endforeach
@endsection
