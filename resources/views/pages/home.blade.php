@extends('layout.public')
@section('content')
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imgs/img-car-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h4 class="animated bounceInRight" style="animation-delay: 1s">Demos el primer paso hacia el cambio</h4>
                <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">495.284.293 personas que pasan a la acción.
                </p>
                <p class="animated bounceInRight" style="animation-delay: 3s">
                    <a class="boton" href="pages/formularioPeticiones.html">Inicia una Petición</a>
                </p>
                
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/img-car-2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                <h4 class="animated bounceInRight" style="animation-delay: 1s">Demos el primer paso hacia el cambio</h4>
                <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">495.284.293 personas que pasan a la acción.</p>
                <p class="animated bounceInRight" style="animation-delay: 3s">
                    <a class="boton" href="pages/formularioPeticiones.html">Inicia una Petición</a>
                </p>

                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/img-car-3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                <h4 class="animated bounceInRight" style="animation-delay: 1s">Demos el primer paso hacia el cambio</h4>
                <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">495.284.293 personas que pasan a la acción.</p> 
                <p class="animated bounceInRight" style="animation-delay: 3s">
                    <a class="boton" href="pages/formularioPeticiones.html">Inicia una Petición</a>
                </p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
        
  <!-- Seccion Sobre Nosotros -->
  <div class="container pt-3 pt-md-5 pt-xs-2 pb-5">
   
    <div class="d-flex justify-content-center pb-2">
     <h3>
      ¿Quienes Somos?
    </h3>
    </div>

      <div class="row flex__sobreNosotros">
            <div class="col-12 col-sm-6 col-md-6">
                <img src="imgs/img-car-3.jpg" alt="">
            </div>

            <div class="col-12 col-sm-6 col-md-6">
              <p class="text-center sobre_nosotros">  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
      </div>
  </div>  

@endsection