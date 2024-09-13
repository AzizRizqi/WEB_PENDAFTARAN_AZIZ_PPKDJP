<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GelombangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gelombang = Gelombang::all();
        return view('gelombang.index', compact('gelombang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gelombang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gelombang::create([
            'nama_gelombang'=> $request->nama_gelombang,
            'aktif' => $request->aktif,
        ]);
        return redirect()->route('gelombang.index')->with('success', 'Gelombang Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gelombang $gelombang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Gelombang::findOrFail($id);
        return view('gelombang.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $edit = Gelombang::find($id);

        $edit->update([
            'nama_gelombang' => $request->nama_gelombang,
            'aktif' => $request->aktif,
        ]);

        Session::flash('success', 'status Berhasil di Edit');
        return redirect()->to('gelombang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gelombang $gelombang)
    {
        //
    }
}
