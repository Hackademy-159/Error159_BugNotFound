<x-layout>
    <h1 class="text-center p-3 display-2 fw-normal col-b-text my-5">Accedi al tuo account:</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{ route('login') }}" class="cst-form p-5 mb-5 mt-2 shadow">
                    @csrf

                    <!-- Indirizzo Email -->
                    <div class="mb-3">
                        <label class="form-label">Indirizzo Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Pulsante Accedi -->
                    <div class="d-flex justify-content-center pt-4">
                        <button type="submit" class="cst-button-card">Accedi</button>
                    </div>

                    <!-- Link alla Registrazione -->
                    <div class="text-center mt-3">
                        <p>Ancora non hai un account? <a href="{{ route('register') }}">Iscriviti</a>.</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
