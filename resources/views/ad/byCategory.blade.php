<x-layout>
    <div class="container">
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12 pt-5">
                <h1 class="display-2">Articoli della categoria 
                    <h2 class="fst-italic fw-bold display-3">{{ $category->name }}</h2>
                </h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse ($ads as $ad)
                <div class="col-12 col-md-3">
                    <x-card :ad="$ad" />
                </div>
            @empty
                <div class="col-12 text-center">
                    <h3>
                        Non sono ancora stati creati articoli per questa categoria!
                    </h3>
                    @auth
                        <a class="btn btn-dark my-5" href="{{ route('create.ad') }}">Pubblica un articolo</a>
                    @endauth
                </div>
            @endforelse
        </div>
    </div>
</x-layout>