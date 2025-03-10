<nav class="navbar navbar-expand-lg">
    <div class="container-fluid navbar">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand navbar-expand-lg" href="/"> <img src="/image/racecarsale_logo_element.jpg"
                class="logo" alt="logo"> </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('car.index') }}">Auto in Vendita</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Vendi
                    </a>
                    <ul class="dropdown-menu" data-bs-popper="static">
                        <li><a class="dropdown-item" href="{{ route('car.create') }}">Auto</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Componenti</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Area Personale
                    </a>
                    <ul class="dropdown-menu" data-bs-popper="static">
                        @guest
                            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                            <hr class="dropdown-divider">
                        @endguest
                        <li>
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}">Esci</a>
                        </li>
                    </ul>
                </li>
                <a class="nav-link">Ciao {{ Auth::use()->name }},
                </a>

            </ul>

            <form class="d-flex" role="search">
                <div class="input-group">
                    <span class="input-group-text"><img src="/icon/search-interface-symbol.png" class="icon"></span>
                    <div class="col-sm-10 col-md-8"><input class="form-control me-2" type="search"
                            placeholder="Cerca nel sito..." aria-label="Search"></div>
                </div>
                <button class="btn btn-outline-success btnSearch" type="submit"> Cerca</button>
            </form>

        </div>

    </div>
</nav>
