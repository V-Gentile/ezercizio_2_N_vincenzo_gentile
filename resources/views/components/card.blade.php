<div class="card h-100 shadow-sm" style="background-color: #2D65B0; border: 3px solid #FF991A; color: #ffffff;">
    
    <div style="background-color: #ffffff; height: 220px; display: flex; justify-content: center; align-items: center; padding: 10px;">
        @if($digimon->img)
            <img src="{{ asset('storage/' . $digimon->img) }}" class="card-img-top" alt="{{ $digimon->name }}" style="max-height: 100%; max-width: 100%; object-fit: contain;">
        @else
            <img src="https://placeholder.pics/svg/300x220/DEDEDE/555555/No%20Image" class="card-img-top" alt="Nessuna immagine disponibile" style="max-height: 100%; max-width: 100%; object-fit: contain;">
        @endif
    </div>

    <div class="card-body d-flex flex-column">
        
        <h4 class="card-title fw-bold text-capitalize mb-1" style="color: #FF991A;">
            {{ $digimon->name }}
        </h4>
        <p class="small mb-3" style="color: #d1e0f5;">ID: #{{ $digimon->id }}</p>

        <ul class="list-unstyled mb-4">
            <li class="mb-2">
                <strong>Livello:</strong> 
                <span class="badge text-dark fw-bold text-capitalize" style="background-color: #FF991A;">{{ $digimon->level }}</span>
            </li>
            <li class="mb-2">
                <strong>Tipo:</strong> 
                <span class="badge bg-white text-dark text-capitalize">{{ $digimon->type }}</span>
            </li>
            <li class="mb-2">
                <strong>Categoria:</strong>
                <span class="badge bg-success text-dark text-capitalize">
                    @forelse ($digimon->categories as $category)
                        @if (!$loop->last)
                            <a href="{{route('category.show', compact('category'))}}" class="card-text small text-capitalize mx-1">{{ $category->name }}, </a>
                        @else
                            <a href="{{route('category.show', compact('category'))}}" class="card-text small text-capitalize mx-1">{{ $category->name }} </a>
                        @endif
                    @empty
                    @endforelse
                </span>
            </li>
            <li class="small mt-2" style="color: #d1e0f5;">
                <strong>Caricato da:</strong> <span class="text-capitalize">{{ $digimon->user?->name ?? 'Sconosciuto' }}</span>
            </li>
        </ul>

        <div class="mt-auto pt-3 d-flex justify-content-between gap-1" style="border-top: 1px solid rgba(255, 255, 255, 0.2);">
            
            <a href="{{ route('digimon.show', ['digimon' => $digimon]) }}" class="btn btn-sm fw-bold px-3 text-white" style="background-color: #FF991A; border: 1px solid #FF991A;">
                Info
            </a>

            <a href="{{ route('digimon.edit', ['digimon' => $digimon]) }}" class="btn btn-sm btn-light fw-bold text-dark px-2">
                Modifica
            </a>

            <form action="{{ route('digimon.delete', ['digimon' => $digimon]) }}" method="POST" class="d-inline" onsubmit="return confirm('Sei sicuro di voler eliminare questo Digimon?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger fw-bold">
                Elimina
                </button>
            </form>
            
        </div>
    </div>
</div>
