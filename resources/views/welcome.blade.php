<x-layout>
    <div class="container-fluid text-center">
        <div class="row wh-100 justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="display-1">PRESTO.IT</h1>
                <div class="my-3">
                    @auth
                        <a href="{{ route('create.ad') }}" class="btn btn-primary">Crea un annuncio</a>
                    @endauth
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center py-5">
            @forelse ($ads as $ad)
                <div class="col-12 col-md-3">
                    <x-card :ad="$ad" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">Non sono ancora stati creati degli articoli</h3>
                </div>
            @endforelse
        </div>
    </div>

</x-layout>
