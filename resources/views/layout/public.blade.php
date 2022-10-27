<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>changeorg</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

   <!-- <link rel="stylesheet" href="css/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- <link rel="stylesheet" href="css/custom.css" />-->
    <link rel="stylesheet" type="text/css" href="{{url('css/custom.css')}}" />
  </head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg color_navbar">
    <div class="container-fluid">
      <img width="130px" height="70px" src="{{ asset('imgs/logo.png') }}" style="position: relative; top: -10px" />

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link mayucula active" aria-current="page" href="{{url('/')}}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mayucula" aria-current="page" href="{{url('crear')}}">Inicia una pentición</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mayucula" href="{{url('socios')}}">Programa de socios/as</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mayucula active" href="{{url('peticiones')}}">Más Peticiones</a>
          </li>
            <li class="nav-item">
                <a class="nav-link mayucula active" href="{{ur}}">Peticiones Firmadas</a>
            </li>
        </ul>
        <div class="d-flex">
          <button type="button" class="btn btn-success">
            <a class="text-decoration-none" href="">Iniciar Sesión</a>
          </button>
      </div>

      </div>
    </div>
  </nav>









@yield('content');









           <!-- FOOTER -->
  <footer class="bg-light text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">ACERCA DE</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-dark">Sobre Change.org</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Impacto</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Empleo</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Equipo </a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-0">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-dark">COMUNIDAD</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Blog</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Normas de la Comunidad</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">AYUDA</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-dark">Ayuda</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Guías</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Privacidad</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Politica Cookies</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-0">REDES SOCIALES</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-dark">Twitter</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Facebook</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Instagram</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      changeorg.com
      <a class="text-dark" href="https://www.change.org/">change.org</a>
    </div>
    <!-- Copyright -->
  </footer>

 <!-- <script src="js/bootstrap.min.js"></script> -->

  <script src="{{url('js/bootstrap.min.js')}}"></script>
  <script src="{{url('js/myfunctions.js')}}"></script>
</body>

</html>
