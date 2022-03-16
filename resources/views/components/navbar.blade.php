<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        {{-- <a class="navbar-brand" href="#">
            <img src="images/school_icon.png" class="img-fluid school_icon" alt="school_icon">
        </a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="home">Home</a>
                </li>

                @guest
                <li class="nav-item">
                    <a class="nav-link" href="registration">Registration</a>
                </li>
                @endguest

                <li class="nav-item">
                    <a class="nav-link" href="login">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="news">Newsletter</a>
                </li>

            </ul>
        </div>  

    </div>
</nav>