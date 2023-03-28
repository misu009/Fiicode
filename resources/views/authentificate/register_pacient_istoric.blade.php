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
    <link rel="stylesheet" href="/CSS/register1.css">
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
    <div style="margin-top: 2%;" class="login-card">
        <form id="form" method="post" action="{{ route('sign.up.pacient') }}">
            @csrf
            <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2>Istoricul tau medical</h2>
                </div>
                @foreach ($form_request as $key => $param)
                    <input type="hidden" name="{{ $key }}" value="{{ $param }}">
                @endforeach
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <textarea rows="2"placeholder="Alergii si Intolerante" name="alergii_si_intolerante" id="alergii_si_intolerante"
                        class="input-register" type="text"></textarea>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <textarea rows="2" placeholder="Boli cronice si diagnostice" name="boli_cronice_si_diagnostice"
                        id="boli_cronice_si_diagnostice" class="input-register"></textarea>
                </div>

                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <textarea rows="2" placeholder="Istoric de boli si diagnostice" name="istoricul_de_boli_si_diagnostice"
                        id="istoricul_de_boli_si_diagnostice" required class="input-register" type="text"></textarea>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <textarea rows="2" placeholder="Interventii"name="interventii_si_procedee_efectuate"
                        id="interventii_si_procedee_efectuate" required class="input-register" type="text"></textarea>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <textarea rows="2" placeholder="Servicii medicale" name="servicii_medicale" id="servicii_medicale" required
                        class="input-register" type="text"></textarea>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <textarea min="2" rows="2" placeholder="Imunizari" name="imunizari" id="imunizari" required
                        class="input-register" type="text"></textarea>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <textarea min="2" rows="2" placeholder="Tratament medicamentos" name="tratament_medicamentos"
                        id="tratament_medicamentos" required class="input-register" type="text"></textarea>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12"><button value="submit"
                        class="submit-login btn btn-success btn-sm">Inregistrare
                    </button></a>
                </div>
            </div>

        </form>
    </div>
    <x-footer></x-footer>
</body>

</html>
