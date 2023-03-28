<div class="modal fade" id="add-pacient-Modal" tabindex="-1" aria-labelledby="add-pacient-Modal" aria-hidden="true">
    <div class="modal-lg modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-flex flex-column">
                <h1 class="modal-title">Adauga un pacient</h1>
                <p>(Introduceti emailul pacientului iar acesta va primi pe mail un cod unic)</p>
            </div>
            <div class="edit-modal-body modal-body">
                <form class="modal-form" method="post" action="{{ route('doctor.pacient.add') }}">
                    @csrf
                    <label for="email">Adresa email a pacientului</label>
                    <input name="email" placeholder="exemplu@gmail.com" id="email" class="input-register"
                        type="email" required>
                    <div style="text-align: center"><button value="submit" class="btn btn-success submit-login">Adauga<i
                                class="fa-solid fa-plus" style="color: #ffffff;"></i></button>
                        <button type="button" class="close submit-login btn btn-outline-danger"
                            data-bs-dismiss="modal">Inchide</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
