<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <h2 class="text-center display-4">Digimon:</h2>
            @forelse ($digidex as $digimon)
            <div class="col-12 col-md-4">
                <x-card :digimon="$digimon "/>
            </div>
            @empty
            <div class="col-12 d-flex justify-content-center">
                <h2 class="text-center">Non ci sono Digimon qui</h2>
            </div>
            @endforelse
        </div>
</x-layout>
