<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8"> 

                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}" class="mt-4">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}">
                        <div id="emailHelp" class="form-text">Non condivideremo mai la tua email con nessuno.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="ConfermaPassword" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" id="ConfermaPassword" name="password_confirmation">
                    </div>                    
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>

            </div>
        </div>
    </div>    
</x-layout>
