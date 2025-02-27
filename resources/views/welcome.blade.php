<x-layout>
    <x-error />
    <x-success />
    <div class="container-fluid text-center">
        <div class="row "> 
            <div class="col-12 header-custom vh-100 d-flex flex-column justify-content-center">
                <h1 class="title-header col-bg-text">RiArreda</h1>
                <h2 class="subtitle-header col-bg-text">Occasioni uniche a prezzi imbattibili.</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h2 class="text-start display-3 ps-3 py-4">Ultimi annunci inseriti</h2>
            </div>
        </div>

        <div class="row justify-content-center align-items-center pt-1 pb-5">
            @forelse ($ads as $ad)
                <div class="col-12 col-md-3 p-4">
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
