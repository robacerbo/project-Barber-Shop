<x-layout>


    <div id="Academy" class="container-fluid py-5 myContAcademy">
        <div class="row justify-content-center">
            <div class="col-12 colOnlyAcademy">
                <h1 id="OnlyMy" class="display-3 text-center tx-m align items center justify-content-center ff-m h1Only h1OnlyAnim">Only My...<span id="Academy2" class="display-3 tx-s spanAcademy spanAcademyAnim">Academy</span>
                </h1>
                <h5 class="text-center tx-t align items center justify-content-center ff-m">La nostra accademia, sotto l’occhio attento dei nostri barber,<br> propone corsi accurati teorici e pratici per apprendere tutti i segreti del mestiere</h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 p-0 m-0 colSuccessi px-5 py-3">
                <h3 id="h3Scegli" class="text-center tx-t align-items-center ff-m h3Scegli h3ScegliAnim2">Inserisci il tuo Corso</h3>
                <a href="{{route('course.create')}}" class="btn btn-light btn-lg rounded-0 btnPrenota tx-m d-flex justify-content-center align-items-center mx-auto">Inserisci Corso</a>
            </div>
            <div class="col-12 col-md-2 p-0 m-0 colSuccessi px-5 d-flex align-items-center justify-content-center">
                <h3 class="text-center tx-m ff-m h3oppure h3oppureAnim show">oppure</h3>
            </div>
            <div class="col-12 col-md-5 p-0 m-0 colScegli px-5 py-3">
            <h3 id="h3Scegli" class="text-center tx-t align items center ff-m h3Scegli h3ScegliAnim2">Scegli il corso che fa per te...</h3>
            <h3 id="h3Success" class="text-center tx-s align items center ff-m h3Successi h3SuccessiAnim2">E' da qui che nascono i nuovi successi!</h3>
            </div>
            
        </div>
        @if (session('courseCreated'))
        <div class="alert alert-success">
        {{ session('courseCreated') }}
        </div>
        @endif
        @if (session('courseDeleted'))
        <div class="alert alert-danger border border-white">
        {{ session('courseDeleted') }}
        </div>
        @endif
        @if (session('courseUpdated'))
        <div class="alert alert-warning">
        {{ session('courseUpdated') }}
        </div>
        @endif
        @if (session('accessDenied'))
        <div class="alert alert-warning">
        {{ session('accessDenied') }}
        </div>
        @endif
            <div class="row p-md-5 p-3 h-100">
                @foreach($courses as $course)
                <x-course-card :course="$course"/>
                @endforeach
            </div>
        </div> 

































</x-layout>