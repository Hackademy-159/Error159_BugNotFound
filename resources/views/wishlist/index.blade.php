<x-layout>
    <div class="container mt-5">
        <h1 class="text-center">{{ __('ui.La tua Wishlist') }}</h1>
        <div class="row">
            @foreach ($wishlistAds as $ad)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        {{-- <img src="{{ $ad->images->first()->getUrl(300, 300) ?? 'https://picsum.photos/300' }}" 
                             class="card-img-top" 
                             alt="{{ $ad->title }}"> --}}
                        <div class="card-body">
                            <h5 class="card-title">{{ $ad->title }}</h5>
                            <p class="card-text">{{ $ad->price }} €</p>
                            <a href="{{ route('ad.show', $ad) }}" class="btn btn-primary">Vedi Annuncio</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
