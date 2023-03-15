<x-layout>
 <!-- Wrapper container -->
 <div class="container-fluid vh-100 vw-100 m-0 p-0 bg-img-contatti">
    <div class="container-fluid vh-100 d-flex">
        <div class="row h-100 w-100 align-items-center justify-content-center">
            <div class="col-12 align-items-center justify-content-center">
                <h1 class="display-3 text-center tx-m align items center justify-content-center hidden ff-m ">
                    Contatta i nostri<br>Stylist
                </h1>
                <div id="contChevron" class="container-chevron d-flex justify-content-center align-items-center mx-auto">
                    <div class="chevron"></div>
                    <div class="chevron"></div>
                    <div class="chevron"></div>
                </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div id="contForm" class="container-fluid py-5 h-100 myContForm">
    <div class="row justify-content-center h-100 px-3">
        
        <div id="ColForm" class="col-12 col-md-6 py-5">
            <h1 class="text-center tx-s myRichiesta hidden">Scrivi la tua richiesta</h1>
             

  <!-- Bootstrap 5 starter form -->
            <form id="contactForm" class="w-100 contactFormAni border" method="POST" action="{{route('contact_us_submit')}}">
                @csrf
            <!-- Name input -->
                <div class="mb-3 px-5 text-center hidden-left">
                    <label class="form-label ff-m lead tx-t" for="name">Nome e Cognome</label>
                    <input class="form-control ff-m lead @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="Inserisci il tuo nome" data-sb-validations="required" value="{{ old('name') }}" />
                    <div class="invalid-feedback bg-alert" data-sb-feedback="name:required">Nome è obbligatorio.</div>

                    {{-- CON QUESTO METODO INVECE CREIAMO L'ALERT IN UN NUOVO DIV --}}

                    {{-- @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror --}}

                </div>

            <!-- Email address input -->
                <div class="mb-3 px-5 text-center hidden-left">
                    <label class="form-label ff-m lead tx-t" for="email">Indirizzo Email</label>
                    <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" placeholder="Inserisci la tua mail" data-sb-validations="required, email" value="{{ old('email') }}" />
                    <div class="invalid-feedback bg-alert" data-sb-feedback="emailAddress:required">Email è obbligatoria, inserisci una mail valida.</div>

                    {{-- CON QUESTO METODO INVECE CREIAMO L'ALERT IN UN NUOVO DIV --}}

                    {{-- @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror --}}

                </div>

    <!-- Message input -->
                <div class="mb-3 px-5 text-center hidden-left">
                    <label class="form-label ff-m lead tx-t" for="message">Lascia il tuo messaggio</label>
                    <textarea class="form-control  @error('message') is-invalid @enderror" id="message" name="message" type="text" placeholder="Scrivi il tuo messaggio qui" style="height: 10rem;" data-sb-validations="required" value="{{ old('message') }}"></textarea>
                    <div class="invalid-feedback bg-alert" data-sb-feedback="message:required">Hai dimenticato di inserire il messaggio.</div>

                    {{-- CON QUESTO METODO INVECE CREIAMO L'ALERT IN UN NUOVO DIV --}}

                    {{-- @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror --}}

                </div>

    <!-- Form submissions success message -->
                {{-- <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3 ff-m lead tx-s">Hai inviato correttamente la tua richiesta!</div>
                </div> --}}

    <!-- Form submissions error message -->
                {{-- <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3 ff-m lead">Errore nell'invio della richiesta, riprova.</div>
                </div> --}}

    <!-- Form submit button -->
                <div class="d-grid gap-2 col-6 mt-5 d-flex m-auto mx-md-auto  hidden-top py-3">
                    <button class="btn btn-light btn-lg rounded-0 btnRichiesta tx-s fw-bold text-center m-auto">Invia la tua Richiesta</button>
                </div>

            </form>
        </div>
        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center order-md-first py-3">
            <img id="imgContatta" src="/media/barber_pole.gif" class="img-fluid myImgContatta hidden-left" alt="">
        </div>
    </div>
</div>













</x-layout>