<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $jurusan = Jurusan::all();
    $gelombang = Gelombang::all();

    return view('jurusan.index', compact('jurusan', 'gelombang'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        return view('jurusan.create',compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Jurusan::create([
            'nama_jurusan'=>$request->nama_jurusan
        ]);
        return redirect()->route('jurusan.index')->with('success', 'berhasil cuy jurusan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        $edit = Jurusan::findOrFail($id);

        return view('jurusan.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        Jurusan::where('id',$id)->update([
            'nama_jurusan'=>$request->nama_jurusan
        ]);
        return redirect()->route('jurusan.index')->with('success', 'berhasil update jurusan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        //
    }
}
