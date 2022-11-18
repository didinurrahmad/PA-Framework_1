<nav class="navbar navbar-expand-lg bg-light shadow fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">{{Auth::user()->name ?? "Home Page"}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>                
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/clases">Clases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/tutors">Tutors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#footer1">Contact</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="/peserta">Admin</a>
                </li>

            </ul>
            <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{ Auth::user() ? '/logout' : '/login'}}" class="nav-link active" aria- current="page">{{ Auth::user() ? 'Logout' : 'Login'}}</a></li>

            </ul>
            
        </div>
    </div>
</nav>