
<div class="card mx-auto text-center ">
    <div id="carousel{{ $ad->id }}" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($ad->images as $index => $image)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="{{ $image->getUrl(300,300) }}" class="col-s img-fluid p-4 no-radius" alt="Immagine dell'articolo {{ $ad->title }}">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $ad->id }}" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">{{__('ui.Precedente')}}</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $ad->id }}" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">{{__('ui.Successivo')}}</span>
        </button>
    </div>

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
