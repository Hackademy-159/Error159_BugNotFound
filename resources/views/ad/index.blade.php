<x-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="text-center display-2 fw-normal col-b-text mt-5 pt-5">{{__('ui.Tutti gli annunci')}}</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center py-5">
            @forelse ($ads as $ad)
                <div class="col-12 col-md-4 p-4">
                    <x-card :ad="$ad" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">{{__('ui.Non sono ancora stati creati articoli')}}</h3>
                </div>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div>
            {{ $ads->links() }}
        </div>
    </div>
</x-layout>
