@extends('layouts.global')

<title>Home | Slikey</title>

@section('content')
<div class="container-dasar">
<div class="container px-4 py-5 bg-info ">
    <h2 class="pb-2 border-bottom">#Slikey Course Participants</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Handphone</th>
                <th scope="col">Kelas</th>
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
                {{-- Cukup Panggil seperti di atas --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection