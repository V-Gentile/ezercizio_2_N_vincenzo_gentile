<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('media/logo agumon.png') }}" alt="Logo Digimon" width="50" height="50">
        </a>
            
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipale">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuPrincipale">
            <ul class="navbar-nav ms-auto"> 
                <li class="nav-item">
                    <a class="nav-link fs-5 active" aria-current="page" href="/">Home</a>
                </li>
                    @auth
                <li class="nav-item">
                    <a class="nav-link text-capitalize" href="{{ route('user.profile') }}">
                        Profilo ({{ auth()->user()->name }})
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{ route('logout') }}" 
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none;">
                        @csrf
                    </form>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{ route('register') }}">Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{ route('login') }}">Login</a>
                </li>
            
                @endauth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Altro
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/digidex">DigiDex</a></li>
                        <li><a class="dropdown-item" href="/digimon/crea">Crea Digimon</a></li>
                        <li><a class="dropdown-item" href="/category/create">Aggiungi Categoria</a></li>
                        <li><a class="dropdown-item" href="/category/index">Lista Categorie</a></li>
                        <li><a class="dropdown-item" href="/chi-siamo">Chi siamo</a></li>
                        <li><a class="dropdown-item" href="/servizi">Servizi</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
