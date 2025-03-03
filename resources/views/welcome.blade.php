<x-layout>

    <div class="container-fluid text-center">
        <div class="row ">
            <div class="col-12 vh-100 header-custom d-flex flex-column justify-content-center">
                <x-error />
                <x-success />
                <h1 class="title-header col-bg-text mt-5">RiArreda</h1>
                <h2 class="subtitle-header col-bg-text">Occasioni uniche a prezzi imbattibili.</h2>
                <div class="m-5 z-2">
                    <a class="cst-button py-3 px-5 fs-5 " href="{{ route('create.ad') }}">Pubblica un annuncio</a>
                </div>
            </div>
        </div>

        

        <div class="row justify-content-center align-items-center pt-5 pb-5 h-100">
            <div class="col-12">
                <h2 class="text-start display-3 ps-3 py-4">Ultimi annunci inseriti</h2>
            </div>
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

        {{-- sezione revisore --}}
        <div class="row col-b">
            <div class="col-12 d-flex flex-column justify-content-center col-bg-text size-section">
                <h2 class="title-section p-2">Vuoi diventare revisore?</h2>
                <h2 class="subtitle-section pt-2">Aiutaci a mantenere il nostro marketplace sicuro.</h2>
                <h2 class="subtitle-section">Diventa un revisore e approva o rifiuta gli articoli messi in vendita dagli
                    utenti. </h2>
                <div class="p-5">
                    @if (Auth::check())
                        <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button"
                            class="cst-section-button">
                            Diventa revisore
                        </button>
                    @else
                        <a class="cst-section-button py-3 px-4" href="{{ route('login') }}">Diventa revisore</a>
                    @endif
                </div>

                {{-- modale --}}
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            @if (Auth::check() && !Auth::user()->is_revisor)
                                <div class="modal-header col-bg">
                                    <h5 class="modal-title modal-title-text" id="staticBackdropLabel">Conferma la tua
                                        scelta
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body col-bg text-center">
                                    <p class="modal-text">Sei sicuro di voler diventare revisore?</p>
                                </div>
                                <div class="modal-footer col-bg d-flex justify-content-center">
                                    <button type="button" class="cst-button width-custom me-2"
                                        data-bs-dismiss="modal">Annulla</button>
                                    <a href="{{ route('become.revisor') }}" class="cst-button width-custom">Conferma</a>
                                </div>
                            @else
                                <div class="modal-header col-bg">
                                    <h5 class="modal-title modal-title-text" id="staticBackdropLabel">Attenzione
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body col-bg text-center">
                                    <p class="modal-text">Sei già un revisore!</p>
                                </div>
                                <div class="modal-footer col-bg d-flex justify-content-center">
                                    <button type="button" class="cst-button width-custom me-2"
                                        data-bs-dismiss="modal">Chiudi</button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- <a href="{{ route ('become.revisor')}}" --}}
            </div>
        </div>


    </div>
</x-layout>
