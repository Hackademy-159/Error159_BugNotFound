<x-layout>
    <div class="container mt-5">
        
        <div class="row justify-content-center align-items-center px-2 py-3 col-s mb-5 ps-3 margin-index">
            @forelse ($ads as $ad)
                <div class="col-12 col-md-3 p-2">
                    <x-card :ad="$ad" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">{{__('ui.Non sono ancora stati creati annunci')}}</h3>
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
