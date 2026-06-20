<x-layout>
    <x-nav></x-nav>

    @if (session('successMessage'))
        <div class="container mt-4">
            <div class="alert text-center fw-bold border-0 shadow-sm" style="background-color: #FF991A; color: #2D65B0; font-size: 1.1rem;">
                 {{ session('successMessage') }} 
            </div>
        </div>
    @endif

    <header class="container mt-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1 class="digi-title text-uppercase mb-4">Benvenuti a Digiworld</h1>
                <p class="lead">
                    Esplora il database digitale dei Digimon, scopri i segreti della Digievoluzione and incontra i Digiprescelti che lottano per salvare entrambi i mondi!
                </p>
                <a href="{{ route('digimon.list') }}" class="btn btn-warning btn-lg fw-bold px-4 mt-3">
                    Apri il DigiDex
                </a>
            </div>
        </div>
    </header>

    {{-- 
    <hr class="container my-5 text-white opacity-25">

    <main class="container mb-5">
        <div class="text-center mb-5">
            <h2 class="digi-title text-uppercase">I Protagonisti</h2>
            <p class="text-muted">Clicca su una card per analizzare i dati di rete nel dettaglio.</p>
        </div>

        <div class="row g-4">
            @foreach($home_digimon as $item)
                
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card digi-card h-100 text-center p-3">
                        
                        <img src="{{ asset('media/' . $item->img) }}" class="card-img-top img-fluid" alt="{{ $item->mon }}" style="max-height: 180px; object-fit: contain;">
                        
                        <div class="card-body flex-column d-flex justify-content-end">
                            <h5 class="card-title digi-title mt-3">{{ $item->mon }}</h5>
                            
                            <div class="mt-2">
                                <span class="badge text-bg-primary mb-1">Tipo: {{ $item->type }}</span>
                                <br>
                                <span class="badge text-bg-success">Livello: {{ $item->level }}</span>
                            </div>

                            <div class="mt-3">
                                <a href="{{ route('digimon.dettagli', ['mon' => $item->mon]) }}" class="card-link d-block fw-bold">
                                    Scopri di più
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            @endforeach
        </div>
    </main> 
    --}}

</x-layout>
