<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class kaosController extends Controller
{
	public function index()
	{
    	// mengambil data dari tabel kaos
		$kaos = DB::table('kaos')->get();
        // $kaos = DB::table('kaos')
        //             ->orderBy('kaos_nama', 'asc')
        //             ->paginate(10);

    	// mengirim data kaos ke view index
		return view('kaos',['kaos' => $kaos]);

	}

	// method untuk menampilkan view form tambah kaos
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahkaos');

	}

	// method untuk insert data ke table kaos
	public function store(Request $request)
	{
        $ketersediaan = ($request->stock <= 0) ? 'N' : $request->ketersediaan;
        $stock = ($request->ketersediaan == 'N') ? 0 : $request->stock;

		// insert data ke table kaos
		DB::table('kaos')->insert([
			'kodekaos' => $request->kode,
			'merkkaos' => $request->merk,
			'stockkaos' => $stock,
			'ketersediaan' => $ketersediaan
		]);
		// alihkan halaman ke halaman kaos
		return redirect('/kaos');

	}

	// method untuk edit data kaos
	public function edit($id)
	{
		// mengambil data kaos berdasarkan id yang dipilih
		$kaos = DB::table('kaos')->where('kodekaos',$id)->get();
		// passing data kaos yang didapat ke view edit.blade.php
		return view('editkaos',['kaos' => $kaos]);

	}

	// update data kaos
	public function update(Request $request)
	{
        $ketersediaan = ($request->stock <= 0) ? 'N' : $request->ketersediaan;
        $stock = ($request->ketersediaan == 'N') ? 0 : $request->stock;
		// update data kaos
		DB::table('kaos')->where('kodekaos',$request->id)->update([
			'kodekaos' => $request->kode,
			'merkkaos' => $request->merk,
			'stockkaos' => $stock,
			'ketersediaan' => $ketersediaan
		]);
		// alihkan halaman ke halaman kaos
		return redirect('/kaos');
	}

	// method untuk hapus data kaos
	public function hapus($id)
	{
		// menghapus data kaos berdasarkan id yang dipilih
		DB::table('kaos')->where('kodekaos',$id)->delete();

		// alihkan halaman ke halaman kaos
		return redirect('/kaos');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table kaos sesuai pencarian data
		$kaos = DB::table('kaos')
		->where('merkkaos','like',"%".$cari."%")
        ->get();
		// ->paginate();

    		// mengirim data kaos ke view index
		return view('kaos',['kaos' => $kaos, 'cari' => $cari]);

	}

    // method untuk view data kaos
	public function viewkaos($id)
	{
		// mengambil data kaos berdasarkan id yang dipilih
		$kaos = DB::table('kaos')->where('kodekaos',$id)->get();
		// passing data kaos yang didapat ke view view.blade.php
		return view('viewkaos',['kaos' => $kaos]);

	}

}
