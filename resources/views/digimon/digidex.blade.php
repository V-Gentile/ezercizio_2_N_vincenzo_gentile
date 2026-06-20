<x-layout>
    <x-nav>
    </x-nav>
    <div class="container-fluid my-5">
        <div class="row justify-content-center g-4">
            
            <h2 class="text-center display-4 mb-4">Il tuo DigiDex:</h2>

            @forelse ($digidex as $digimon)
                <div class="col-12 col-sm-6 col-md-3">
                    <x-card :digimon="$digimon" />
                </div>
            @empty
                <div class="col-12 d-flex justify-content-center mt-5">
                    <h3 class="text-muted text-center">Nessun Digimon ancora inserito nel DigiDex.</h3>
                </div>
            @endforelse

        </div>
    </div>
</x-layout>
