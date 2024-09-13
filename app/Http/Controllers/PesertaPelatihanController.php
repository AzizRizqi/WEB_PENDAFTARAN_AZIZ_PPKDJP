<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use App\Models\Jurusan;
use App\Models\Peserta_Pelatihan;
use Illuminate\Http\Request;

class PesertaPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peserta = Peserta_Pelatihan::all(); // Fetch all peserta_pelatihan records from the database
        // dd($peserta);
        return view('peserta.index', compact('peserta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        $gelombang = Gelombang::all();
        $peserta = Peserta_Pelatihan::get();

        return view('peserta.index', compact('peserta', 'jurusan', 'gelombang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $peserta = Peserta_Pelatihan::where('id', $id)->first();
        return view('peserta.show', compact('peserta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $gelombang = Gelombang::all();
        $jurusan = Jurusan::all();
        $edit = Peserta_Pelatihan::findOrFail($id);
        return view('peserta.edit', compact('edit','jurusan','gelombang'));
    }

    /**
     * Update the specified resource in storage.
     */
    // In PesertaPelatihanController.php

    public function update(Request $request, $id)
    {
        Peserta_Pelatihan::where('id',$id)->update([
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
        return redirect()->to('peserta')->with('massage','Edit peserta berhasil');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Peserta_Pelatihan::where('id',$id)->delete();
        return redirect()->route('peserta.index')->with('success', 'Data Peserta Berhasil Dihapus');
    }
}
