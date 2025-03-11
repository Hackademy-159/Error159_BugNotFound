
<div class="card mx-auto ">
    {{-- <div id="carousel{{ $ad->id }}" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner"> --}}
            {{-- @foreach ($ad->images as $index => $image) --}}
                {{-- <div class="carousel-item me-0 {{ $index === 0 ? 'active' : '' }}"> --}}
                    {{-- <img src="{{ $image->getUrl(300,300) }}" class="col-bg img-fluid p-2 no-radius" alt="Immagine dell'articolo {{ $ad->title }}"> --}}
                    <img src="{{ $ad->images->isNotEmpty() ? $ad->images->first()->getUrl(300,300) : 'https://picsum.photos/200' }}" class="col-bg img-fluid p-2 no-radius" alt="Immagine dell'articolo {{ $ad->title }}">

                {{-- </div> --}}
            {{-- @endforeach --}}
        {{-- </div> --}}
        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $ad->id }}" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">{{__('ui.Precedente')}}</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $ad->id }}" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">{{__('ui.Successivo')}}</span>
        </button> --}}
    {{-- </div> --}}

    <div class=" px-3 col-bg no-radius">
        <h5 class=" text-start m-0 col-b-text">{{ $ad->title }}</h5>
        <div class="text-start mb-3">
            <a href="{{ route('byCategory', ['category' => $ad->category]) }}" class="text-none col-b-text">{{$ad->category->name }}</a>
        </div>
        <h6 class="col-b-text text-start">{{__('ui.Prezzo')}}: {{ $ad->price }} €</h6>

        <div class="d-flex justify-content-evenly align-items-center my-1 mb-3">
            <a href="{{ route('ad.show', compact('ad')) }}" class="text-center cst-button-card2 mt-3">{{__('ui.Dettaglio')}}</a>
        </div>
        <div>
            @auth
    <livewire:wishlist-button :ad="$ad" />
@endauth

        </div>
        
    </div>
</div>
