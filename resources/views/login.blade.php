<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login Page</title>
    <meta name="description" content="@yield('page_description', $page_description ?? '')" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Let's login your account!</h4>
                                    @if(session('error'))
                                    <div class="alert alert-danger">
                                        <b>Yeah!</b> {{session('error')}}
                                    </div>
                                    @endif
                                    @if(session('username'))
                                    <div class="alert alert-danger">
                                        <b>Opps!</b> {{session('username')}}
                                    </div>
                                    @endif
                                    <form action="{{url('/action-login')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="masukkan email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="masukkan password" name="password" required>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-info btn-block">LOGIN</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-info" href="/register">Sign up</a></p>
                                    </div>
                                    <div class="form-group">
                                        <a href="/" class="btn btn-dark btn-block" class="btn w3-2021-willow btn-light">HOME</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script>
        
    </script>
    @if(session('error'))
    <div class="alert alert-danger">
        <b>Yeah!</b> {{session('error')}}
    </div>
    @endif
    @if(session('username'))

    <div class="alert alert-danger">
        <b>Opps!</b> {{session('username')}}
    </div>
    @endif
    <form action="{{url('/action-login')}}" method="POST">
        @csrf
        <div class="form">
            <div class="title">Welcome</div>
            <div class="subtitle">Let's Login account!</div>

            <div class="input-container ic1">
                <input id="email" name="email" class="input" type="email" placeholder=" " / required>
                <div class="cut"></div>
                <label for="firstname" class="placeholder">Email</label>
            </div>
            <div class="input-container ic2">
                <input id="password" name="password" class="input" type="password" placeholder=" " / required>
                <div class="cut"></div>
                <label for="lastname" class="placeholder">Password</label>
            </div>
           
            <button type="submit" class="submit">submit</button>
        </div> -->
</body>

</html>