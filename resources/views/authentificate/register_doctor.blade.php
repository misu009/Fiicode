<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    {{-- CCS --}}
    <link rel="stylesheet" href="/CSS/register.css">
    {{-- GOOGLE FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Ubuntu:wght@500&display=swap"
        rel="stylesheet">

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/4d408f9161.js" crossorigin="anonymous"></script>
</head>

<body>
    <x-navbar :navbar-links="['/' => 'Acasa', '/tutorial' => 'Tutorial', 'des_noi' => 'Despre noi']"></x-navbar>
    <x-alert></x-alert>
    <section style="margin-top:5% ; margin-bottom:5%" class="inregistrare">
        <div class="card-group ">
            <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="col col-lg-12 col-md-12 col-12 col-sm-12">
                                <div class="login-card">
                                    <form id="form" method="post" action="{{ route('sign.up.doctor') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12"><input name="nume"
                                                    id="nume" placeholder="*Nume" required class="input-register"
                                                    type="text" value={{ old('nume') }}>
                                            </div>

                                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12"><input name="prenume"
                                                    id="prenume" placeholder="*Prenume" required
                                                    class="input-register" type="text" value={{ old('prenume') }}>
                                            </div>
                                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12"><input name="email"
                                                    id="email" placeholder="*E-mail" required class="input-register"
                                                    type="email" value={{ old('email') }}>
                                            </div>
                                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12"><input name="password"
                                                    id="password" placeholder="*Parola" required class="input-register"
                                                    type="password">
                                            </div>
                                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12"><input
                                                    name="confirm_password" id="confirm_password"
                                                    placeholder="*Confirma Parola" required class="input-register"
                                                    type="password">
                                            </div>
                                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12"><input
                                                    name="data_nasterii" id="data_nasterii" placeholder="*Data Nasterii"
                                                    required class="input-register" type="date"
                                                    value={{ old('data_nasterii') }}>
                                            </div>
                                            <div class="col col-lg-4 col-md-4 col-sm-4 col-4">
                                                <input placeholder="*Judet" required class="input-register"
                                                    name="judet" id="judet" type="text"
                                                    value={{ old('judet') }}>
                                            </div>
                                            <div class="col col-lg-4 col-md-4 col-sm-4 col-4">
                                                <input placeholder="*Loc." required class="input-register"
                                                    name="localitate" id="localitate" type="text"
                                                    value={{ old('localitate') }}>
                                            </div>
                                            <div class="col col-lg-4 col-md-4 col-sm-4 col-4">
                                                <input placeholder="*Cartier" required class="input-register"
                                                    name="cartier" id="cartier" type="text"
                                                    value={{ old('cartier') }}>
                                            </div>
                                            <div class="col col-lg-4 col-md-4 col-sm-4 col-4">
                                                <input placeholder="*Strada-nr" required class="input-register"
                                                    name="strada" id="strada" type="text"
                                                    value={{ old('strada') }}>
                                            </div>
                                            <div class="col col-lg-4 col-md-4 col-sm-4 col-4">
                                                <input placeholder="Bloc"class="input-register" type="number"
                                                    name="bloc" id="bloc" min="1"
                                                    value={{ old('bloc') }}>
                                            </div>
                                            <div class="col col-lg-4 col-md-4 col-sm-4 col-4">
                                                <input class="input-register" placeholder="Apartament" type="number"
                                                    name="apartament" id="apartament" id="quantity" name="quantity"
                                                    min="1" value={{ old('apartament') }}>
                                            </div>
                                            <div class=" col col-lg-12 col-md-12 col-sm-12 col-12">
                                                <input class="file-input form-control input-register" type="file"
                                                    name="atestat[]" id="atestat" multiple>
                                            </div>
                                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">

                                                <button value="submit"
                                                    class="submit-login btn btn-success btn-sm">Inregistrare
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footer></x-footer>

</body>

</html>
