<x-layout>



    
      <div class="container-fluid vh-100 d-flex justify-content-center align-items-center bg-img-contatti">
        <div class="row h-50 justify-content-center align-items-center">
            <div class="col-12 d-flex align-items-center justify-content-center">
                {{-- vedere come inserire la condizione if se il messaggio è stato inviato (alert successful) o se non è stato inviato (alert danger) tramite il redirect del PublicController--}}
                <div class="alert alert-success text-center" role="alert">
                    <h4 class="alert-heading">Il tuo messaggio è stato inviato correttamente!</h4>
                    <p>Ti risponderemo quanto prima, nel frattempo dai un occhiata a tutti i nostri servizi che offriamo!</p>
                    <hr>
                    
                    <a href="/"><button class="btn btn-secondary btn-lg btnServizi">I Nostri Servizi</button></a>
                </div>
            </div>
        </div>
    </div>





 




</x-layout>    