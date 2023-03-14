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
    @endif  --}}
    <div class="container-fluid py-5 h-100 myContCourse">
            <div class="row justify-content-center align-items-center py-5">
                <div class="col-12 colShowCourse bg-dark">
                    <h1 id="dettaglioCourse" class="text-center tx-m align items center justify-content-center ff-m h1ShowCourse h2ShowCourseAnim">Modifica il Corso <span id="Academy2" class="display-4 tx-s spanShowCourse spanShowCourseAnim">{{$course->name}}</span>
                    </h1>
                </div>
            </div>
            
                <div class="row justify-content-center align-items-center">
                <div id="ColNewCourse" class="col-12 col-md-6 py-3">
                <!-- Bootstrap 5 starter form -->
                <form id="contactForm" class="w-100 contactFormAni border py-3" method="POST" action="{{route('course.update', compact('course'))}}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <!-- Name input -->
                    <div class="mb-3 px-5 text-center">
                        <label class="form-label ff-m lead tx-t" for="name">Nome Corso</label>
                        <input class="form-control ff-m lead " id="name" name="name" type="text" placeholder="Nome del corso" data-sb-validations="required" value="{{ $course->name }}">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Descrizione -->
                    
                    <div class="mb-3 px-5 text-center">
                        <label class="form-label ff-m lead tx-t" for="description">Descrizione</label>
                        <input class="form-control @error('title') is-invalid @enderror" id="description" name="description" type="text" placeholder="Descrizione del Corso" data-sb-validations="required, description" value="{{ $course->description }}">
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Stylist Name -->
                    <div class="mb-3 px-5 text-center">
                        <label class="form-label ff-m lead tx-t" for="stylist">Creato da</label>
                        <input class="form-control @error('title') is-invalid @enderror" id="stylist" name="stylist" type="text" placeholder="Nome dello Stilista" data-sb-validations="required, stylist" value="{{ $course->stylist}}">
                        @error('stylist')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Course Level -->
                    <div class="mb-3 px-5 text-center">
                        <label class="form-label ff-m lead tx-t" for="level">Livello del Corso</label>
                        <input class="form-control @error('title') is-invalid @enderror" id="level" name="level" type="text" placeholder="Difficoltà del corso" data-sb-validations="required, level" value="{{ $course->level }}">
                        @error('level')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Price -->
                    <div class="mb-3 px-5 text-center">
                        <label class="form-label ff-m lead tx-t" for="price">Prezzo</label>
                        <input class="form-control @error('title') is-invalid @enderror" id="price" name="price" type="number" placeholder="Prezzo del corso" data-sb-validations="required, price" value="{{$course->price }}">
                        @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Start Date -->
                    <div class="mb-3 px-5 text-center">
                        <label class="form-label ff-m lead tx-t" for="startdate">Data Inizio</label>
                        <input class="form-control @error('title') is-invalid @enderror" id="startdate" name="startdate" type="date" placeholder="Data inizio Corso" data-sb-validations="required, startdate" value="{{ $course->startdate }}">
                        @error('startdate')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Attestato -->
                    <div class="mb-3 px-5 text-center">
                        <label class="form-label ff-m lead tx-t" for="certificate">Tipo di Certificato</label>
                        <input class="form-control @error('title') is-invalid @enderror" id="certificate" name="certificate" type="text" placeholder="Tipo di Certificato" data-sb-validations="required, certificate" value="{{ $course->certificate }}">
                        @error('certificate')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Immagine del Corso -->
                    <div class="mb-3 text-center">

                        <label for="existingCoverimg" class="form-lable"> Immagine Attuale</label><br>
                        <img src="{{Storage::url($course->coverimg)}}" width="150" alt="">
                        
                    </div>

                    <div class="mb-3 px-5 text-center">
                        <label class="form-label ff-m lead tx-t" for="coverimg">Copertina del Corso</label>
                        <input class="form-control" id="coverimg" name="coverimg" type="file" placeholder="Inserisci un'immagine jpeg, jpg, png, webp o img." data-sb-validations="required, coverimg">
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
                        <button type="submit" class="btn btn-light btn-lg rounded-0 btnInsCorso tx-s fw-bold text-center m-auto">Aggiorna il Corso</button>
                    </div>
                    <div class="d-grid gap-2 col-6 mt-5 d-flex m-auto mx-md-auto">
                        <a href="{{route('course.index')}}" type="button" class="btn btn-light btn-lg rounded-0 btnBackHome tx-s fw-bold fs-6 text-center m-auto">Torna Indietro</a>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</x-layout>