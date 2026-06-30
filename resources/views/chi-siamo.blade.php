<x-layout>
    <header>
        <div class="container mt-5 text-center">
            
            <h1 class="digi-title mb-4 text-uppercase">Digiprescelti</h1>

            <img src="{{ asset('media/digiprescelti.png') }}" alt="I Digiprescelti e i loro Digimon" class="img-fluid hero-image mb-4">

            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <p class="lead">
                        Siamo i bambini prescelti, chiamati a proteggere l'equilibrio tra il mondo reale e Digiworld! 
                        Insieme ai nostri fedeli compagni Digimon, esploriamo territori sconosciuti, affrontiamo forze oscure e 
                        impariamo il vero valore dell'amicizia e del coraggio.
                    </p>
                </div>
            </div>
            
        </div>
    </header>

    <section>
        <div class="container mt-4"> 
            <div class="row g-4">

                @foreach ($users as $user)

                    <div class="col-12 col-md-6">

                        <div class="card digi-card h-100 p-3">
                            <div class="card-body text-center">
                                <h5 class="card-title digi-title mt-3">{{ $user['name'] . " " . $user['surname'] }}</h5>
                                <p class="card-text">Il fido compagno di {{ $user['digimon'] }}</p>
                                <a href="{{route('chisiamodettagli', ['name'=>$user['name']] )}}" class="card-link">Scopri di più</a>
                            </div>
                        </div>

                    </div>

                @endforeach 

            </div>
        </div>
    </section>

</x-layout>
