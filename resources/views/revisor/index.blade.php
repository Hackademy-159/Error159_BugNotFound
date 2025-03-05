<x-layout>
    <div class="container-fluid pt-5 mt-5 pb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-center display-2 fw-normal col-b-text">{{__('ui.Revisore Dashboard')}}</h1>
            </div>
        </div>

        <x-error />
        <x-success />

        @if ($ad_to_check)

            <div class="row justify-content-center pt-5">
                <!-- Sezione per le immagini -->
                <div class="col-md-7">
                    <div class="row row-cols-1 row-cols-md-3 g-4">

                        {{-- funzione immagini inserite dall'utente --}}
                        @if ($ad_to_check->images->count())
                            @foreach ($ad_to_check->images as $key => $image)
                                <div class="col-4 col-md-4 mb-4">
                                    <img src="{{ $image->getUrl(300,300) }}" class="img-fluid rounded shadow"
                                        alt="Immagine {{ $key + 1 }} dell'articolo '{{ $ad_to_check->title }}'">
                                </div>
                            @endforeach
                        @else
                            @for ($i = 0; $i < 6; $i++)
                                <!-- Mostra 6 immagini, 3 per riga -->
                                <div class="col-4">
                                    <div class="card shadow-sm">
                                        <img src="https://picsum.photos/300/200" class="card-img-top"
                                            alt="Immagine segnaposto">
                                    </div>
                                </div>
                            @endfor
                        @endif
                    </div>
                </div>

                <!-- Card con dettagli e azioni -->
                <div class="col-md-4">
                    <div class="card shadow rounded d-flex flex-column" style="height: 100%;">
                        <div class="card-body col-s d-flex flex-column justify-content-between">
                            <div>
                                <h1 class="fw-bold">{{ $ad_to_check->title }}</h1>
                                <h4 class="mt-3 col-b-text">{{__('ui.Autore')}}: <span
                                        class="fw-normal">{{ $ad_to_check->user->name }}
                                        {{ $ad_to_check->user->surname }}</span></h4>
                                <h4 class="col-b-text">{{__('ui.Prezzo')}}: <span class="fw-normal">{{ $ad_to_check->price }}€</h4>
                                <h4 class="col-b-text">{{__('ui.Categoria')}}:<span class="fw-normal">
                                        {{ $ad_to_check->category->name }}</h4>
                                <h4 class="col-b-text">{{__('ui.Descrizione')}}:<span class="fw-normal">
                                        {{ $ad_to_check->description }}</h4>
                            </div>
                            <div class="d-flex justify-content-around pt-3">
                                <form action="{{ route('reject', ['ad' => $ad_to_check]) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button class="cst-button px-4 ">{{__('ui.Rifiuta')}}</button>
                                </form>
                                <form action="{{ route('accept', ['ad' => $ad_to_check]) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button class="cst-button px-4">{{__('ui.Accetta')}}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <!-- Nessun annuncio da revisionare -->
            <div class="row justify-content-center align-items-center text-center" style="height: 60vh;">
                <div class="col-12">
                    <h1 class="fst-italic display-4 text-muted">{{__('ui.Nessun articolo da revisionare')}}
                    </h1>
                    <br>
                    <a href="{{ route('homepage') }}" class="cst-button py-2 px-6 fs-6">{{__('ui.Homepage')}}</a>
                </div>
            </div>
        @endif
    </div>
</x-layout>
