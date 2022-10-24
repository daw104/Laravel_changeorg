@extends('layout.public');

@section('content')


    <!--Section: ListarPeticiones-->
    

    

    <section class="text-center">
        <h4 class="mb-5 mt-4">
          <strong>Nuestras Peticiones</strong>
        </h4>

        <div class="row">
          @foreach($peticiones as $peticion)
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                
                    <img src="{{asset('storage/'.$peticion->image)}}" class="img-fluid"/>
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    
                    
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        {{$peticion->titulo}}
                    </h5>
                    <p class="card-text">
                    {{$peticion->descripcion}}
                    </p>
                    <a href="detallePeticion.html" class="btn btn-info">Leer mas</a>
                </div>
            </div>
        </div> 
        @endforeach
    </div>
      </section>


      <!--ListarPeticiones: Content-->

      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only text-info">Previous</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link text-info" href="#">1</a></li>
          <li class="page-item"><a class="page-link text-info" href="#">2</a></li>
          <li class="page-item"><a class="page-link text-info" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>




@endsection