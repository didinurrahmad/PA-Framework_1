@extends('layouts.global')

<title>Clases | Slikey</title>

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div>
    <br><br><br><br>
    <h1 style="text-align: center;">Clases</h1>
</div>
<div class="kulit-luar">
    <div class="kulit-dalam">
        <div id="container">

            <div class="product-details">

                <h1>PRIVATE CLASS</h1>
                <span class="hint-star star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </span>

               

            </div>

            <div class="product-image">

                <img src="images/premium.webp" alt="">


                <div class="info">
                    <h4>Your Get</h4>
                    <ul>
                        <li>Tutor Terbaik</li>
                        <li>Games Seru</li>
                        <li>Metode Yang Super Seru</li>
                        <li>Support Mentoring</li>
                        <li>Grup Konsultasi</li>

                    </ul>
                </div>
            </div>

        </div>

        <div id="container">

            <div class="product-details">

                <h1>REGULER CLASS</h1>
                <span class="hint-star star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="false"></i>
                </span>


               

            </div>

            <div class="product-image">

                <img src="images/reguler.png" alt="" style="background-color: grey;">


                <div class="info">
                    <h4> Your Get</h4>
                    <ul>
                        <li>Tutor Terbaik</li>
                        <li>Games Seru</li>
                        <li>Metode Yang Super Seru</li>
                        <li>Support Mentoring</li>
                        <li>Grup Konsultasi</li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection