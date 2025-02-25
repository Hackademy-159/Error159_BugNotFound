<x-layout>
    <h1 class="text-center p-3 display-2 fw-normal col-b-text my-5">Crea il tuo account:</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9">
                <form method="POST" action="{{ route('register') }}" class="cst-form p-5 mb-5 mt-2 shadow">
                    @csrf

                    <!-- Nome -->
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Cognome -->
                    <div class="mb-3">
                        <label class="form-label">Cognome</label>
                        <input type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}">
                        @error('surname')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Data Nascita -->
                    <div class="mb-3">
                        <label class="form-label">Data Nascita</label>
                        <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}">
                        @error('date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Numero Telefono -->
                    <div class="mb-3">
                        <label class="form-label">Numero Telefono</label>
                        <input type="text" class="form-control @error('telephone_number') is-invalid @enderror" name="telephone_number" value="{{ old('telephone_number') }}">
                        @error('telephone_number')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

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

                    <!-- Conferma Password -->
                    <div class="mb-3">
                        <label class="form-label">Conferma Password</label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                        @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Pulsante Registrati -->
                    <div class="d-flex justify-content-center pt-4">
                        <button type="submit" class="cst-button-card">Registrati</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-layout>
