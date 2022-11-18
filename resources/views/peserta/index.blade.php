@extends('layouts.global')
<title>Admin | Slikey</title>
@section('content')
<div class="container-dasar">
    <div class="container px-4 py-5">
        @if (session('success'))
        <div class="alert alert-success">
            <b>Yeah!</b> {{ session('success') }}
        </div>
        @endif

        <a href="{{ route('peserta.create') }}" class=""><Button class="btn btn-primary mb-
3">Tambah</Button></a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Handphone</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pesertas as $peserta)
                <tr>
                    <th scope="row">{{ $peserta->id }}</th>
                    <td>{{ $peserta->nama }}</td>
                    <td>{{ $peserta->alamat }}</td>
                    <td>{{ $peserta->no_hp }}</td>
                    <td>{{ $peserta->kelas->nama_kelas }}</td>
                    <td>

                        <a href="/peserta/show/{{ $peserta->id }}" class=""><Button class="btn btn-success mb-3">Lihat</Button></a>
                        <a href="/peserta/{{ $peserta->id }}/edit" class=""><Button class="btn btn-warning mb-3">Edit</Button></a>
                        <form action="{{ route('peserta.delete', $peserta->id) }}" method="post" style="display:inline" onsubmit="confirm('apakah anda yakin ingin menghapus peserta ini?')">
                            @csrf
                            @method('delete')
                            <Button type="submit" class="btn btn-danger mb-3">Delete</Button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection