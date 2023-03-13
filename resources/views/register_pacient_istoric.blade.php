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
    {{-- NAVBAR --}}
    <div class="login-card">
        <form id="form" action="submit">
            <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2>Istoricul tau medical</h2>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <textarea rows="2"placeholder="Alergii si Intolerante" class="input-register" type="text"></textarea>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <textarea rows="2" placeholder="Boli cronice si diagnostice" class="input-register"></textarea>
                </div>

                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <textarea rows="2" placeholder="Istoric de boli si diagnostice" required class="input-register" type="text"></textarea>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <textarea rows="2" placeholder="Interventii" required class="input-register" type="text"></textarea>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <textarea rows="2" placeholder="Servicii medicale" required class="input-register" type="text"></textarea>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <textarea min="2" rows="2" placeholder="Imunizari" required class="input-register" type="text"></textarea>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <textarea min="2" rows="2" placeholder="Tratament medicamentos" required class="input-register"
                        type="text"></textarea>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <a href=""><button value="submit" class="submit-login btn btn-success btn-sm">Inregistrare
                        </button></a>
                </div>
            </div>

        </form>
    </div>

</body>

</html>
