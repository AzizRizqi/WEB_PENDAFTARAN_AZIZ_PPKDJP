<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $level = Level::all();
        // dd($level);
        return view('user.create', compact('level'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'id_level'=>'',
        //     'name_lengkap' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => '',

        // ]);
        User::create([
            'id_level' => $request->id_level,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
        ]);
        return redirect()->route('user.index')->with('succes', 'User Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = User::findOrFail($id);
        $level = Level::all();
        return view('user.edit', compact('edit', 'level'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'id_level'=>'',
        //     'name_lengkap' => ['required','string','max:255'],
        //     'email' => ['required','string', 'email', 'max:255', 'unique:users,email,'.$id],
        //     'password' => '',
        // ]);


        // dd($request->all()); // Dump the request data
        $user = User::find($id);
        // dd($user); // Dump the user object
        User::where('id', $id)->update([
            'id_level' => $request->id_level,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password
        ]);
        // dd('Update successful'); // Verify that the update operation was successful
        return redirect()->to('user')->with('massage', 'Data Berhasil di ubah');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('user.index')->with('succes', 'User Berhasil di Hapus');
    }
}
