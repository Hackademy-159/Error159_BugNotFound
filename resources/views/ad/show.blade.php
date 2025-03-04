<x-layout>
    <div class="container ">
        <div class="row height-custom justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="text-center display-2 fw-normal col-b-text mt-5 pt-5">Dettaglio dell'articolo:
                    {{ $ad->title }}</h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center py-5 cst-form p-5 mb-5 mt-2 shadow">
            <div class="col-12 col-md-6 mb-3">
                @if ($ad->images->count() > 0)

                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            @foreach ($ad->images as $key => $image)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <img src="{{ $image->getUrl(300, 300) }}" class="d-block w-100 rounded shadow"
                                        alt="Immagine {{ $key + 1 }} dell'articolo {{ $ad->title }}">
                                </div>
                            @endforeach
                        </div>
                        @if ($ad->images->count() > 1)
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        @endif
                    </div>
                @else
                    <img src="https://picsum.photos/200" alt="Foto non inserita dall'utente">
                @endif

            </div>
            <div class="col-12 col-md-6 mb-3 height-custom d-flex flex-column justify-content-between">
                <h2 class="display-5"> <span class="fw-bold">Titolo: </span> {{ $ad->title }}</h2>
                <div class="text-left h-75">
                    <h4 class="fw-bold p-2">Prezzo: <span class="fw-normal">{{ $ad->price }} €</span></h4>
                    <h4 class="fw-bold p-2">Colore: <span class="fw-normal">{{ $ad->color }}</span></h4>
                    <h4 class="fw-bold p-2">Condizione: <span class="fw-normal">{{ $ad->status }}</span></h4>
                    <h4 class="fw-bold p-2">Descrizione: <span class="fw-normal">{{ $ad->description }}</span></h5>
                        <a href="{{ route('ad.index') }}" class="cst-button-detail">Chiudi dettaglio</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
