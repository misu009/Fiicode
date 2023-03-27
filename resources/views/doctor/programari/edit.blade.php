@php
    $doctor = Illuminate\Support\Facades\Session::get('doctor');
    $pacients = App\Models\Pacient::where('doctor_id', $doctor->id)->get();
@endphp
<div class="modal fade" id="editProgramare" tabindex="-1" aria-labelledby="editProgramare" aria-hidden="true">
    <div class="modal-lg modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Modifica o programare</h1>
            </div>
            <div class="edit-modal-body modal-body">
                <form class="modal-form" method="POST" action="{{ route('doctor.programare.update') }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="action" value="editProgramare">
                    <input type="hidden" name="id" id="id" value="{{ old('id') }}">
                    <input id="data" name="data" class="time-data" type="date" value="">
                    <input id="ora" name="ora" class="time-data" type="time" value="">
                    <select id="pacient" class="form-select" aria-label="Default select example" name="pacient">
                        @foreach ($pacients as $pacient)
                            <option value="{{ $pacient->email }}">{{ $pacient->nume . ' ' . $pacient->prenume }}
                            </option>
                        @endforeach
                    </select>
                    <select id="importanta" class="form-select" aria-label="Default select example" name="importanta">
                        <option value="danger">Critic</option>
                        <option value="warning">Mediu</option>
                        <option value="success">Lejer</option>
                    </select>
                    <textarea rows="4" placeholder="Cateva detalii despre programare" name="description" id="description" required
                        class="form-textarea" type="text"></textarea>
                    <div style="text-align: center"><button value="submit"
                            class="btn btn-success submit-login">Modifica</button>
                        <button type="button" class=" submit-login btn btn-outline-danger"
                            data-bs-dismiss="modal">Inchide</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
