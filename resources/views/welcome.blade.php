<x-layout>

    <div class="container-fluid text-center">
        <div id="header" class="row">
            <div class="col-12 vh-100 header-custom d-flex flex-column justify-content-center">
                <x-error />
                <x-success />
                <h1 class="title-header col-bg-text mt-5">RiArreda</h1>
                <h2 class="subtitle-header col-bg-text">{{ __('ui.Occasioni uniche a prezzi imbattibili.') }}</h2>
                <div class="m-5 z-2">
                    <a class="cst-button py-3 px-5 fs-5 "
                        href="{{ route('create.ad') }}">{{ __('ui.Pubblica un annuncio') }}</a>
                </div>
            </div>
        </div>
    </div>


    <div class="container text-center">
        <div class="row justify-content-center align-items-center pt-5 pb-5 h-100 ">
            <div class="col-12">
                <h2 class="text-start display-3 ps-3 py-4">{{ __('ui.Ultimi annunci inseriti') }}</h2>
            </div>
            @forelse ($ads as $ad)
                <div class="col-12 col-md-3 p-3 col-s">
                    <x-card :ad="$ad" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">{{ __('ui.Non sono ancora stati creati degli annunci') }}</h3>
                </div>
            @endforelse
        </div>
    </div>

    {{-- sezione revisore --}}
    <div class="container-fluid text-center">
        <div class="row col-b">
            <div class="col-12 d-flex flex-column justify-content-center col-bg-text size-section">
                <h2 class="title-section p-2">{{ __('ui.Vuoi diventare revisore?') }}</h2>
                <h2 class="subtitle-section pt-2">{{ __('ui.Aiutaci a mantenere il nostro marketplace sicuro.') }}</h2>
                <h2 class="subtitle-section">
                    {{ __('ui.Diventa un revisore e approva o rifiuta gli annunci messi in vendita dagli utenti.') }}
                </h2>
                <div class="p-5">
                    @if (Auth::check())
                        <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button"
                            class="cst-section-button">
                            {{ __('ui.Diventa revisore') }}
                        </button>
                    @else
                        <a class="cst-section-button py-3 px-4"
                            href="{{ route('login') }}">{{ __('ui.Diventa revisore') }}</a>
                    @endif
                </div>

                {{-- modale --}}
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            @if (Auth::check() && !Auth::user()->is_revisor)
                                <div class="modal-header col-bg">
                                    <h5 class="modal-title modal-title-text" id="staticBackdropLabel">
                                        {{ __('ui.Conferma la tua scelta') }}
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body col-bg text-center">
                                    <p class="modal-text">{{ __('ui.Sei sicuro di voler diventare revisore?') }}</p>
                                </div>
                                <div class="modal-footer col-bg d-flex justify-content-center">
                                    <button type="button" class="cst-button width-custom me-2"
                                        data-bs-dismiss="modal">{{ __('ui.Annulla') }}</button>
                                    <a href="{{ route('become.revisor') }}"
                                        class="cst-button width-custom">{{ __('ui.Conferma') }}</a>
                                </div>
                            @else
                                <div class="modal-header col-bg">
                                    <h5 class="modal-title modal-title-text" id="staticBackdropLabel">
                                        {{ __('ui.Attenzione') }}
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body col-bg text-center">
                                    <p class="modal-text">{{ __('ui.Sei già un revisore!') }}</p>
                                </div>
                                <div class="modal-footer col-bg d-flex justify-content-center">
                                    <button type="button" class="cst-button width-custom me-2"
                                        data-bs-dismiss="modal">{{ __('ui.Chiudi') }}</button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
</x-layout>
