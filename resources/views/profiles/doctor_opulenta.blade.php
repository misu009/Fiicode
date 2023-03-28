<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil doctor</title>

    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    {{-- SCCS --}}
    {{-- <link rel="stylesheet" href="/SCSS/profil_doctor.css">
    <script src="less.js" type="text/javascript"></script> --}}
    {{-- CSS --}}
    <link rel="stylesheet" href="/CSS/profil_doctor_opulenta.css">
    {{-- JAVASCRIPT --}}
    <script src="/JS/profil_doctor.js"></script>
    {{-- GOOGLE FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Ubuntu:wght@500&display=swap"
        rel="stylesheet">

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/4d408f9161.js" crossorigin="anonymous"></script>
    {{-- FAVICON --}}
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
</head>

<body>
    <x-navbar :navbar-links="['Acasa', 'Istoric medical', 'Fisa medicala', 'Programari', 'Profil', 'Deconecteaza-te']"></x-navbar>
    {{-- NAVBAR --}}

    <section style="text-align: center" class="doctor-data">

        <div class="row">
            <div class="col-12">
                <img class="pp-img" src="/images/default-pp.png" alt="">
            </div>
            <div style="margin-top:2%" class="col col-12 date-medic">
                <input placeholder="Nume" id="nume" name="nume" readonly class="input-register" type="text">
            </div>
            <div class="col col-12 date-medic">
                <input placeholder="Prenume" id="prenume" name="prenume" readonly class="input-register"
                    type="text">
            </div>
            <div class="col col-12 date-medic">
                <input placeholder="Email" id="email" name="email" readonly class="input-register" type="email">
            </div>
            <div class="col col-lg-12">
                <div class=" row adresa-row">
                    <div class=" col col-lg-4 col-md-6 col-sm-6 col-12">
                        <input readonly placeholder="Jud." required class="input-adresa input-register"
                            name="localitate" id="localitate" type="text">
                    </div>
                    <div class="col col-lg-4 col-md-6 col-sm-6 col-12">
                        <input readonly placeholder="Loc." required class="input-adresa input-register"
                            name="localitate" id="localitate" type="text">
                    </div>
                    <div class="col col-lg-4 col-md-6 col-sm-6 col-12">
                        <input readonly placeholder="Cartier" required class="input-adresa input-register"
                            name="cartier" id="cartier" type="text">
                    </div>
                    <div class="col col-lg-4 col-md-6 col-sm-6 col-12">
                        <input readonly placeholder="Str-nr" required class="input-adresa input-register" name="strada"
                            id="strada" type="text">
                    </div>
                    <div class="col col-lg-4 col-md-6 col-sm-6 col-12">
                        <input readonly placeholder="Bloc"class="input-adresa input-register" type="number"
                            name="bloc" id="bloc" min="1">
                    </div>
                    <div class="col col-lg-4 col-md-6 col-sm-6 col-12">
                        <input readonly class="input-adresa input-register" placeholder="Ap." type="number"
                            name="apartament" id="apartament" id="quantity" name="quantity" min="1">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <hr>
    <section style="padding-bottom: 3%" class="carusel-section">

        <div id="carouselExampleIndicators" class="carousel slide">
            <h1>Atestatele Medicului</h1>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-carousel" src="/images/wall1.jpg" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="img-carousel" src="/images/wall4.jpg" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="img-carousel" src="/images/wall3.jpg" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="img-carousel" src="/images/wall3.jpg" class="d-block" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <i class="arrows fa-solid fa-arrow-left"></i>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <i class="arrows fa-solid fa-arrow-right"></i>
            </button>
        </div>
    </section>
    <x-footer></x-footer>
</body>

</html>
