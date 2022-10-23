<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>HOME</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/custom.css" />
  </head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg color_navbar">
    <div class="container-fluid">
      <img width="130px" height="70px" src="./imgs/logo.png" style="position: relative; top: -10px" />

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link mayucula active" aria-current="page" href="">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mayucula" aria-current="page" href="pages/crearPeticion.html">Inicia una pentición</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mayucula" href="#">Programa de socios/as</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mayucula active" href="pages/listasPeticiones.html">Más Peticiones</a>
          </li>
        </ul>
        <div class="d-flex">
          <button type="button" class="btn btn-success">
            <a class="text-decoration-none" href="pages/iniciarSesion.html">Iniciar Sesión</a>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
    crossorigin="anonymous"></script>
</body>

</html>