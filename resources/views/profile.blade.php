<x-layout>

    
        <div class="container-fluid py-3 contAreaRiservata">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 colShowCourse d-flex align-items-center justify-content-center py-3">
                    <h1 id="dettaglioCourse" class="tx-m ff-m">Area Riservata {{-- <span id="Academy2" class="display-4 tx-s spanShowCourse spanShowCourseAnim"></span> --}}
                    </h1>
                </div>
        
        
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-10">
                    <div class="card">
                    <div class="rounded-top text-white d-flex flex-row topCardProfile">
                        <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                            alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                            style="width: 150px; z-index: 1">
                        <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                            style="z-index: 1;">
                            Modifica Foto
                        </button>
                        </div>
                        <div class="ms-3" style="margin-top: 130px;">
                        <h5>{{Auth::user()->name}}</h5>
                        {{-- <p>New York</p> --}}
                        </div>
                    </div>
                    <div class="p-4 text-black" style="background-color: #f8f9fa;">
                        {{-- <div class="d-flex justify-content-end text-center py-1">
                            <div>
                                <p class="mb-1 h5">253</p>
                                <p class="small text-muted mb-0">Photos</p>
                            </div>
                            <div class="px-3">
                                <p class="mb-1 h5">1026</p>
                                <p class="small text-muted mb-0">Followers</p>
                            </div>
                            <div>
                                <p class="mb-1 h5">478</p>
                                <p class="small text-muted mb-0">Following</p>
                            </div>
                        </div> --}}
                    </div>
                        <div class="card-body p-4 text-black">
                            <div class="mb-5">
                            <p class="lead fw-normal mt-2 mb-0">Informazioni</p>
                            <div class="container py-3 bg-dark tx-m">
                                <div class="row p-0 w-100 mx-0">
                                    <div class="col-6 col-md-3 p-0 h-50">
                                        <p class="lead fw-normal text-center">Ruolo</p>
                                        <p class="font-italic mb-1 text-center border-bottom mx-3">Stilista</p>
                                    </div>
                                    <div class="col-6 col-md-3 p-0 h-50">
                                        <p class="lead fw-normal text-center">Città</p>
                                        <p class="mb-1 text-center border-bottom mx-3">Latina</p>
                                    </div>
                                    <div class="col-6 col-md-3 p-0 h-50">
                                        <p class="lead fw-normal text-center">Specialità</p>
                                        <p class="mb-1 text-center border-bottom mx-3">Taglio Uomo</p>
                                    </div>
                                    <div class="col-6 col-md-3 p-0 h-50">
                                        <p class="lead fw-normal text-center">Altro</p>
                                        <p class="mb-1 text-center border-bottom mx-3">Altro</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center my-5 bg-dark">
                                <p class="lead fw-normal my-3 tx-m px-3">I Corsi Inseriti</p>
                                <p class="mb-0"><a href="#!" class="text-muted tx-m px-3">Show all</a></p>
                            </div>
                            <div class="row g-2 px-3 justify-content-center">
                                
                                {{-- @foreach (Auth::user()->courses as $course) --}}
                                @foreach ($courses as $course)
                                    <div class="col-8 col-md-4 mb-2 bodyCardShadow">
                                        <div class="bodyCardShadow border-2">
                                        <img src="{{Storage::url($course->coverimg)}}"
                                        alt="image 1" class="img-fluid img-cards rounded-3">
                                        </div>
                                        <div class="">
                                        <ul class="justify-content-between px-3">
                                            <li class="list-group-item tx-t border-0">
                                                <p class="tx-s lead d-flex m-0">Nome Corso</p>
                                            </li>
                                            <li class="text-center tx-t border-0 list-group-item">{{$course->name}}</li>
                                        </ul>
                                        <ul class="justify-content-between px-3">
                                            <li class="list-group-item tx-t border-0">
                                                <p class="tx-s d-flex m-0">Descrizione</p>
                                            </li>
                                            <li class="text-center tx-t border-0 list-group-item">{{$course->description}}</li>
                                        </ul>
                                        <ul class="justify-content-between px-3">
                                            <li class="list-group-item tx-t border-0">
                                                <p class="tx-s d-flex m-0">Livello</p>
                                            </li>
                                            <li class="text-center tx-t border-0 list-group-item">{{$course->level}}</li>
                                        </ul>
                                        <ul class="justify-content-between px-3">
                                            <li class="list-group-item tx-t border-0">
                                                <p class="tx-s d-flex m-0">Data Inizio</p>
                                            </li>
                                            <li class="text-center tx-t border-0 list-group-item">{{$course->startdate}}</li>
                                        </ul>
                                        <ul class="justify-content-between px-3">
                                            <li class="list-group-item tx-t border-0">
                                                <p class="tx-s d-flex m-0">Prezzo</p>
                                            </li>
                                            <li class="text-center tx-t border-0 list-group-item">{{$course->price}} €</li>
                                        </ul>
                                        </div>
                                        <div class="d-flex justify-content-center pb-3">
                                        <button class="btn btnPrenota2 text-white">Acquista</button>
                                        </div>
                                    </div>
                                    
                                @endforeach                           
                            </div>
                            
                            <div class="d-flex justify-content-between align-items-center my-5 bg-dark">
                                <p class="lead fw-normal my-3 tx-m px-3">I Prodotti Inseriti</p>
                                <p class="mb-0"><a href="#!" class="text-muted tx-m px-3">Show all</a></p>
                            </div>
                            <div class="row g-2 px-3">
                                
                                    
                                
                                <div class="col-12 col-md-4 mb-2">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(112).webp"
                                    alt="image 1" class="w-100 rounded-3">
                                    <ul class="justify-content-between px-3">
                                        <li class="list-group-item tx-t border-0">
                                            <p class="tx-s lead d-flex m-0">Nome Prodotti</p>
                                        </li>
                                        <li class="text-center tx-t border-0 list-group-item"> Nome</li>
                                    </ul>
                                    <ul class="justify-content-between px-3">
                                        <li class="list-group-item tx-t border-0">
                                            <p class="tx-s d-flex m-0">Descrizione</p>
                                        </li>
                                        <li class="text-center tx-t border-0 list-group-item"> Nome</li>
                                    </ul>
                                    <ul class="justify-content-between px-3">
                                        <li class="list-group-item tx-t border-0">
                                            <p class="tx-s d-flex m-0">Livello</p>
                                        </li>
                                        <li class="text-center tx-t border-0 list-group-item"> Nome</li>
                                    </ul>
                                    <ul class="justify-content-between px-3">
                                        <li class="list-group-item tx-t border-0">
                                            <p class="tx-s d-flex m-0">Data Inizio</p>
                                        </li>
                                        <li class="text-center tx-t border-0 list-group-item"> Nome</li>
                                    </ul>
                                    <ul class="justify-content-between px-3">
                                        <li class="list-group-item tx-t border-0">
                                            <p class="tx-s d-flex m-0">Prezzo</p>
                                        </li>
                                        <li class="text-center tx-t border-0 list-group-item"> Nome</li>
                                    </ul>
                                    
                                    <div class="d-flex justify-content-end">
                                    <button class="btn btnPrenota2 text-white ">Acquista</button>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 mb-2">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(112).webp"
                                    alt="image 1" class="w-100 rounded-3">
                                </div>
                                                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        {{-- <div class="row">
            <div class="col-12 col-md-3 p-3">
                <h3>I tuoi Corsi</h3>
            </div>
        </div> --}}
        {{-- <section class="h-100 gradient-custom-2"> --}}
            
          {{-- </section> --}}
    

    
        
    





























    
</x-layout>