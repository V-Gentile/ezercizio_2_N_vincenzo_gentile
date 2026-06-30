<x-layout>
    <header>
        <div class="container-fluid header mt-5">
            <div class="row h-100 justify-content-center text-center">
                
                <div class="col-12 col-md-8">
                    
                    <h1 class="digi-title text-uppercase">
                        {{ $user['name'] }} {{ $user['surname'] }}
                    </h1>
                    
                    <h3 class="mt-3">
                        Compagno Digimon: <span class="card-link">{{ $user['digimon'] }}</span>
                    </h3>
                    
                </div>
                
            </div>
        </div>
    </header>
</x-layout>
