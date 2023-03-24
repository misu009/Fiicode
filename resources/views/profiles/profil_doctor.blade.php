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
    {{-- SCCS --}}
    {{-- <link rel="stylesheet" href="/SCSS/profil_doctor.css">
    <script src="less.js" type="text/javascript"></script> --}}
    {{-- CSS --}}
    <link rel="stylesheet" href="/CSS/profil_doctor.css">
    {{-- JAVASCRIPT --}}
    <script src="/JS/profil_doctor.js"></script>
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
    <x-alert></x-alert>
    <section class="profile">
        <form class="row-form" action="submit">
            <div class="row">
                <div class="col-pp col col-lg-4 col-md-12 col-sm-12 col-12 ">
                    <div class="profile-pic">
                        <label class="-label" for="file">
                            <span class="glyphicon glyphicon-camera"></span>
                            <span>Change Image</span>
                        </label>
                        <input id="file" name="profil" type="file" onchange="loadFile(event)" />
                        <img src="default-pp.png" id="output" width="200" />
                    </div>
            </div>
                <div class="col col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="row-form row">
                        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                            <h2>Informatii personale</h2>
                        </div>
                        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                            <input name="nume" id="nume" placeholder="Nume" required class="input-register"
                                type="text">
                        </div>
                        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                            <input name="nume" id="nume" placeholder="Prenume" required class="input-register"
                                type="text">
                        </div>
                        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                            <input name="nume" id="nume" placeholder="Email" required class="input-register"
                                type="text">
                        </div>
                        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="adresa-row row">
                                <div class=" col col-lg-4 col-md-4 col-sm-4 col-4">
                                    <input placeholder="Jud." required class="input-adresa input-register"
                                        name="localitate" id="localitate" type="text">
                                </div>
                                <div class="col col-lg-4 col-md-4 col-sm-4 col-4">
                                    <input placeholder="Loc." required class="input-adresa input-register"
                                        name="localitate" id="localitate" type="text">
                                </div>
                                <div class="col col-lg-4 col-md-4 col-sm-4 col-4">
                                    <input placeholder="Cartier" required class="input-adresa input-register"
                                        name="cartier" id="cartier" type="text">
                                </div>
                                <div class="col col-lg-4 col-md-4 col-sm-4 col-4">
                                    <input placeholder="Str-nr" required class="input-adresa input-register"
                                        name="strada" id="strada" type="text">
                                </div>
                                <div class="col col-lg-4 col-md-4 col-sm-4 col-4">
                                    <input placeholder="Bloc"class="input-adresa input-register" type="number"
                                        name="bloc" id="bloc" min="1">
                                </div>
                                <div class="col col-lg-4 col-md-4 col-sm-4 col-4">
                                    <input class="input-adresa input-register" placeholder="Ap." type="number"
                                        name="apartament" id="apartament" id="quantity" name="quantity" min="1">
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                            <h2>Adauga atestate</h2>
                        </div>
                        <div class=" col col-lg-12 col-md-12 col-sm-12 col-12">
                            <input class="file-input form-control input-register" type="file" name="atestat[]"
                                id="atestat" multiple>
                        </div>
                        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                            <button value="submit" class="submit-login btn btn-success btn-sm">Edit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</body>

</html>
