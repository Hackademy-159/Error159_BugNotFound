<x-layout>
  <h1 class="text-center p-3 display-2 fw-normal col-p-text my-5">Accedi al tuo account:</h1>
  <x-error></x-error>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{ route('login') }}" class="cst-form p-5 mb-5 mt-2 shadow">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Indirizzo Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="d-flex justify-content-center pt-4">
                        <button type="submit" class="cst-button-card">Accedi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
