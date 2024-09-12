<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class RestController extends Controller
{
    public function jurusan(){
        $jurusan = Jurusan ::get();
        // return response()->json($jurusan);
        return response()->json(['data' => $jurusan, 'message' => 'Data Jurusan'], 200);
        // return response()->json('Data Jurusan');
    }
}
