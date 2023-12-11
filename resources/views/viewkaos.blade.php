@extends('master')

@section('title', 'View Kaos')

@section('konten')

    <h3>Data Kaos</h3>

    {{-- <a href="/kaos"> Kembali</a> --}}

    <br />
    <br />

    @foreach ($kaos as $p)
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
                                    <div class="col-sm-4 text-right">Kode:</div>
                                    <div class="col-sm-8">{{ $p->kodekaos }}</div>
                                </div>

                                <div class="card-title row">
                                    <div class="col-sm-4 text-right">Merk:</div>
                                    <div class="col-sm-8">{{ $p->merkkaos }}</div>
                                </div>

                                <div class="card-title row">
                                    <div class="col-sm-4 text-right">Stock:</div>
                                    <div class="col-sm-8">{{ $p->stockkaos }}</div>
                                </div>

                                <div class="card-title row">
                                    <div class="col-sm-4 text-right">Ketersediaan:</div>
                                    <div class="col-sm-8">
                                        @if ($p->stockkaos>0 && $p->ketersediaan=="Y")
                                        Tersedia
                                        @elseif ($p->stockkaos<=0 || $p->ketersediaan=="N")
                                        Tidak tersedia
                                        @endif</div>
                                </div>

                                <br>
                                <br>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-info align-items-center" href="/kaos">OK</a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
