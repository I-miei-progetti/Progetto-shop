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
                
            </ul>

            <div class="d-flex gap-4 mx-2">
                <div class="search-bar d-flex gap-4">
                    <div class="input-group input-groupsh px-1">
                    
                        <span class="icon-container"><img src="/icon/search-interface-symbol.png" class="icon"></span>
    
                        <div class="input-container"><input class="search-input" type="search" placeholder="Cerca nel sito..." aria-label="Search"></div>
    
                    </div>
    
                    <button class="btn btn-outline-success btnSearch" type="submit"> Cerca</button>
                </div>
                <div class="d-flex align-items-center gap-4 me-4">
                    @guest {{--inserisco qui il @guest così che quando mi collego o mi registro scompare il dropdown per accedere e registrarsi--}}
                <div class="nav-item dropstart">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start mt-4" data-bs-popper="static">
                        {{-- @guest => Usato per nascondere alla vista ciò che c'è sotto quando ci si collega ma a me non piace--}}
                            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('review.index') }}">Recensioni</a></li>
                            
                        {{-- @endguest --}}
                        <li>
                            
                        </li>
                    </ul>
                </div>
                @endguest 
                @auth
                    <a class="nav-link">Ciao, {{ Auth::user()->name }}</a>
                    {{-- inserisco qui il bottone che avrei dovuto mettere all'interno del dropdown-menu qui sopra --}}
                    <form action="{{route ('logout')}}" method="post" class="">
                        @csrf
                        <button class="btn btn-outline-success btnSearch" type="submit"> Esci</button>
                       
                    </form>
                @endauth
                </div>

                
            </div>

        </div>

    </div>
</nav>
