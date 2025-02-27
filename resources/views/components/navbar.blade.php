<nav class="navbar navbar-expand-lg col-bg border-bottom shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}"><img class="cst-dim" src="{{ asset('img/Logo.png') }}" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active fs-5" aria-current="page" href="{{ route('ad.index') }}">Tutti gli articoli</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link active fs-5" href="{{ route('create.ad') }}">Crea un annuncio</a>
                    </li>
                @endauth
                <li class="nav-item dropdown">
                    <a class='nav-link dropdown-toggle active fs-5 ' href=""role='buttom' data-bs-toggle='dropdown'
                        aria-expamded='false'>
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
                

                <form class="d-flex ms-auto" role="search" action="{{ route('ad.search') }}" method="GET">
                    <div class="input-group">
                        <input type="search" name="query" class="form-control" placeholder="Cerca..."
                            aria-label="Search">
                        <button type="submit" class="btn btn-outline-success input-group-text" id="basic-addon2">
                            Cerca
                        </button>
                    </div>
                </form>

                @guest
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="{{ route('login') }}">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fs-5 me-2" href="{{ route('register') }}">Registrati</a>
                    </li>
                @endguest

                @auth

                    <li class="nav-item dropdown-center ms-2">
                        <a class='nav-link dropdown-toggle active fs-5' href=""role='buttom' data-bs-toggle='dropdown'
                            aria-expamded='false'>Ciao {{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-end">

                            @if (Auth::user()->is_revisor)
                                <li class="">
                                    <a class="nav-item text-decoration-none  position-relative w-sm-25"
                                        href="{{ route('revisor.index') }}">Zona revisore
                                        <span class=" text-white rounded-pill bg-danger px-2">  {{ \App\Models\Ad::toBeRevisedCount() }}  </span>
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                            @endif
                            
                            <li class="nav-item py-1">
                                <form action="{{ route('logout') }}" method="POST" class="">
                                    @csrf
                                    <button class="btn btn-danger mx-auto d-block fw-semibold px-4">Logout</button>
                                </form>
                            </li>

                        </ul>
                    </li>

                    {{-- <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                      Seleziona
                    </button>
                    class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-danger"
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <li><a class="dropdown-item" href="#">Opzione 1</a></li>
                      <li><a class="dropdown-item" href="#">Opzione 2</a></li>
                      <li><a class="dropdown-item" href="#">Opzione 3</a></li>
                    </ul>
                  </div> --}}


                @endauth
                
            </ul>

            {{-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
        </div>
    </div>
</nav>
