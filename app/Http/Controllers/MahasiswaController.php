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
    public function edit(Mahasiswa $id){
        return view('mahasiswa.edit',[
            'title' => 'Mahasiswa',
            'mahasiswa' => $id,
            'prodis' => Prodi::all()

        ]);
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $validateData = $request->validate([
            'nama' => 'required|string|max:100',
            'nim' => 'required|unique:mahasiswas|string',
            'prodi_id' => 'required'
        ]);
        $mahasiswa->update($validateData);

        return redirect()->route('mahasiswa.index')->with('success','Mahasiswa berhasil di update!');
    }

    public function destroy($id){
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success','Mahasiswa Berhasil di Delete!');
    }
}
