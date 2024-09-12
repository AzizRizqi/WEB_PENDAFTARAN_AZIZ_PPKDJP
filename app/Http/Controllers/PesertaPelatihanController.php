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

        return view('peserta.index',compact('peserta','jurusan','gelombang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

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
    public function edit(Peserta_Pelatihan $peserta_Pelatihan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peserta_Pelatihan $peserta_Pelatihan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peserta_Pelatihan $peserta_Pelatihan)
    {
        //
    }
}
