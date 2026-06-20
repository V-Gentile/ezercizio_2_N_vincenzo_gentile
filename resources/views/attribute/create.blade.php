<x-layout>
    <div class="container my-5 d-flex justify-content-center">
        <div class="col-12 col-md-5 text-center">
            
            <h2 class="fw-bold mb-4 digi-title">Nuovo Attributo</h2>

            <div class="p-4 shadow digi-card text-start">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                    @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                    @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('attribute.submit') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="attribute" class="form-label fw-bold" style="color: #FF991A;">Inserisci Attributo</label>
                        <input type="text" id="attribute" name="name" class="form-control" 
                               placeholder="Es. Vaccine"
                               style="background-color: rgba(255, 255, 255, 0.1); color: #FFFCFE; border: 1px solid #FF991A;" 
                               required>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn fw-bold px-4" style="background-color: #FF991A; color: #2D65B0;">
                            Crea
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</x-layout>
