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
    <link rel="stylesheet" href="/CSS/program_doctor.css" />
    <title>Program Dcotor</title>
</head>

<body>
    <section class="choose-date">
        <form action="submit" class="form-date">
            <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <h1>Introduceti data</h1>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12"><input class="date-input" type="date"
                        id="date" name="date">
                </div>
                <div class="date-buttons"><button type="submit" class="submit-login btn btn-success">Arata
                        pentru</button>

                    <button class="submit-login btn btn-success">Arata
                        tot</button>
                </div>


            </div>
        </form>
    </section>

    <div class="row">
        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
            <table class="table-hover table">
                <thead>
                    <tr>
                        <th scope="col">Pacient</th>
                        <th scope="col">Data</th>
                        <th scope="col">Ora</th>
                        <th scope="col">Detalii</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-danger">
                        <th scope="row">Livadaru Mihail Andrei</th>
                        <td>23.04.2023</td>
                        <td>16:30</td>
                        <td class="detalii-col">
                            <div class="edit-div" style=" height:40px; overflow: auto;">
                                pacientul e pe moarte si are nevoie imediata de ajutor pacientul e pe
                                moarte si are nevoie imediata de ajutor pacientul e pe moarte si are nevoie imediata de
                                ajutor
                            </div>

                        </td>
                        <td class="edit-col">
                            <button type="button" class="edit-btn btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#editModal">
                                <i class="fa-solid fa-pencil"></i>
                            </button>
                            <button class="delete-btn btn btn-danger"><i class=" fa-solid fa-trash"></i></button>
                        </td>

                    </tr>
                    <tr class="table-warning">
                        <th scope="row">Misu</th>
                        <td>23.04.2023</td>
                        <td>16:30</td>
                        <td class="detalii-col">
                            <div class="edit-div" style=" height:40px; overflow: auto;">ficat
                            </div>

                        </td>
                        <td class="edit-col">
                            <button type="button" class="edit-btn btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#editModal">
                                <i class="fa-solid fa-pencil"></i>
                            </button>
                            <button class="delete-btn btn btn-danger"><i class=" fa-solid fa-trash"></i></button>
                        </td>

                    </tr>
                    <tr class="table-success">
                        <th scope="row">Misu</th>
                        <td>23.04.2023</td>
                        <td>16:30</td>
                        <td class="detalii-col">
                            <div class="edit-div" style=" height:40px; overflow: auto;">
                                FICAT
                            </div>
                        </td>
                        <td class="edit-col"><button type="button" class="edit-btn btn btn-primary"
                                data-bs-toggle="modal" data-bs-target="#editModal">
                                <i class="fa-solid fa-pencil"></i>
                            </button>
                            <button class="delete-btn btn btn-danger"><i class=" fa-solid fa-trash"></i></button>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
        {{-- MODAL EDIT --}}
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-lg modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title">Modifica o programare</h1>
                    </div>
                    <div class="edit-modal-body modal-body">
                        <form class="modal-form" action="submit">
                            <input class="time-data" type="date">
                            <input class="time-data" type="time">
                            <div style="text-align: center"><button value="submit"
                                    class="btn btn-success submit-login">Modifica</button>
                                <button type="button" class=" submit-login btn btn-outline-danger"
                                    data-bs-dismiss="modal">Inchide</button>
                            </div>

                    </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    {{--  --}}
    <div class="btn-modal col col-lg-12 col-md-12 col-sm-12 col-12">
        <button type="button" class="submit-login1 btn btn-success" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            Adauga o programare
        </button>
        {{-- MODAL ADD PROGRAM --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-lg modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title">Adauga o programare</h1>
                    </div>
                    <div class="modal-body">
                        <form class="modal-form" action="submit">
                            <input class="time-data" type="date">
                            <input class="time-data" type="time">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Selecteaza pacientul</option>
                                <option value="1">misu</option>
                                <option value="2">misu</option>
                                <option value="3">misu</option>
                            </select>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Gradul de importanta</option>
                                <option value="1">Critic</option>
                                <option value="2">Mediu</option>
                                <option value="3">Lejer</option>
                            </select>
                            <div style="text-align: center">
                                <button value="submit" class="btn btn-success submit-login">Adauga</button>
                                <button type="button" class=" submit-login btn btn-outline-danger"
                                    data-bs-dismiss="modal">Inchide</button>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>
        {{-- ///MODAL --}}
    </div>
    </div>
</body>

</html>

{{-- <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="edit-div" style=" height:40px; overflow: auto;">
                            </div>

                        </td> --}}
