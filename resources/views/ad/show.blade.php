<x-layout>
    <div class="col-12">
        <h1 class="fst-italic display-5 col-b-text ms-4 mt-5 pt-5 ps-3 pb-3">{{ $ad->title }}</h1>
    </div>
    <div class="container ">
        <div class="row height-custom justify-content-center mb-5 ms-0 me-0 py-3 cst-form">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                @if ($ad->images->count() > 0)

                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            @foreach ($ad->images as $key => $image)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <img src="{{ $image->getUrl(300,300) }}" class="d-block w-100 shadow"
                                        alt="Immagine {{ $key + 1 }} dell'annuncio {{ $ad->title }}">
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
            <div class="col-12 col-md-6 mb-3 height-custom d-flex flex-column justify-content-center">
                <div>
                   <h4 class="fw-bold p-2">{{__('ui.Prezzo')}}: <span class="fw-normal">{{ $ad->price }} €</span></h4>
                    <h4 class="fw-bold p-2">{{__('ui.Colore')}}: <span class="fw-normal">{{ $ad->color }}</span></h4>
                    <h4 class="fw-bold p-2">{{__('ui.Condizione')}}: <span class="fw-normal">{{ $ad->status }}</span></h4>
                    <h4 class="fw-bold p-2">{{__('ui.Descrizione')}}: <span class="fw-normal">{{ $ad->description }}</span></h5> 
                </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
