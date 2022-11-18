<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    //
    public function getPeserta()
    {
        $peserta = Peserta::all();

        $respon = [
            'status' => 'success',
            'msg' => 'Berhasil Mengambil data Peserta',
            'data' => $peserta,
        ];
        return response()->json($respon);
    }

    public function peserta($id)
    {

        $peserta = Peserta::where('id', $id)->get();
        $respon = [
            'status' => 'success',
            'msg' => 'Berhasil Mengambil data Peserta',
            'data' => $peserta,
        ];
        return response()->json($respon);
    }
}
