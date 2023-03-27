<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    {{-- CCS --}}
    <link rel="stylesheet" href="/CSS/login.css">
    {{-- GOOGLE FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Ubuntu:wght@500&display=swap"
        rel="stylesheet">

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/4d408f9161.js" crossorigin="anonymous"></script>
</head>

<body>
    <x-navbar  :navbar-links="['Acasa', 'Istoric medical', 'Fisa medicala', 'Programari', 'Profil', 'Deconecteaza-te']"></x-navbar>
    <x-alert></x-alert>
    <section class="login">
        <div class="login-card">
            <form id="form" action="{{ route('sign.in.index') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12"><label class="label-login"
                            for="email"><span class="label-text">Adresa
                                e-mail</span></label></div>
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12"><input name="email" id="email" required
                            name="email" class="input-login" type="email">
                    </div>
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12"><label class="label-login"
                            for="parola"><span class="label-text">Parola</span></label>
                    </div>
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12"><input id="parola" name="parola"
                            class="input-login" type="password" required>
                    </div>
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                        <button value="submit" class="submit-login btn btn-success btn-sm">
                            Logheaza-te</button>
                    </div>
                    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                        <p class="nu-ai-cont">Nu ai cont?</p>
                    </div>
                    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                        <a href="{{ route('register.pacient') }}">
                            Inregistrare pacient</a>

                    </div>
                    <div class="col col-lg-6 col-md-6 col-sm-6 col-6">
                        <a href="{{ route('register.doctor') }}">Inregistrare doctor</a>
                    </div>
                </div>
            </form>
        </div>


    </section>
    <x-footer></x-footer>
</body>

</html>
