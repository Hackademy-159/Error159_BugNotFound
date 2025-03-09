<nav @if (Route::currentRouteName() == 'homepage') id="navbar" @endif class="navbar navbar-expand-lg @if (Route::currentRouteName() == 'homepage') nav-trans @else shadow col-bg @endif fixed-top">
    <div class="container-fluid">
        {{-- logo --}} 
        <a class="pe-md-2" href="{{ route('homepage') }}"><img class="cst-dim" src="{{ asset('img/Logo.png') }}" alt="Logo"></a>
        {{-- campo ricerca mobile --}}
        <div class="d-md-none">
            <form class="pt-1 d-flex" role="search" action="{{ route('ad.search') }}" method="GET">
                {{-- <input id="cercaInput" type="search" class="@if (Route::currentRouteName() == 'homepage') search-border-home @else search-border-all @endif col-t" name="query" placeholder="Cerca..."  aria-label="Search">
                <button type="submit" id="basic-addon2" class="border-0 col-t">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search col-b-text" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                </button> --}}
                <input id="inputSearch1" type="search" class="@if (Route::currentRouteName() == 'homepage') search-border-home @else search-border-all @endif col-t mx-md-2" name="query" placeholder="{{__('ui.Cerca...')}}"aria-label="Search">
                        <button type="submit" id="basic-addon2" class="border-0 col-t col-bg-text">
                            <i id="search" class="fs-5 bi bi-search @if (Route::currentRouteName() == 'homepage') navElement col-bg-text @else col-b-text @endif"></i>
                        </button>
        </form>
            
        </div>
        {{-- bottone apertura navbar mobile --}}
        <button id="navButton" class="d-md-none nav-button-expand rotated2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <i class="trans bi bi-chevron-double-up pt-2 fs-3 @if (Route::currentRouteName() == 'homepage') navElement col-bg-text @else col-b-text @endif"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-0 mb-md-2 mb-lg-0">

                <li class="nav-item ms-auto ms-md-0">
                    <a class="@if (Route::currentRouteName() == 'homepage') navElement col-bg-text @else col-b-text @endif nav-link mx-md-2 active fs-5 @if(Route::currentRouteName() == 'ad.index') border-navbar @endif" aria-current="page" href="{{ route('ad.index') }}">{{__('ui.Tutti gli annunci')}}</a>
                </li>
                @auth
                    <li class="nav-item ms-auto ms-md-0">
                        <a class="@if (Route::currentRouteName() == 'homepage') navElement col-bg-text @else col-b-text @endif nav-link mx-md-2 active fs-5 @if(Route::currentRouteName() == 'create.ad') border-navbar @endif" href="{{ route('create.ad') }}">{{__('ui.Crea un annuncio')}}</a>
                    </li>
                @endauth
                <li class="nav-item ms-auto ms-md-0 dropdown">
                    <a class=" @if (Route::currentRouteName() == 'homepage') navElement col-bg-text @else col-b-text @endif text-end text-md-start nav-link mx-md-2 dropdown-toggle active fs-5 @if(Route::currentRouteName() == 'byCategory') border-navbar @endif" href=""role='buttom'
                        data-bs-toggle='dropdown' aria-expamded='false'>
                        {{__('ui.Categorie')}}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item text-capitalize"
                                    href="{{ route('byCategory', ['category' => $category]) }}">
                                    {{ $category->name }}
                                </a>
                            </li>
                            @if (!$loop->last)
                                <hr class='dropdown-divider'>
                            @endif
                        @endforeach

                    </ul>
                </li>
            </ul>
            {{-- ZONA NAVBAR DI DESTRA --}}



            <ul class="navbar-nav mb-2  mb-lg-0">

                <li class="pt-1 d-none d-md-block">
                <form class="pt-1 d-flex" role="search" action="{{ route('ad.search') }}" method="GET">
                        <input id="inputSearch" type="search" class="@if (Route::currentRouteName() == 'homepage') search-border-home @else search-border-all @endif col-t mx-md-2" name="query" placeholder="{{__('ui.Cerca...')}}"aria-label="Search">
                        <button type="submit" id="basic-addon2" class="border-0 col-t col-bg-text">
                            <i id="search" class="fs-5 bi bi-search @if (Route::currentRouteName() == 'homepage') navElement col-bg-text @else col-b-text @endif"></i>
                        </button>
                </form>
                </li>

                @guest
                    <li class="nav-item ms-auto ms-md-0">
                        <a class=" @if (Route::currentRouteName() == 'homepage') navElement col-bg-text @else col-b-text @endif nav-link fs-5 pt-0 pt-md-2" href="{{ route('login') }}">{{__("ui.Accedi")}} </a>
                    </li>

                    <li class="nav-item ms-auto ms-md-0">
                        <a class=" @if (Route::currentRouteName() == 'homepage') navElement col-bg-text @else col-b-text @endif nav-link fs-5 me-md-2 " href="{{ route('register') }}">{{__('ui.Registrati')}}</a>
                    </li>
                @endguest

                @auth

                    <li class="nav-item ms-auto ms-md-0 dropdown-center ms-2">
                        <a class=' @if (Route::currentRouteName() == 'homepage') navElement col-bg-text @else col-b-text @endif nav-link dropdown-toggle active fs-5' href=""role='buttom'
                        data-bs-toggle='dropdown' aria-expamded='false'>{{__('ui.Ciao')}} {{ Auth::user()->name }} @if(\App\Models\Ad::toBeRevisedCount() > 0)
                        <span class= "text-white rounded-pill bg-danger fw-bold px-1">!</span>
                        @endif</a>
                        

                        <ul class="dropdown-menu dropdown-menu-end">
                            @if (Auth::user()->is_revisor)
                                <li class="ms-3">
                                    <a class="nav-item ms-auto ms-md-0 text-decoration-none col-b-text fw-semibold"
                                        href="{{ route('revisor.index') }}">{{__('ui.Zona revisore')}}
                                        <span class=" text-white rounded-pill bg-danger px-2 fw-bold">
                                            {{ \App\Models\Ad::toBeRevisedCount() }} </span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            @endif

                            <li class="nav-item ms-auto ms-md-0 py-1">
                                <form action="{{ route('logout') }}" method="POST" class="">
                                    @csrf
                                    <button class="btn btn-danger mx-auto d-block fw-semibold px-4">Logout</button>
                                </form>
                            </li>

                        </ul>
                    </li>

                @endauth

                <li class="nav-item dropdown ms-2 text-end text-md-start">
                    <a class="navElement col-bg-text nav-link dropdown-toggle active fs-5 p-0" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- Mostra direttamente la bandiera della lingua corrente tramite x-_locale -->
                        @if (app()->getLocale() == 'it')
                            <x-_locale lang="it" />
                        @elseif (app()->getLocale() == 'en')
                            <x-_locale lang="en" />
                        @elseif (app()->getLocale() == 'es')
                            <x-_locale lang="es" />
                        @endif
                    </a>
                    <ul class="dropdown-menu pos-drop" aria-labelledby="languageDropdown" style="max-width: 150px;">
                        <li>
                            <form id="lang-en" action="{{ route('setLocale', ['lang' => 'it']) }}" method="POST">
                                @csrf
                                <a class="dropdown-item">
                                    <x-_locale lang="it" />Italiano
                                </a>
                            </form>
                        </li>
                        <li>
                            <form id="lang-en" action="{{ route('setLocale', ['lang' => 'en']) }}" method="POST"">
                                @csrf
                                <a class="dropdown-item">
                                    <x-_locale lang="en" />English
                                </a>
                            </form>
                        </li>
                        <li>
                            <form id="lang-en" action="{{ route('setLocale', ['lang' => 'es']) }}" method="POST">
                                @csrf
                                <a class="dropdown-item">
                                    <x-_locale lang="es" />Español
                                </a>
                            </form>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
