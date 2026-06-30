<x-layout>
    <div class="container-fluid">
        <div class="row">
            <h2 class="display-4 py-5"> Digimon della Categoria <span>{{ $category->name }}</span></h2>           
        </div>
        <div class="row justify-content-center">
            @forelse ($category->digimons as $digimon )
                <div class="col-12 col-md-3 d-flex justify-content-center">
                    <x-card :digimon="$digimon" />
                </div>
            @empty
                <div class="col-11 col-md-8">
                    <h4 class="text-center">
                        Nessun digimon con questa categoria
                    </h4>
                    <a href="{{route('digimon.crea')}}" class="btn btn-warning"> Crealo tu</a>
                </div>
            @endforelse
        </div>
    </div>   
</x-layout>
