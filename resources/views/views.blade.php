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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
