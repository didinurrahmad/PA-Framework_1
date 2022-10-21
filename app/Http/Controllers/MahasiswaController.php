<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        return view("mahasiswa.index", [
            'mahasiswas' => Mahasiswa::all(),
            'title' => 'Mahasiswa'
        ]);
    }

    public function create()
    {
        return view('mahasiswa.create', [
            'prodis' => Prodi::all(),
            'title' => 'Mahasiswa'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|string|max:100',
            'nim' => 'required|unique:mahasiswas|string',
            'prodi_id' => 'required'

        ]);
        Mahasiswa::create($validateData);

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa Berhasil di tambahkan');
    }

    public function show(Mahasiswa $id){
        return view('mahasiswa.show',[
            'title' => 'Mahasiswa',
            'mahasiswa' => $id,
        ]);
    }
}
