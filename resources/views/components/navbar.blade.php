<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar</title>
    <!-- BOOTSTRAP -->
    <!-- FONTSAWESOME -->
    <script src="https://kit.fontawesome.com/b3f61e5fba.js" crossorigin="anonymous"></script>

    <!-- GOOGLE FONTS -->
    <!-- CSS -->
    <link rel="stylesheet" href="/CSS/navbar_style.css" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="links container-fluid">
                <a style="color:rgb(11, 146, 47);" class="navbar-brand">
                    <img src="/images/logo.jpg" style="width:35px" alt="logo">
                    MedWise
                </a>
                <button class="toggle navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="justify-content-center collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav-links navbar-nav">
                        @foreach ($navbarLinks as $link)
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/">{{ $link }}
                                    @if ($link == 'Deconecteaza-te')
                                        <i class="fa-solid fa-door-open"></i>
                                    @endif
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</body>

</html>
