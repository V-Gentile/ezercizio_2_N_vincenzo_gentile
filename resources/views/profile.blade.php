<x-layout>
    <x-nav></x-nav>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 mb-4">
                <h2 class="fw-bold text-capitalize digi-title">
                    Profilo di {{ auth()->user()->name }}
                </h2>
            </div>
        </div>

        <div class="row g-4">
            @forelse (auth()->user()->digimons as $digimon)
                <div class="col-12 col-md-6 col-lg-4">
                    <x-card :digimon="$digimon"/>
                </div>
            @empty
                <div class="col-12 text-center my-5 p-5 digi-card">
                    <h3 class="fw-semibold mb-3" style="color: #FFFCFE;">
                        Non hai ancora inserito nessun Digimon nel DigiDex!
                    </h3>
                    <a href="{{ route('digimon.crea') }}" class="card-link fs-5">
                        Inizia subito a crearne uno &rarr;
                    </a>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>
