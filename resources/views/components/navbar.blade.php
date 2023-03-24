<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar</title>
    <!-- BOOTSTRAP -->
    <!-- FONTSAWESOME -->
    <script
        src="https://kit.fontawesome.com/b3f61e5fba.js"
        crossorigin="anonymous"
    ></script>

    <!-- GOOGLE FONTS -->
    <!-- CSS -->
    <link rel="stylesheet" href="/CSS/navbar_style.css" />
    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Nume si Logo</a>
            <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">


                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @foreach ($navbarLinks as $link)
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                aria-current="page"
                                href="/"
                                >{{ $link }}
                                @if($link == 'Deconecteaza-te')
                                <i class="fa-solid fa-door-open"></i
                                    >
                                @endif</a>
                        </li>
                    @endforeach
                </ul>


        </div>
        </div>
        </nav>
    </header>
    </body>
</html>
