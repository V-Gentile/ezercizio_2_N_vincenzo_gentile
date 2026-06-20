<x-layout>
    <x-nav></x-nav>
    <div class="container-fluid my-5">
        <div class="row justify-content-center g-4">
            
            <h2 class="text-center display-4 mb-4" style="color: #FF991A;">
                Digimon con attributo: <span class="text-white text-capitalize">{{ $attribute->name }}</span>
            </h2>

            @forelse ($attribute->digimons as $digimon)
                <div class="col-12 col-sm-6 col-md-3">
                    <x-card :digimon="$digimon" />
                </div>
            @empty
                <div class="col-12 d-flex justify-content-center mt-5">
                    <h3 class="text-muted text-center">Nessun Digimon associato a questo attributo.</h3>
                </div>
            @endforelse

        </div>
        
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="{{ route('attribute.index') }}" class="btn btn-outline-light">Torna alla lista attributi</a>
            </div>
        </div>
    </div>
</x-layout>
