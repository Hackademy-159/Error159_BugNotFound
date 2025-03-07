<x-layout>
    <div class="container-fluid ">
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="text-center display-2 fw-normal col-b-text mt-5">{{__('ui.Risultati per la ricerca')}} "<span class="fst-italic">{{ $query }}</span>"</h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse ($ads as $ad)
                <div class="col-12 col-md-3">
                    <x-card :ad="$ad" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        {{__('ui.Nessun annuncio corrisponde alla tua ricerca')}}</h3>
                </div>
            @endforelse
        </div>
        <div class="d-flex justify-content-center">
            <div>
                {{ $ads->links() }}
            </div>
        </div>
    </div>
</x-layout>