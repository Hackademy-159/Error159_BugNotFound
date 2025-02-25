<x-layout>
  <h1 class="text-center p-3 display-2 fw-normal col-p-text my-5">Crea il tuo account:</h1>
  <x-error></x-error>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9">
                <form method="POST" action="{{ route('register') }}" class="cst-form p-5 mb-5 mt-2 shadow">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" name="name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Cognome</label>
                        <input type="text" class="form-control" name="surname">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Data Nascita</label>
                        <input type="date" class="form-control" name="date">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Numero Telefono</label>
                        <input type="text" class="form-control" name="telephone_number">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Indirizzo Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>



                    <div class="mb-3">
                        <label class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>


                    <div class="d-flex justify-content-center pt-4">
                        <button type="submit" class="cst-button-card">Registrati</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</x-layout>
