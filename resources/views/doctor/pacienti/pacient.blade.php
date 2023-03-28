<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil pacient</title>

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
    <link rel="stylesheet" href="/CSS/profil_pacient_istoric.css">
    {{-- JAVASCRIPT --}}
    <script src="/JS/profil_doctor.js"></script>
    {{-- GOOGLE FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Ubuntu:wght@500&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/4d408f9161.js" crossorigin="anonymous"></script>
</head>

<body>
    <x-navbar :navbar-links="[
        '/doctor' => 'Acasa',
        '/doctor/program' => 'Programari',
        '/logout' => 'Deconecteaza-te',
    ]"></x-navbar>
    <x-alert></x-alert>

    <section class="carusel-section">

        <div id="carouselExampleIndicators" class="carousel slide">
            <h1>Fisa medicala</h1>
            <div class="carousel-inner">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-carousel"
                            src="/images/pacient/fisa_medicala/1/fisa-de-consultatii-medicale-adulti.jpg"
                            class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="img-carousel" src="/images/pacient/fisa_medicala/1/t5z5he1j_f.jpg" class="d-block"
                            alt="...">
                    </div>
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
    <hr>

    <section style="text-align: center" class="input-istoric">
        <h1>Editeaza istoricul medical</h1>
        <form action="{{ route('doctor.pacient.istoric') }}" method="post">
            @csrf
            <input type="hidden" id="id" name="id" value="{{ old('id') ?: $istoric_medical->id }}">
            <textarea rows="2"placeholder="Alergii si Intolerante" name="alergii_si_intoleranta" id="alergii_si_intoleranta"
                class="input-register" type="text">{{ $istoric_medical->alergii_si_intoleranta }}</textarea>
            <textarea rows="2"placeholder="Boli cronice si diagnostice" name="boli_cronice_si_diagnostice"
                id="boli_cronice_si_diagnostice" class="input-register" type="text">{{ $istoric_medical->boli_cronice_si_diagnostice }}</textarea>
            <textarea rows="2"placeholder="Istoricul de boli si intoleranta" name="istoricul_de_boli_si_diagnostice"
                id="istoricul_de_boli_si_diagnostice" class="input-register" type="text">{{ $istoric_medical->istoricul_de_boli_si_diagnostice }}</textarea>
            <textarea rows="2"placeholder="Interventii si procedee efectuate" name="interventii_si_procedee_efectuate"
                id="interventii_si_procedee_efectuate" class="input-register" type="text">{{ $istoric_medical->interventii_si_procedee_efectuate }}</textarea>
            <textarea rows="2"placeholder="Servicii medicale" name="servicii_medicale" id="servicii_medicale"
                class="input-register" type="text">{{ $istoric_medical->servicii_medicale }}</textarea>
            <textarea rows="2"placeholder="imunizari" name="imunizari" id="imunizari" class="input-register" type="text">{{ $istoric_medical->imunizari }}</textarea>
            <textarea rows="2"placeholder="Tratament medicamentos" name="tratament_medicamentos" id="tratament_medicamentos"
                class="input-register" type="text">{{ $istoric_medical->tratament_medicamentos }}</textarea>
            <div class="row">
                <div class="col-12"><button class="btn btn-success submit-login">Editeaza</button></div>
            </div>

        </form>


    </section>
    <x-footer></x-footer>
</body>

</html>
