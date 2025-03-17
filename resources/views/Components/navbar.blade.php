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
                @guest {{--inserisco qui il @guest così che quando mi collego o mi registro scompare il dropdown per accedere e registrarsi--}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Area Personale
                    </a>
                    <ul class="dropdown-menu" data-bs-popper="static">
                        {{-- @guest => Usato per nascondere alla vista ciò che c'è sotto quando ci si collega ma a me non piace--}}
                            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                            
                        {{-- @endguest --}}
                        <li>
                            
                        </li>
                    </ul>
                </li>
                @endguest 
                @auth
                    <a class="nav-link">Ciao, {{ Auth::user()->name }}</a>
                    {{-- inserisco qui il bottone che avrei dovuto mettere all'interno del dropdown-menu qui sopra --}}
                    <form action="{{route ('logout')}}" method="post" class="">
                        @csrf
                        <button class="btn btn-outline-success btnSearch" type="submit"> Esci</button>
                       
                    </form>
                @endauth
            </ul>

            <div class="search-bar d-flex gap-4 mx-2">

                <div class="input-group input-groupsh px-1">
                    
                    <span class="icon-container"><img src="/icon/search-interface-symbol.png" class="icon"></span>

                    <div class="input-container"><input class="search-input" type="search" placeholder="Cerca nel sito..." aria-label="Search"></div>

                </div>

                <button class="btn btn-outline-success btnSearch" type="submit"> Cerca</button>
            </div>

        </div>

    </div>
</nav>
