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
    <section style="margin-top: 2%;padding-bottom:5%" class="inregistrare">
        <div class="card-group ">
            <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="col col-lg-12 col-md-12 col-12 col-sm-12">
                                <div class="login-card">
                                    <form id="form" method="post"
                                        action="{{ route('register.pacient.istoric') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12"><input name="code"
                                                    id="code" placeholder="*COD inregistrare" required
                                                    class="input-register" type="text" value="{{ old('code') }}">
                                            </div>
                                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12"><input id="nume"
                                                    name="nume" placeholder="*Nume" required class="input-register"
                                                    type="text" value="{{ old('nume') }}">
                                            </div>

                                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12"><input id="prenume"
                                                    name="prenume" placeholder="*Prenume" required
                                                    class="input-register" type="text" value="{{ old('prenume') }}">
                                            </div>
                                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12"><input id="email"
                                                    name="email" placeholder="*E-mail" required class="input-register"
                                                    type="email" value="{{ old('email') }}">
                                            </div>
                                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12"><input id="password"
                                                    name="password" placeholder="*Parola" required
                                                    class="input-register" type="password">
                                            </div>
                                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12"><input
                                                    id="confirm_password" name="confirm_password"
                                                    placeholder="*Confirma parola" required class="input-register"
                                                    type="password">
                                            </div>
                                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12"><input
                                                    id="data_nasterii" name="data_nasterii" placeholder="*Data Nasterii"
                                                    required class="input-register" type="date"
                                                    value="{{ old('data_nasterii') }}">
                                            </div>
                                            <div class="col col-lg-4 col-md-4 col-sm-4 col-4">
                                                <input placeholder="*Judet" required class="input-register"
                                                    id="judet" name="judet" type="text"
                                                    value="{{ old('judet') }}">
                                            </div>
                                            <div class="col col-lg-4 col-md-4 col-sm-4 col-4">
                                                <input placeholder="*Loc." required class="input-register"
                                                    id="localitate" name="localitate" type="text"
                                                    value="{{ old('localitate') }}">
                                            </div>
                                            <div class="col col-lg-4 col-md-4 col-sm-4 col-4">
                                                <input placeholder="*Cartier" required class="input-register"
                                                    id="cartier" name="cartier" type="text"
                                                    value="{{ old('cartier') }}">
                                            </div>
                                            <div class="col col-lg-4 col-md-4 col-sm-4 col-4">
                                                <input placeholder="*Strada-nr" required class="input-register"
                                                    id="strada" name="strada" type="text"
                                                    value="{{ old('strada') }}">
                                            </div>
                                            <div class="col col-lg-4 col-md-4 col-sm-4 col-4">
                                                <input placeholder="*Bloc" required class="input-register"
                                                    id="bloc" name="bloc" type="number" min="1"
                                                    value="{{ old('bloc') }}">
                                            </div>
                                            <div class="col col-lg-4 col-md-4 col-sm-4 col-4">
                                                <input class="input-register" required placeholder="*Apartament"
                                                    id="apartament" name="apartament" type="number" id="quantity"
                                                    name="quantity" min="1" value="{{ old('apartament') }}">
                                            </div>
                                            <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                                                <button value="submit"
                                                    class="submit-login btn btn-success btn-sm">Mergi
                                                    la pasul
                                                    urmator
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
