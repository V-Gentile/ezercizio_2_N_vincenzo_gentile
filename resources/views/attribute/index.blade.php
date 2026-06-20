<x-layout>
    <x-nav></x-nav>
    <div class="container my-5 d-flex justify-content-center">
        <div class="col-12 col-md-6 text-center">
            
            <h2 class="fw-bold mb-4 digi-title">Lista Attributi</h2>

            <div class="p-4 shadow digi-card text-start">
                
                @if($attributes->isEmpty())
                    <p class="text-center my-3" style="color: #FFFCFE; opacity: 0.7;">
                        Nessun attributo inserito nel database. 
                    </p>
                @else
                    <ul class="list-group list-group-flush m-0 p-0">
                        @foreach($attributes as $attribute)
                            <li class="list-group-item bg-transparent py-3 fs-5" style="border-bottom: 1px solid rgba(255, 153, 26, 0.3);">
                                <a href="{{ route('attribute.show', ['attribute' => $attribute]) }}" class="text-decoration-none text-capitalize fw-bold" style="color: #FF991A;">
                                    {{ $attribute->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif

            </div>

            <div class="mt-4">
                <a href="{{ route('attribute.create') }}" class="card-link fs-5">
                    + Aggiungi un altro Attributo
                </a>
            </div>

        </div>
    </div>
</x-layout>
