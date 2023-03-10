<x-layout>
    {{-- METOTO DI ERRORI SOPRA SCHERMO --}}
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}  
    <div class="container-fluid py-5 h-100 myContCourse">
        <div class="row justify-content-center h-100 px-3 ">
            
            <div id="ColNewCourse" class="col-12 col-md-6 py-5">
                <h1 id="newCourse" class="text-center tx-t myNewCourse myNewCourseAni">Inserisci un nuovo Corso</h1>
                
                
                <!-- Bootstrap 5 starter form -->
                <form id="contactForm" class="w-100 mt-5 contactFormAni" method="POST" action="{{route('course.store')}}" enctype="multipart/form-data">
                    @csrf
                    
                    <!-- Name input -->
                    <div class="mb-3 px-5 text-center">
                        <label class="form-label ff-m lead tx-t" for="name">Nome Corso</label>
                        <input class="form-control ff-m lead " id="name" name="name" type="text" placeholder="Nome del corso" data-sb-validations="required" value="{{ old('name') }}">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Descrizione -->
                    
                    <div class="mb-3 px-5 text-center">
                        <label class="form-label ff-m lead tx-t" for="description">Descrizione</label>
                        <input class="form-control @error('title') is-invalid @enderror" id="description" name="description" type="text" placeholder="Descrizione del Corso" data-sb-validations="required, description" value="{{ old('description') }}">
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Stylist Name -->
                    <div class="mb-3 px-5 text-center">
                        <label class="form-label ff-m lead tx-t" for="stylist">Nome Stilista</label>
                        <input class="form-control @error('title') is-invalid @enderror" id="stylist" name="stylist" type="text" placeholder="Nome dello Stilista" data-sb-validations="required, stylist" value="{{ old('stylist') }}">
                        @error('stylist')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Course Level -->
                    <div class="mb-3 px-5 text-center">
                        <label class="form-label ff-m lead tx-t" for="level">Livello del Corso</label>
                        <input class="form-control @error('title') is-invalid @enderror" id="level" name="level" type="text" placeholder="Difficoltà del corso" data-sb-validations="required, level" value="{{ old('level') }}">
                        @error('level')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Price -->
                    <div class="mb-3 px-5 text-center">
                        <label class="form-label ff-m lead tx-t" for="price">Prezzo</label>
                        <input class="form-control @error('title') is-invalid @enderror" id="price" name="price" type="number" placeholder="Prezzo del corso" data-sb-validations="required, price" value="{{ old('price') }}">
                        @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Start Date -->
                    <div class="mb-3 px-5 text-center">
                        <label class="form-label ff-m lead tx-t" for="startdate">Data Inizio</label>
                        <input class="form-control @error('title') is-invalid @enderror" id="startdate" name="startdate" type="date" placeholder="Data inizio Corso" data-sb-validations="required, startdate" value="{{ old('startdate') }}">
                        @error('startdate')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Attestato -->
                    <div class="mb-3 px-5 text-center">
                        <label class="form-label ff-m lead tx-t" for="certificate">Tipo di Certificato</label>
                        <input class="form-control @error('title') is-invalid @enderror" id="certificate" name="certificate" type="text" placeholder="Tipo di Certificato" data-sb-validations="required, certificate" value="{{ old('certificate') }}">
                        @error('certificate')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Immagine del Corso -->
                    
                    <div class="mb-3 px-5 text-center">
                        <label class="form-label ff-m lead tx-t" for="coverimg">Copertina del Corso</label>
                        <input class="form-control" id="coverimg" name="coverimg" type="file" placeholder="Inserisci un'immagine jpeg, jpg, png, webp o img." data-sb-validations="required, coverimg" value="{{ old('coverimg') }}">
                        @error('coverimg')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Form submissions success message -->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3 ff-m lead tx-s">Hai inviato correttamente la tua richiesta!</div>
                    </div>
                    
                    <!-- Form submissions error message -->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3 ff-m lead">Errore nell'invio della richiesta, riprova.</div>
                    </div>
                    
                    <!-- Form submit button -->
                    <div class="d-grid gap-2 col-6 mt-5 d-flex m-auto mx-md-auto">
                        <button type="submit" class="btn btn-light btn-lg rounded-0 btnInsCorso tx-s fw-bold text-center m-auto">Inserisci il Corso</button>
                    </div>
                    <div class="d-grid gap-2 col-6 mt-5 d-flex m-auto mx-md-auto">
                        <a href="{{route('homepage')}}" type="button" class="btn btn-light btn-lg rounded-0 btnBackHome tx-s fw-bold fs-6 text-center m-auto">Torna alla Home</a>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    
    
    
    
    
    
    
    {{-- <div class="d-grid gap-2 col-6 mt-5 d-flex m-auto mx-md-auto">
        <button type="submit" class="btn btn-light btn-lg rounded-0 btnRichiesta tx-s fw-bold text-center m-auto">Inserisci Corso</button>
        <a href="{{route('homepage')}}"><button class="btn btn-light btn-sm rounded-0 btnBackHome tx-s fw-bold">Torna alla Home</button></a>
    </div> --}}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</x-layout>