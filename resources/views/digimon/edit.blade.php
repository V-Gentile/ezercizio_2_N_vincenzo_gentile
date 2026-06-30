<x-layout>
    <div class="container-fluid">
        <div class="row">
            <h3>Modifica il Digimon: {{ $digimon->name }}</h3>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-6">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    <form method="post" action="{{ route('digimon.update', $digimon) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome:</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $digimon->name) }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="level" class="form-label">Livello:</label>
                        <input type="text" name="level" class="form-control" id="level" value="{{ old('level', $digimon->level) }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo:</label>
                        <input type="text" name="type" class="form-control" id="type" value="{{ old('type', $digimon->type) }}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="img" class="form-label">Immagine del Digimon (Lascia vuoto per non cambiarla):</label>
                        <input type="file" name="img" class="form-control" id="img">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Salva Modifiche</button>
                </form>
            </div>    
        </div>        
    </div>
</x-layout>
