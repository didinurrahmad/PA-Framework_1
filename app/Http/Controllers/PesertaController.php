<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Peserta;
use Illuminate\Http\Request;
// use GuzzleHttp\Client;
// use 

class PesertaController extends Controller
{
    //
    public function index()
    {
        return view("peserta.index", [
            'pesertas' => Peserta::all(),
            'title' => 'Peserta'
        ]);
    }

    public function create()
    {
        return view('peserta.create', [
            'kelas' => Kelas::all(),
            'title' => 'Peserta'
        ]);
    }

    public function form()
    {
        return view('peserta.form', [
            'kelas' => Kelas::all(),
            'title' => 'Peserta'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|unique:pesertas|string',
            'kelas_id' => 'required'

        ]);
        Peserta::create($validateData);

        return redirect()->route('peserta.index')->with('success', 'Peserta Berhasil di tambahkan');
    }

    public function store1(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|unique:pesertas|string',
            'kelas_id' => 'required'

        ]);
        Peserta::create($validateData);

        return redirect()->route('peserta.form')->with('success', 'Data Berhasil di kirim');
    }

    public function show(Peserta $id)
    {
        return view('peserta.show', [
            'title' => 'Peserta',
            'peserta' => $id,
        ]);
    }
    public function edit(Peserta $id)
    {
        return view('peserta.edit', [
            'title' => 'Peserta',
            'peserta' => $id,
            'kelas' => Kelas::all()

        ]);
    }

    public function update(Request $request, $id)
    {
        $peserta = Peserta::findOrFail($id);
        $validateData = $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|unique:pesertas|string',
            'kelas_id' => 'required'
        ]);
        $peserta->update($validateData);

        return redirect()->route('peserta.index')->with('success', 'Peserta berhasil di update!');
    }

    public function destroy($id)
    {
        $peserta = Peserta::findOrFail($id);
        $peserta->delete();
        return redirect()->route('peserta.index')->with('success', 'Peserta Berhasil di Delete!');
    }

}
