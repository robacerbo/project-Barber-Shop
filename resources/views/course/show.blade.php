<x-layout>
    <div id="contShowCourse" class="container-fluid py-5 myContShow myContAcademy">
        <div class="row justify-content-center">
            <div class="col-12 colShowCourse bg-dark">
                <h1 id="dettaglioCourse" class="text-center tx-m align items center justify-content-center ff-m h1ShowCourse h2ShowCourseAnim">Dettaglio del Corso <span id="Academy2" class="display-4 tx-s spanShowCourse spanShowCourseAnim">{{$course->name}}</span>
                </h1>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 py-5">
                <div class="card h-100">
                    <img src="{{Storage::url($course->coverimg)}}" class="img-fluid img-cards" alt="...">
                    <div class="card-body bg-dark">
                    <h5 class="card-title tx-s text-center">{{$course->name}}</h5>
                    <p class="card-text tx-m text-center">{{$course->description}}</p>
                    </div>
                    <ul class="list-group list-group-flush bg-white">
                        <ul class="bg-dark d-flex justify-content-between border-bottom px-0">
                            <li class="list-group-item bg-dark tx-m border-0">Nome Stilista :</li>
                            <li class="list-group-item bg-dark tx-m border-0 text-end">{{$course->stylist}}</li>
                        </ul>
                        <ul class="bg-dark d-flex justify-content-between border-bottom px-0">
                            <li class="list-group-item bg-dark tx-m border-0">Livello Corso :</li>
                            <li class="list-group-item bg-dark tx-m border-0 text-end">{{$course->level}}</li> 
                        </ul>
                        <ul class="bg-dark d-flex justify-content-between border-bottom px-0">
                            <li class="list-group-item bg-dark tx-m border-0">Data Inizio :</li>
                            <li class="list-group-item bg-dark tx-m border-0 text-end">{{$course->startdate}}</li>
                        </ul>
                        <ul class="bg-dark d-flex justify-content-between border-bottom px-0">
                            <li class="list-group-item bg-dark tx-m border-0 pe-0">Certificato :</li>
                            <li class="list-group-item bg-dark tx-m border-0 text-wrap fs-6 text-end">{{$course->certificate}}</li>
                        </ul>
                        <ul class="bg-dark d-flex justify-content-between border-bottom px-0">
                            <li class="list-group-item bg-dark tx-m border-0">Prezzo :</li>
                            <li class="list-group-item bg-dark tx-m border-0 text-end">{{$course->price}} €</li>
                        </ul>
                        <ul class="bg-dark d-flex justify-content-between border-bottom px-0">
                            <li class="list-group-item bg-dark tx-m border-0">Corso Creato da :</li>
                            <li class="list-group-item bg-dark tx-m border-0 text-end">{{$course->user->name}}</li>
                        </ul>
                    
                    
                    </ul>
                    <div class="card-body d-flex justify-content-around">

                        @if(Auth::user() && Auth::id() == $course->user_id)
                        
                        <a href="{{route('course.edit', compact('course'))}}" type="button" class="btn btn-light btn-lg rounded-0 btnModifica tx-s fw-bold fs-6 text-center">Modifica</a>
                        <form method="POST" action="{{route('course.delete', compact('course'))}}" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-light btn-lg rounded-0 btnElimina tx-s fw-bold fs-6 text-center">Elimina</button>
                        </form>

                        @endif
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center">
                    <a href="{{route('course.index', compact('course'))}}" type="button" class="btn btn-light btn-lg rounded-0 btnIndietro tx-s fw-bold fs-6 text-center">Torna Indietro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>






















    {{-- <x-course-card :course="$course"/> --}}


</x-layout>