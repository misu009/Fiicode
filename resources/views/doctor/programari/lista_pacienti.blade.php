<!DOCTYPE html>
<html lang="en">

<head>
    {{-- SELECT2 --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css"
        rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    {{-- GOOGLE FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Ubuntu:wght@500&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Stay organized with our user-friendly Calendar featuring events, reminders, and a customizable interface. Built with HTML, CSS, and JavaScript. Start scheduling today!" />
    <meta name="keywords" content="calendar, events, reminders, javascript, html, css, open source coding" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Lista Pacienti</title>
    <link rel="stylesheet" href="/CSS/lista_pacienti.css" />
</head>

<body>

    <x-navbar :navbar-links="['Acasa', 'Istoric medical', 'Fisa medicala', 'Programari', 'Profil', 'Deconecteaza-te']"></x-navbar>
    <form class="select2-form" action="submit">
        <div class="row">
            <div class="col col-lg-12">
                <div class="select-input">
                    <section style="text-align: center" class="selection">
                        <div class="select-input">
                            <form action="" method="post">
                                @csrf
                                <select class="select2_1" name="pacient">
                                    <option>Selecteaza pacient</option>
                                    <option value="WY">Wyomind</option>
                                    <option value="Al">Alabama</option>
                                    {{-- @foreach ($pacienti as $pacient)
                        <option value="{{ $pacient->email }}">{{ $pacient->nume . ' ' . $pacient->prenume }}</option>
                    @endforeach --}}
                                </select>
                            </form>
                        </div>
                    </section>
                </div>
            </div>

            <div class="col col-lg-12"> <button style="margin-top: 1%" class="submit-login btn btn-success">Vezi mai
                    multe
                    informatii</button></div>

        </div>
    </form>
    <section class="table-section">

        <table class="table-hover table-striped table">

            <thead>
                <tr>
                    <th scope="col">Poza</th>
                    <th scope="col">Nume</th>
                    <th scope="col">Prenume</th>
                    <th scope="col">Data nasterii</th>
                    <th style="text-align: center" scope="col">Mai multe detalii</th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <th scope="row"><img style="width:45px" src="/images/default-pp.png" alt="poza_pacient"></th>
                    <td scope="col">Alex</td>
                    <td scope="col">Alexut</td>

                    <td scope="col">26.11.2004</td>
                    <td class="details-col" scope="col">
                        <button class="details-btn btn btn-primary"><i class="fa-solid fa-circle-info"></i></button>
                        <button data-bs-toggle="modal" data-bs-target="#transfer-pacient-Modal"
                            class="transfer-btn btn btn-warning"><i class="fa-solid fa-diamond-turn-right"></i></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><img style="width:45px" src="/images/default-pp.png" alt="poza_pacient"></th>
                    <td scope="col">Alex</td>
                    <td scope="col">Alexut</td>
                    <td scope="col">26.11.2004</td>
                    <td class="details-col" scope="col">
                        <button class="details-btn btn btn-primary"><i class="fa-solid fa-circle-info"></i></button>
                        <button data-bs-toggle="modal" data-bs-target="#transfer-pacient-Modal"
                            class="transfer-btn btn btn-warning"><i class="fa-solid fa-diamond-turn-right"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>


    </section>

    <section style="width: 100%;margin-top:5%;text-align:center;">
        <button style="margin-bottom:3%" type="button" class="add submit-login btn btn-outline-success"
            data-bs-toggle="modal" data-bs-target="#add-pacient-Modal">
            Adauga un pacient
        </button>
        <div class="modal fade" id="add-pacient-Modal" tabindex="-1" aria-labelledby="add-pacient-Modal"
            aria-hidden="true">
            <div class="modal-lg modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title">Adauga un pacient</h1>
                    </div>
                    <div class="edit-modal-body modal-body">
                        <form class="modal-form" action="submit">
                            <label for="email">Adresa email a pacientului</label>
                            <input placeholder="exemplu@gmail.com" id="email" class="input-register"
                                type="email" required>
                            <label for="tel">Numarul de telefon al
                                pacientului</label>
                            <input placeholder="0000 000 000"id="tel" class="input-register"
                                type="tel"pattern="[0-9]{4} [0-9]{3} [0-9]{3}" required>
                            <div style="text-align: center"><button value="submit"
                                    class="btn btn-success submit-login">Adauga<i class="fa-solid fa-plus"
                                        style="color: #ffffff;"></i></button>
                                <button type="button" class="close submit-login btn btn-outline-danger"
                                    data-bs-dismiss="modal">Inchide</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- MODALA CATRE ALT DOCTOR --}}
    <div class="modal fade" id="transfer-pacient-Modal" tabindex="-1" aria-labelledby="add-pacient-Modal"
        aria-hidden="true">
        <div class="modal-lg modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Transfera Pacientul</h1>
                </div>
                <div class="edit-modal-body modal-body">
                    <section class="selection">
                        <div class="select-input">
                            <form action="" method="post">
                                @csrf
                                <select class="select2" name="pacient">
                                    <option>Adauga pacient</option>
                                    <option value="WY">Wyomind</option>
                                    <option value="Al">Alabama</option>
                                    {{-- @foreach ($pacienti as $pacient)
                        <option value="{{ $pacient->email }}">{{ $pacient->nume . ' ' . $pacient->prenume }}</option>
                    @endforeach --}}
                                </select>
                        </div>
                </div>

            </div>
        </div>

    </div>

    {{--  --}}
    <x-footer></x-footer>

</body>

</html>
<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "mami",
            dropdownParent: $('#transfer-pacient-Modal'),
        });
        $('.select2_1').select2();
    });
</script>
