<nav @if (Route::currentRouteName() == 'homepage') id="navbar" @endif class="navbar navbar-expand-lg @if (Route::currentRouteName() == 'homepage') nav-trans @else col-bg @endif fixed-top">
    <div class="container-fluid">
        {{-- logo --}}
        <a href="{{ route('homepage') }}"><img class="cst-dim" src="{{ asset('img/Logo.png') }}" alt="Logo"></a>
        {{-- campo ricerca mobile --}}
        <div class="d-md-none">
            <form class="pt-1 d-flex" role="search" action="{{ route('ad.search') }}" method="GET">
                <input id="cercaInput" type="search" class="@if (Route::currentRouteName() == 'homepage') search-border-home @else search-border-all @endif col-t" name="query" placeholder="Cerca..."  aria-label="Search">
                <button type="submit" id="basic-addon2" class="border-0 col-t">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search col-b-text" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                </button>
        </form>
            {{-- <form class="d-flex ms-auto me-sm-auto" role="search" action="{{ route('ad.search') }}" method="GET">
                <div class="input-group">
                    <input type="search" name="query" class="form-control" placeholder="Cerca..."
                        aria-label="Search">
                    <button type="submit" class="btn-search input-group-text" id="basic-addon2">
                        Cerca
                    </button>
                </div>
            </form> --}}
        </div>
        {{-- bottone apertura navbar mobile --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="@if (Route::currentRouteName() == 'homepage') navElement col-bg-text @endif nav-link active fs-5" aria-current="page" href="{{ route('ad.index') }}">Tutti gli
                        articoli</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="@if (Route::currentRouteName() == 'homepage') navElement col-bg-text @endif nav-link active fs-5" href="{{ route('create.ad') }}">Crea un annuncio</a>
                    </li>
                @endauth
                <li class="nav-item dropdown">
                    <a class=" @if (Route::currentRouteName() == 'homepage') navElement col-bg-text @endif nav-link dropdown-toggle active fs-5" href=""role='buttom'
                        data-bs-toggle='dropdown' aria-expamded='false'>
                        Categorie
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



            <ul class="navbar-nav mb-2 mb-lg-0">

                <li class="pt-1">
                <form class="pt-1 d-flex" role="search" action="{{ route('ad.search') }}" method="GET">
                        <input type="search" class="@if (Route::currentRouteName() == 'homepage') search-border-home @else search-border-all @endif col-t " name="query" placeholder="Cerca..."aria-label="Search">
                        <button type="submit" id="basic-addon2" class="border-0 col-t col-bg-text">
                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="25" height="25" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                            </svg>
                        </button>
                </form>
                </li>

                @guest
                    <li class="nav-item">
                        <a class=" @if (Route::currentRouteName() == 'homepage') navElement col-bg-text @endif nav-link fs-5" href="{{ route('login') }}">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class=" @if (Route::currentRouteName() == 'homepage') navElement col-bg-text @endif nav-link fs-5 me-2" href="{{ route('register') }}">Registrati</a>
                    </li>
                @endguest

                @auth

                    <li class="nav-item dropdown-center ms-2">
                        <a class=' @if (Route::currentRouteName() == 'homepage') navElement col-bg-text @endif nav-link dropdown-toggle active fs-5' href=""role='buttom'
                        data-bs-toggle='dropdown' aria-expamded='false'>Ciao {{ Auth::user()->name }} @if(\App\Models\Ad::toBeRevisedCount() > 0)
                        <span class= "text-white rounded-pill bg-danger fw-bold px-1">!</span>
                        @endif</a>
                        

                        <ul class="dropdown-menu dropdown-menu-end">
                            @if (Auth::user()->is_revisor)
                                <li class="ms-3">
                                    <a class="nav-item text-decoration-none col-b-text fw-semibold"
                                        href="{{ route('revisor.index') }}">Zona revisore
                                        <span class=" text-white rounded-pill bg-danger px-2 fw-bold">
                                            {{ \App\Models\Ad::toBeRevisedCount() }} </span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            @endif

                            <li class="nav-item py-1">
                                <form action="{{ route('logout') }}" method="POST" class="">
                                    @csrf
                                    <button class="btn btn-danger mx-auto d-block fw-semibold px-4">Logout</button>
                                </form>
                            </li>

                        </ul>
                    </li>

                @endauth

                <li class="nav-item dropdown ms-2">
                    <a class="navElement col-bg-text nav-link dropdown-toggle active fs-5" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- Mostra direttamente la bandiera della lingua corrente tramite x-_locale -->
                        @if (app()->getLocale() == 'it')
                            <x-_locale lang="it" />
                        @elseif (app()->getLocale() == 'en')
                            <x-_locale lang="en" />
                        @elseif (app()->getLocale() == 'es')
                            <x-_locale lang="es" />
                        @endif
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown" style="max-width: 150px;">
                        <li>
                            <a class="dropdown-item" href="{{ route('setLocale', ['lang' => 'it']) }}">
                                <x-_locale lang="it" />Italiano
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('setLocale', ['lang' => 'en']) }}">
                                <x-_locale lang="en" />English
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('setLocale', ['lang' => 'es']) }}">
                                <x-_locale lang="es" />Español
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
