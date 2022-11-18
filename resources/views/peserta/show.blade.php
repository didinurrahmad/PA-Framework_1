@extends('layouts.global')
<title>Show | Slikey</title>
<link rel="stylesheet" href="../public/css/style-custom.css">
@section('content')
<div class="container">
    <h3><strong>LIHAT DATA</strong></h3>
    <hr>
    <br>
    <table class="table table-borderless">
        <tr>
            <td>
                <h4>Nama</h4>
            </td>
            <td>
                <h4>:</h4>
            </td>
            <td>
                <h4>{{$peserta->nama}}</h4>
            </td>
        </tr>
        <tr>
            <td>
                <h4>Alamat</h4>
            </td>
            <td>
                <h4>:</h4>
            </td>
            <td>
                <h4>{{$peserta->alamat}}</h4>
            </td>
        </tr>
        <tr>
            <td>
                <h4>NO Handphone</h4>
            </td>
            <td>
                <h4>:</h4>
            </td>
            <td>
                <h4>{{$peserta->no_hp}}</h4>
            </td>
        </tr>
        <tr>
            <td>
                <h4>Kelas</h4>
            </td>
            <td>
                <h4>:</h4>
            </td>
            <td>
                <h4>{{$peserta->kelas->nama_kelas}}</h4>
            </td>
        </tr>
    </table>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
</div>
@endsection