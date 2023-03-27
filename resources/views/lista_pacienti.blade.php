<!DOCTYPE html>
<html lang="en">

<head>
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
    <link rel="stylesheet" href="/CSS/lista_pacienti.css" />
    <title>Lista Pacienti</title>
</head>

<body>

    <x-navbar :navbar-links="['Acasa', 'Istoric medical', 'Fisa medicala', 'Programari', 'Profil', 'Deconecteaza-te']"></x-navbar>

    <section class="selection">
        <div class="select-input">
            <form action="submit">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Selectati un pacient</option>
                    <option value="1">Guliver</option>
                    <option value="2">Rex</option>
                    <option value="3">Mimir</option>
                </select>
                <button class="submit-login btn btn-success">Vezi mai multe informatii
            </form>
        </div>
    </section>
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
                    </td>
                </tr>
                <tr>
                    <th scope="row"><img style="width:45px" src="/images/default-pp.png" alt="poza_pacient"></th>
                    <td scope="col">Alex</td>
                    <td scope="col">Alexut</td>
                    <td scope="col">26.11.2004</td>
                    <td class="details-col" scope="col">
                        <button class="details-btn btn btn-primary"><i class="fa-solid fa-circle-info"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>


    </section>

    <section style="width: 100%;margin-top:5%;text-align:center;">
        </button><button type="button" class="add submit-login btn btn-outline-success" data-bs-toggle="modal"
            data-bs-target="#add-pacient-Modal">
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
                            <input placeholder="exemplu@gmail.com" id="email" class="input-register" type="email"
                                required>
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

</body>
