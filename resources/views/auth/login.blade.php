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
                    <h1 id="OnlyMy" class="display-3 text-center bg-dark m tx-s ff-m">Accedi alla tua Area Personale
                    </h1>
                </div>
            </div>
            <div class="row h-50 justify-content-center align-items-center">
                <div id="ColRegister" class="col-12 col-md-6 mb-5 h-100">
                    <form id="registerForm" class="contactFormAni border h-100 p-3 shadow" method="POST" action="{{route('login')}}">
                        @csrf
                                                
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
                        <div class="form-check form-switch d-flex justify-content-center hidden">
                            <input class="form-check-input" type="checkbox" role="switch" id="remember" name="remember" checked>
                            <label class="form-check-label tx-m px-3" for="remember">Ricordami</label>
                        </div>
                        
                        
                        
                        <!-- Form submit button -->
                        <div class="d-grid gap-2 col-12 mx-auto my-md-auto py-3 mx-md-auto hidden-top py-md-3">
                            <button class="btn btn-light btn-lg rounded-0 btnRichiesta tx-s fw-bold text-center mx-auto ">Accedi</button>
                            <a href="/" class="btn btn-light btn-md rounded-0  tx-s fw-bold text-center mx-auto ">Torna Indietro</a>
                        </div>
                        
                        
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</x-layout>