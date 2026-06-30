<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center pt-5">
            <h2 class="display-4 text-center py-5">
                Tutte le categorie
            </h2>
            @foreach ($category as $category)
                <div class="col-12 col-md-3 d-flex justify-content-center">
                    <a href="{{ route('category.show', compact('category')) }}" class="h-100 w-100">
                        <div class="box mx-auto d-flex justify-content-center align-items-center">
                            <h3 class="text-white text-color text-capitalize">{{ $category->name }}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
