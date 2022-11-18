@extends('layouts.global')

<!-- @section('title')

@endsection -->
<title>Home | Slikey</title>

@section('content')
   
<div class="layout-bg">
    <div class="container">

        <div class="row justify-content-center text-center">

            <div class="col-mb-3">
                <br><br><br><br>
                <img src="images/logoSlikey.png" alt="Logo Slikey" class="img-fluid" width="350" height="350" />

                <h1 class="display-6 fw-bold"></br>Slikey Course</h1>

                <p class="lead">English Language Courses</p>
                <a href="{{ route('peserta.form') }}" class="btn w3-2021-willow btn-light">Join Now</a>
            </div>

        </div>

    </div>

    @endsection