@extends('layouts.global')
<title>Add + | Slikey</title>
<link rel="stylesheet" href="../css/style-custom.css">
@section('content')
<div class="container-dasar">
    <div class="container bg-warning px-4 py-5">
        <form action="/peserta/store" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>

                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Peserta" required>

                @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Isi Alamat" required>

                @error('alamat')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="no_hp" class="form-label">No Handphone</label>
                <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" placeholder="Isi No Handphone" required>

                @error('no_hp')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="kelas" class="form-label ">Kelas</label>
                <select name="kelas_id" id="kelas_id" class="form-select @error('kelas_id') is-invalid @enderror" aria-label="Default select example">
                    <option value="" selected>Pilih</option>
                    @foreach ($kelas as $kls)
                    <option value={{ $kls->id }}>{{ $kls->nama_kelas

}}</option>

                    @endforeach
                </select>
                @error('kelas_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-light">Tambah</button>
            </div>
        </form>
    </div>
</div>
@endsection