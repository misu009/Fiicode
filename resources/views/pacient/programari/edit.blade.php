<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-lg modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Modifica o programare</h1>
            </div>
            <div style="text-align: center" class="edit-modal-body modal-body">
                <form class="modal-form" method="post" action="{{ route('pacient.programare.update') }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="action" value="editProgramare">
                    <input type="hidden" name="id" id="id" value="{{ old('id') }}">
                    <input id="data" name="data" class="time-data" type="date">
                    <input id="ora" name="ora" class="time-data" type="time">
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
