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
    <link rel="stylesheet" href="/CSS/program_pacient.css" />
    <title>Program Pacient</title>
</head>

<body>
    <x-navbar :navbar-links="['Acasa', 'Istoric medical', 'Fisa medicala', 'Programari', 'Profil', 'Deconecteaza-te']"></x-navbar>
    <x-alert></x-alert>
    <section class="choose-date">
        <form action="{{ route('pacient.programare.data') }}" class="form-date">
            <div class="row">
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
                    <h1>Introduceti data</h1>
                </div>
                <div class="col col-lg-12 col-md-12 col-sm-12 col-12"><input class="date-input" type="date"
                        name="data" value="{{ isset($data) ? $data : null }}">
                </div>
                <div class="date-buttons">
                    <button name="action" value="find" type="submit" class="submit-login btn btn-success">Arata
                        pentru</button>
                    <button name="action" value="reset" class="submit-login btn btn-success">Arata
                        tot</button>
                </div>
            </div>
        </form>
    </section>

    <div class="row">
        <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
            @if (!$programari->isEmpty())
                <table class="table-striped table-hover table">
                    <thead>
                        <tr>
                            <th scope="col">Data</th>
                            <th scope="col">Ora</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($programari as $programare)
                            @php
                                $date = explode(' ', $programare->data)[0];
                                $time = explode(' ', $programare->data)[1];
                            @endphp
                            <tr>
                                <th scope="row">{{ $date }}</th>
                                <td>{{ $time }}</td>
                                <td class="edit-col"><button type="button" class="edit-btn btn btn-primary"
                                        data-bs-toggle="modal" data-bs-target="#editProgramare"
                                        onclick="editProgramare({{ $programare->id }}, '{{ $date }}', '{{ $time }}')">
                                        <i class="fa-solid fa-pencil"></i>
                                    </button>
                                    <form method="POST" class="btn-danger"
                                        action="{{ route('pacient.programare.delete', $programare->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-btn btn btn-danger"><i
                                                class=" fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $programari->onEachSide(1)->links() }}
            @else
                <br><br><br><br><br>
                <div class="d-flex justify-content-center">Nu aveti programari..</div>
            @endif
        </div>
    </div>
    {{--  --}}
    <div class="btn-modal col col-lg-12 col-md-12 col-sm-12 col-12">
        <button type="button" class="submit-login1 btn btn-success" data-bs-toggle="modal"
            data-bs-target="#addProgramare">
            Faceti o programare
        </button>
        @include('pacient.programari.edit')
        @include('pacient.programari.add')
    </div>
    </div>
</body>

</html>

<script>
    function editProgramare(id, data, ora) {
        ora = ora.slice(0, -3);
        const input1 = document.getElementById('id');
        input1.value = id;
        const input2 = document.getElementById('data');
        input2.value = data;
        const input3 = document.getElementById('ora');
        input3.value = ora;
    }
    @if ($errors->any() and !$errors->has('id'))
        $(document).ready(function() {
            $("#{{ Illuminate\Support\Facades\Session::get('modal') }}").modal('show');
        });
    @else
        @php
            Illuminate\Support\Facades\Session::forget('modal');
        @endphp
    @endif
</script>
