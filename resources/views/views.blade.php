@extends('master')

@section('title', 'View Pegawai')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3>

    {{-- <a href="/pegawai"> Kembali</a> --}}

    <br />
    <br />

    @foreach ($pegawai as $p)
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="card" style="width:800px">
                        <div class="card-group">
                            <div class="col-sm-6 align-items-center p-4">
                                <img class="card-img" src="https://i.pinimg.com/736x/b6/6a/99/b66a99d3f1df60d91ba333d02a4ee5e4.jpg" alt="Card image" style="width:100%">
                            </div>

                            <div class="col-sm-6 align-items-center pt-5">
                                <div class="card-title row">
                                    <div class="col-sm-3 text-right">Nama:</div>
                                    <div class="col-sm-9">{{ $p->pegawai_nama }}</div>
                                </div>

                                <div class="card-title row">
                                    <div class="col-sm-3 text-right">Jabatan:</div>
                                    <div class="col-sm-8">{{ $p->pegawai_jabatan }}</div>
                                </div>

                                <div class="card-title row">
                                    <div class="col-sm-3 text-right">Umur:</div>
                                    <div class="col-sm-8">{{ $p->pegawai_umur }}</div>
                                </div>

                                <div class="card-title row">
                                    <div class="col-sm-3 text-right">Alamat:</div>
                                    <div class="col-sm-8">{{ $p->pegawai_alamat }}</div>
                                </div>

                                <br>
                                <br>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-info align-items-center" href="/pegawai">OK</a>
                                </div>

                            </div>

                            {{-- <h4 class="card-title col">Nama: {{ $p->pegawai_nama }}</h4>
                    <h4 class="card-title">Jabatan: {{ $p->pegawai_jabatan }}</h4>
                    <h4 class="card-title">Umur: {{ $p->pegawai_umur }}</h4>
                    <h4 class="card-title">Alamat: {{ $p->pegawai_alamat }}</h4> --}}

                            {{-- <a href="#" class="btn btn-primary">See Profile</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <br>

            {{-- <h2>Card Image</h2>
        <p>Image at the top (card-img-top):</p>
        <div class="card" style="width:400px">
          <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>

      </div>

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
        </div> --}}

            {{-- Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data"> --}}
            </form>
    @endforeach
@endsection
