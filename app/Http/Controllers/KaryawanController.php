<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class karyawanController extends Controller
{
	public function index()
	{
    	// mengambil data dari tabel karyawan
		$karyawan = DB::table('karyawan')->get();

    	// mengirim data karyawan ke view index
		return view('indexkaryawan',['karyawan' => $karyawan]);

	}

	// method untuk menampilkan view form tambah karyawan
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahkaryawan');

	}

	// method untuk insert data ke table karyawan

	public function store(Request $request)
	{
        $request->validate([
            'kodepegawai' => 'required|unique:karyawan',
            'namalengkap' => 'required',
            'divisi' => 'required',
            'departemen' => 'required',
        ]);

        // Check if kodepegawai already exists
        $isUnique = Karyawan::where('kodepegawai', $request->kodepegawai)->doesntExist();

        if (!$isUnique) {
            // If kodepegawai already exists, redirect back with an error message
            return redirect('/karyawan/tambah')->with('error', 'Kode Pegawai sudah ada di tabel. Silakan gunakan kode yang berbeda.');
        }

        // Insert data into the karyawan table
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        // Redirect to the karyawan index page
        return redirect('/karyawan');

	}

	// method untuk hapus data karyawan
	public function hapus($id)
	{
		// menghapus data karyawan berdasarkan id yang dipilih
		DB::table('karyawan')->where('kodepegawai',$id)->delete();

		// alihkan halaman ke halaman karyawan
		return redirect('/karyawan');
	}

    // method untuk memfilter kode pegawai
    public function checkUniqueKodepegawai(Request $request)
    {
        $kodepegawai = $request->input('kodepegawai');

        // Check if kodepegawai is unique in the database
        $isUnique = !Karyawan::where('kodepegawai', $kodepegawai)->exists();

        return response()->json(['isUnique' => $isUnique]);
    }

}
