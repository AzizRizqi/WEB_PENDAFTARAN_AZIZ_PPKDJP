<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $levels = Level::all();
        return view('level.index',compact('levels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $level = Level::all();
        return view('level.create', compact('level'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Level::create([
            'nama_level' => $request->nama_level
        ]);
        return redirect()->route('level.index')->with('success','Level berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Level $level)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Level::findOrFail($id);
        return view('level.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        Level::where('id',$id)->update([
            'nama_level' => $request->nama_level
        ]);
        return redirect()->route('level.index')->with('success','Level berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Level $level)
    {
        //
    }
}
