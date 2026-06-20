<nav class="navbar navbar-expand-lg custom-navbar shadow-sm">
    <div class="container">
        
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('media/logo agumon.png') }}" alt="Logo Agumon" style="height: 45px; width: auto; image-rendering: pixelated;">
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('digimon.list') }}">DigiDex</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('digimon.crea') }}">Crea Digimon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('attribute.create') }}">Crea Attributo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('attribute.index') }}">Lista Attributi</a>
                    </li>
                @endauth
            </ul>

            <ul class="navbar-nav ms-auto align-items-lg-center">
                
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Accedi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                    </li>
                @endguest

                @auth
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" href="{{ route('user.profile') }}">
                            Profilo ({{ auth()->user()->name }})
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline m-0 p-0">
                            @csrf
                            <button type="submit" class="btn nav-link border-0 bg-transparent p-lg-0 ms-lg-3" style="font-weight: bold; font-size: 1.25rem; color: #2D65B0;">
                                Logout
                            </button>
                        </form>
                    </li>
                @endauth

            </ul>
        </div>

    </div>
</nav>
