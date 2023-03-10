<div class="col-12 col-md-4 py-5">
    <div class="card h-100">
        <img src="{{Storage::url($course->coverimg)}}" class="card-img-top" alt="...">
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
        
        
        </ul>
        <div class="card-body text-center">
            <a href="{{route('homepage')}}" type="button" class="btn btn-light btn-lg rounded-0 btnCardAcademy tx-s fw-bold fs-6 text-center">Acquista</a>
        </div>
    </div>
</div>


