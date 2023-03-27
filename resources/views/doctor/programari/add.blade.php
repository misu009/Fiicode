<div class="modal fade" id="addProgramare" tabindex="-1" aria-labelledby="addProgramareLabel" aria-hidden="true">
    <div class="modal-lg modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Adauga o programare</h1>
            </div>
            <div class="modal-body">
                <form class="modal-form" method="post" action="{{ route('doctor.programare.add') }}">
                    @csrf
                    <input type="hidden" name="action" value="addProgramare">
                    <input name="data" class="time-data" type="date" value="{{ isset($data) ? $data : null }}">
                    <input name="ora" class="time-data" type="time">
                    @php
                        $doctor = Illuminate\Support\Facades\Session::get('doctor');
                        $pacients = App\Models\Pacient::where('doctor_id', $doctor->id)->get();
                    @endphp
                    <select class="form-select" aria-label="Default select example" name="pacient">
                        <option selected>Selecteaza pacientul</option>
                        @foreach ($pacients as $pacient)
                            <option value="{{ $pacient->email }}">{{ $pacient->nume . ' ' . $pacient->prenume }}
                            </option>
                        @endforeach
                    </select>
                    <select class="form-select" aria-label="Default select example" name="importanta">
                        <option selected>Selecteaza gradul importantei</option>
                        <option value="danger">Critic</option>
                        <option value="warning">Mediu</option>
                        <option value="success">Lejer</option>
                    </select>
                    <textarea rows="4" placeholder="Cateva detalii despre programare" name="description" id="description" required
                        class="form-textarea" type="text"></textarea>
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
