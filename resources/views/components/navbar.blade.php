<nav class="navbar navbar-expand-lg col-bg border-bottom shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('ad.index') }}">Tutti gli articoli</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('create.ad') }}">Crea un annuncio</a>
                    </li>
                @endauth
                <li class="nav-item dropdown">
                    <a class='nav-link dropdown-toggle active ' href=""role='buttom' data-bs-toggle='dropdown'
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
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                    </li>
                @endguest

                @auth
                    <li class="nav-item">
                        @if (Auth::user())
                            <a class="nav-link fs-5 active pe-3">Benvenuto {{ Auth::user()->name }}</a>
                        @endif
                    </li>

                    @if (Auth::user()->is_revisor)
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-success btn-sm position-relative w-sm-25"
                                href="{{ route('revisor.index') }}">Zona revisore
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{\App\Models\Ad::toBeRevisedCount()}}
                                </span>
                            </a>
                        </li>
                    @endif

                    <li class="nav-item ms-auto py-1">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-danger fw-semibold px-4">Logout</button>
                        </form>
                    </li>
                @endauth

            </ul>

            {{-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
        </div>
    </div>
</nav>
