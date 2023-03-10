<x-layout>
    <div class="container-fluid vh-100 contImgBackground">
        <div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
            <div class="row h-100 align-items-center">
                <div class="col-12 h-25"></div>
                <div class="col-12 h-50 d-flex flex-column justify-content-around text-center colHeaderHome">
                    <h1 class="display-3 text-center tx-m align items center justify-content-center ff-m">
                        Looking Your Best<br>Never Goes Out of Style
                    </h1>
                    <div class="d-flex justify-content-center">
                    <button class="btn btn-light btn-lg rounded-0 btnPrenota tx-m">Prenota Ora</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark">
        <div class="row h-100 align-items-center justify-content-center p-5">
            <h1 class="display-3 text-center tx-m align items center justify-content-center ff-m">Il nostro <span class="display-3 tx-s spanAcademy spanAcademyAnim">Team</span>
            </h1>
        </div>
            <div class="row h-100 align-items-center justify-content-center px-md-5 text-center">
                <div class="col-12 col-md-10 pb-5 pb-md-5 tx-m">
                    <h3 class=""><span class="tx-s">ONLY MY STYLE</span> è specializzato in tagli classici, rifiniture per barba, rasature con asciugamani caldi e prodotti per la toelettatura di qualità.<br>
                    Il nostro team di barbieri professionisti e competenti lavora per aiutarti a ottenere il tuo look migliore.<br>Il nostro è un background di vecchia scuola, ma con un tocco moderno.
                    </h3>
                    <h3 class="pt-3">
                    Abbiamo creato un ambiente rilassato in modo da poterci prendere cura di te, sempre. Il tutto accompagnato da ottima musica e conversazioni ponderate, per farti sentire a Casa.
                    </h3>
                </div>
            </div>
            <div class="d-flex justify-content-center pb-5">
                <button class="btn btn-light btn-lg rounded-0 btnPrenota tx-m">Il Team</button>
            </div>
    </div>
    <div id="Academy" class="container-fluid py-5 myContAcademy">
        <div class="row justify-content-center py-5">
            <div class="col-12 colOnlyAcademy">
                <h1 id="OnlyMy" class="display-3 text-center tx-m align items center justify-content-center ff-m h1Only h1OnlyAnim">Only My...<span id="Academy2" class="display-3 tx-s spanAcademy spanAcademyAnim">Academy</span>
                </h1>
                <h5 class="text-center tx-t align items center justify-content-center ff-m">La nostra accademia, sotto l’occhio attento dei nostri barber,<br> propone corsi accurati teorici e pratici per apprendere tutti i segreti del mestiere</h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 p-0 m-0 colScegli px-md-3 px-3">
            <h3 id="h3Scegli" class="text-md-end text-center tx-t align items center ff-m h3Scegli h3ScegliAnim">Scegli il corso che fa per te...</h3>
        </div>
            <div class="col-12 col-md-6 p-0 m-0 colSuccessi ps-md-0 pe-md-5 px-3">
            <h3 id="h3Success" class="text-md-start text-center tx-s align items center ff-m h3Successi h3SuccessiAnim">E' da qui che nascono i nuovi successi!</h3>
            </div>
        </div>
        
        <div class="row p-md-5 p-3 h-100">
            @foreach($courses as $course)
            <x-course-card :course="$course"/>
            @endforeach
        </div>
    </div>    


    {{-- <div class="col-12 col-md-4 py-5 ">
        <div class="card h-100">
            <img src="{{Storage::url($course->cover)}}" class="card-img-top" alt="...">
            <div class="card-body bg-dark">
            <h5 class="card-title tx-m">{{$course->title}}</h5>
            <p class="card-text tx-m">{{$course->description}}</p>
            </div>
            <ul class="list-group list-group-flush bg-white">
                <ul class="bg-dark d-flex justify-content-between border-bottom">
                    <li class="list-group-item bg-dark tx-m border-0">Nome Stilista :</li>
                    <li class="list-group-item bg-dark tx-m border-0">{{$course->stylist}}</li>
                </ul>
                <ul class="bg-dark d-flex justify-content-between border-bottom">
                    <li class="list-group-item bg-dark tx-m border-0">Livello del Corso :</li>
                    <li class="list-group-item bg-dark tx-m">{{$course->level}}</li> 
                </ul>
                <ul class="bg-dark d-flex justify-content-between border-bottom">
                    <li class="list-group-item bg-dark tx-m border-0">Data Inizio :</li>
                    <li class="list-group-item bg-dark tx-m">{{$course->startdate}}</li>
                </ul>
                <ul class="bg-dark d-flex justify-content-between border-bottom ">
                    <li class="list-group-item bg-dark tx-m border-0 pe-0">Certificato :</li>
                    <li class="list-group-item bg-dark tx-m text-wrap fs-6 text-end">{{$course->certificate}}</li>
                </ul>
                <ul class="bg-dark d-flex justify-content-between border-bottom">
                    <li class="list-group-item bg-dark tx-m border-0">Prezzo :</li>
                    <li class="list-group-item bg-dark tx-m">{{$course->price}}</li>
                </ul>
            
            
            </ul>
            <div class="card-body text-center">
                <a href="{{route('homepage')}}" type="button" class="btn btn-light btn-lg rounded-0 btnCardAcademy tx-s fw-bold fs-6 text-center">Acquista</a>
            </div>
        </div>
    </div>
 --}}

 















    
</x-layout>