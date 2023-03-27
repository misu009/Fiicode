<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-lg modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Faceti o programare</h1>
            </div>
            <div class="modal-body">
                <form class="modal-form" method="post" action="{{ route('pacient.programare.add') }}">
                    @csrf
                    <input name="data" class="time-data" type="date" value="{{ isset($data) ? $data : null }}">
                    <input name="ora" class="time-data" type="time">
                    <textarea name="description" placeholder="Descrieti necesitatea sau problema pe care o aveti" class="date-input"
                        cols="30" rows="5"></textarea>

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
