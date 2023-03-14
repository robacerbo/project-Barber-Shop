<x-layout>

  {{--   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}

    <div class="container-fluid p-0 bg-img-contatti">
        <div class="container-fluid pt-5">
            <div class="row justify-content-end align-items-center py-5">
                <div class="col-12 colOnlyAcademy m-0 p-0 popoutin">
                    <h1 id="OnlyMy" class="display-3 text-center bg-dark m tx-s ff-m">Registrati
                    </h1>
                </div>
            </div>
            <div class="row h-50 justify-content-center align-items-center">
                <div id="ColRegister" class="col-12 col-md-6 mb-5 h-100">
                    <form id="registerForm" class="contactFormAni border h-100 p-3 shadow" method="POST" action="{{route('register')}}">
                        @csrf
                        <div class="mb-3 px-5 text-center hidden-left">
                            <label class="form-label ff-m lead tx-m" for="name">Nome completo</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="name" placeholder="Inserisci il tuo nome" data-sb-validations="required, name"/>
                            <div class="invalid-feedback bg-alert" data-sb-feedback="nameAddress:required">Email è obbligatoria, inserisci una mail valida.</div>
                            
                            {{-- CON QUESTO METODO INVECE CREIAMO L'ALERT IN UN NUOVO DIV --}}
                            
                            {{-- @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror --}}
                            
                        </div>
                        
                        <!-- Email address input -->
                        <div class="mb-3 px-5 text-center hidden-left">
                            <label class="form-label ff-m lead tx-m" for="email">Indirizzo Email</label>
                            <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" placeholder="Inserisci la tua mail" data-sb-validations="required, email"/>
                            <div class="invalid-feedback bg-alert" data-sb-feedback="emailAddress:required">Email è obbligatoria, inserisci una mail valida.</div>
                            
                            {{-- CON QUESTO METODO INVECE CREIAMO L'ALERT IN UN NUOVO DIV --}}
                            
                            {{-- @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror --}}
                            
                        </div>
                        
                        <!-- Password input -->
                        <div class="mb-3 px-5 text-center hidden-left">
                            <label class="form-label ff-m lead tx-m" for="password">Password</label>
                            <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password" placeholder="Inserisci la tua password" data-sb-validations="required, password"/>
                            <div class="invalid-feedback bg-alert" data-sb-feedback="passwordAddress:required">Password è obbligatoria, inserisci una password valida.</div>
                            
                            {{-- CON QUESTO METODO INVECE CREIAMO L'ALERT IN UN NUOVO DIV --}}
                            
                            {{-- @error('message')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror --}}
                            
                        </div>
                        <div class="mb-3 px-5 text-center hidden-left">
                            <label class="form-label ff-m tx-m" for="password_confirmation">Conferma la password</label>
                            <input class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" type="password" placeholder="Conferma la tua password" data-sb-validations="required, password_confirmation" for="password_confirmation"/>
                            <div class="invalid-feedback bg-alert" data-sb-feedback="password_confirmationAddress:required">password_confirmation è obbligatoria, inserisci una password_confirmation valida.</div>
                            
                            {{-- CON QUESTO METODO INVECE CREIAMO L'ALERT IN UN NUOVO DIV --}}
                            
                            {{-- @error('message')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror --}}
                            
                        </div>
                        
                        
                        
                        <!-- Form submit button -->
                        <div class="d-grid gap-2 col-12 mx-auto my-md-auto py-3 mx-md-auto hidden-top py-md-3">
                            <button class="btn btn-light btn-lg rounded-0 btnRichiesta tx-s fw-bold text-center mx-auto ">Registrati</button>
                            <a href="/" class="btn btn-light btn-md rounded-0  tx-s fw-bold text-center mx-auto ">Torna Indietro</a>
                        </div>
                        
                        
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</x-layout>