<x-layout>
  <x-error></x-error>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route("register")}}">
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




                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>