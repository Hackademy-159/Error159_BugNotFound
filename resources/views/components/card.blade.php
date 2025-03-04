<div class="card mx-auto shadow text-center mb-3 no-radius border-0">

    <img src="{{ $ad->images->isNotEmpty() ? $ad->images->first()->getUrl(300,300) : 'https://picsum.photos/200' }}"
        class="col-s card-img-top p-4 no-radius" alt="Immagine dell'articolo {{ $ad->title }}">
    <div class="card-body col-s no-radius">

        <h5 class="card-title">{{ $ad->title }}</h5>
        <h6 class="card-subtle text-body-secondary p-3">{{__('ui.Prezzo')}}: {{ $ad->price }} €</h6>

        <div class="d-flex justify-content-evenly align-items-center my-2">
            <a href="{{ route('ad.show', compact('ad')) }}" class="cst-button-card2 ">{{__('ui.Dettaglio')}}</a>
        </div>
        <div class="d-flex justify-content-evenly align-items-center my-2">
            <a href="{{ route('byCategory', ['category' => $ad->category]) }}" class="cst-button-card2">
                {{$ad->category->name }}
            </a>
        </div>
    </div>
</div>
