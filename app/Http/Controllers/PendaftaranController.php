<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gelombang;
use App\Models\Jurusan;
use App\Models\Pendaftaran;
use App\Models\Peserta_Pelatihan;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        $gelombang = Gelombang::all();
        $peserta = Peserta_Pelatihan::get();
        return view('pendaftaran.index',compact('peserta','jurusan','gelombang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(($request));
        Peserta_Pelatihan::create([
            'id_jurusan'=> $request->id_jurusan,
            'id_gelombang'=> $request->id_gelombang,
            'nama_lengkap'=>$request->nama_lengkap,
            'nik'=>$request->nik,
            'kartu_keluarga'=>$request->kartu_keluarga,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'tampat_lahir'=>$request->tampat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'pendidikan_terakhir'=>$request->pendidikan_terakhir,
            'nama_sekolah'=>$request->nama_sekolah,
            'kejuruan'=>$request->kejuruan,
            'nomer_hp'=>$request->nomer_hp,
            'email'=>$request->email,
            'aktivitas_saat_ini'=>$request->aktivitas_saat_ini,
            'status'=>$request->status
        ]);
        
        return redirect()->route('peserta.index')->with('success', 'Pendaftaran Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        //
    }
}
