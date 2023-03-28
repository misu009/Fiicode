<!DOCTYPE html>
<html lang="en">

<head>
    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <title>Lista Pacienti</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
</head>

<body>

    <x-navbar :navbar-links="[
        '/doctor' => 'Acasa',
        '/doctor/program' => 'Programari',
        '/doctor/pacienti' => 'Pacienti',
        '/logout' => 'Deconecteaza-te',
    ]"></x-navbar>
    <x-alert></x-alert>
    <section class="selection">
        <div style="text-align: center" class="row">
            <form action="{{ route('doctor.pacienti.get') }}" method="post">@csrf
                <select class="select2_1" name="pacient">
                    <option>Adauga pacient</option>
                    @foreach ($pacienti as $pacient)
                        <option value="{{ $pacient->email }}">{{ $pacient->nume . ' ' . $pacient->prenume }}
                        </option>
                    @endforeach
                </select>
                <div class="col col-lg-12"><button style="margin-top:25px " class="submit-login btn btn-success">Vezi
                        mai multe
                        informatii</button>
                </div>
            </form>
        </div>
    </section>



    <section class="table-section">
        @if (!$pacienti->isEmpty())
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
                    @foreach ($pacienti as $pacient)
                        <tr>
                            <th scope="row"><img style="width:45px; height:45px;"
                                    src="{{ $pacient->poza_profil ?: '/images/default-pp.png' }}" alt="poza_pacient">
                            </th>
                            <td scope="col">{{ $pacient->nume }}</td>
                            <td scope="col">{{ $pacient->prenume }}</td>
                            <td scope="col">{{ $pacient->data_nasterii }}</td>
                            <td class="details-col" scope="col">
                                <a href="/doctor/pacient/{{ $pacient->id }}"><button
                                        class="details-btn btn btn-primary"><i
                                            class="fa-solid fa-circle-info"></i></button></a>
                                <button data-bs-toggle="modal" data-bs-target="#transfer-pacient-Modal"
                                    class="transfer-btn btn btn-warning" onclick="editPacient({{ $pacient->id }})"><i
                                        class="fa-solid fa-diamond-turn-right"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $pacienti->onEachSide(1)->links() }}
        @else
            <div class="d-flex justify-content-center">Nu aveti pacienti inca. Apasati pe butonul de adauga pacient
                pentru a incepe sa va bucurati de featurile acestui site</div>
        @endif


    </section>

    <section class="last-section" style="width: 100%;margin-top:5%;text-align:center;padding-bottom:10%">
        </button><button type="button" class="add submit-login btn btn-outline-success" data-bs-toggle="modal"
            data-bs-target="#add-pacient-Modal">
            Adauga un pacient
        </button>
        @include('doctor.pacienti.add')
    </section>
    <x-footer></x-footer>


    {{-- MODALA --}}
    <div class="modal fade" id="transfer-pacient-Modal" tabindex="-1" aria-labelledby="add-pacient-Modal"
        aria-hidden="true">
        <div class="modal-md modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Transfera Pacientul</h1>
                </div>
                <div class="edit-modal-body modal-body">
                    <section class="selection">
                        <div class="select-input">
                            @php
                                $doctors = App\Models\Doctor::get();
                            @endphp
                            <form action="{{ route('doctor.pacient.redirect') }}" method="post">
                                @csrf
                                <input id="id" name="id" type="hidden" value="{{ old('id') }}">
                                <select class="select2" name="doctor">
                                    <option>Adauga pacient</option>
                                    @foreach ($doctors as $doctor)
                                        <option value="{{ $doctor->email }}">
                                            {{ $doctor->nume . ' ' . $doctor->prenume }}</option>
                                    @endforeach
                                </select>
                                <div style="margin-top:10px; text-align: center "><button
                                        class="submit-login btn btn-success">Transfera</button></div>
                            </form>
                        </div>
                </div>

            </div>
        </div>

    </div>

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

    function editPacient(id) {
        const input = document.getElementById('id');
        input.value = id;
    }
</script>
