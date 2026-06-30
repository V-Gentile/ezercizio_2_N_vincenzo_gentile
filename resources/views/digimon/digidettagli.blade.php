<x-layout>
    <div class="container py-5 min-vh-100 d-flex align-items-center">
        <div class="row justify-content-center align-items-center w-100">
            
            <div class="col-12 col-md-5 text-center mb-5 mb-md-0">
                <h1 class="display-3 fw-bold text-uppercase digi-title mb-4">
                    {{ $digimon->name }}
                </h1>
                
                <div class="mb-4">
                    <span class="badge text-dark fw-bold fs-5 px-3 py-2 text-capitalize" style="background-color: #FF991A;">
                        Livello: {{ $digimon->level }}
                    </span>
                    <span class="badge bg-white text-dark fs-5 px-3 py-2 text-capitalize ms-2">
                        Tipo: {{ $digimon->type }}
                    </span>
                    
                    
                        @forelse ($digimon->categories as $category)
                        <span class="badge bg-success text-dark fs-5 px-3 py-2 text-capitalize ms-2">
                            {{ $category->name }}
                        </span>
                            @empty
                        @endforelse
                    </span>
                </div>

                <a href="{{ route('digimon.list') }}" class="btn btn-outline-light fw-bold px-4 mt-2">
                    ← Torna al DigiDex
                </a>
            </div>

            <div class="col-12 col-md-5 d-flex justify-content-center">
                <div class="bg-white border border-4 rounded-4 p-3 shadow-lg" style="border-color: #FF991A !important; max-width: 400px; width: 100%;">
                    @if($digimon->img)
                        <img src="{{ Storage::url($digimon->img) }}" alt="{{ $digimon->name }}" class="img-fluid rounded-3" style="max-height: 400px; object-fit: contain; width: 100%;">
                    @else
                        <img src="https://placeholder.pics/svg/400x400/DEDEDE/555555/No%20Image" alt="Nessuna immagine" class="img-fluid rounded-3">
                    @endif
                </div>
            </div>

        </div>
    </div>
</x-layout>
