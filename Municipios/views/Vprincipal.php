<?php
if(!isset($_SESSION))session_start();
?>
<html>

<head>
  <!-- Required met  tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- Place your kit's code here -->
  <script src="https://kit.fontawesome.com/4ddc389f8f.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  <title>Municipios Principal</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand" href="../Municipios/index.php?nav=Principal">Municipios</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
          <?php if($_SESSION){
            echo '<li class="nav-item"><a class="nav-link" href="conexion/cerrar_sesion.php">Cerrar sesión</a></li>';
          }
          else{
            echo '<li><a class="dropdown-item" href="../Municipios/index.php?nav=getSesion"></a></li>';
          }
          ?>
        </ul>
        <ul  class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
          <li><a class="dropdown-item" href="../Municipios/index.php?nav=SetMuni">Subir municipios!</a></li>

        </ul>
        <form class="d-flex">
        </form>
      </div>
    </div>
  </nav>
  <!--<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-white">
        <h1 class="display-4 fw-bolder">Los Moy's Restaurant</h1>
        <p class="lead fw-normal text-white-50 mb-0">Ve las ofertas y el especial del día!</p>
      </div>
    </div>
  </header>-->
  <div class="container-fluid mt-5">
    <div class="row">
      <!--layout izquierdo-->
    </div>
    <br />
    <section class="py-5">
      <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
          <!-- My content-->
        </div>
      </div>
    </section>
    <br />
    <!--Footer-->
    <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
      <div class="container">
        <div class="row">
          <div class="col">
            <p class="lead text-center">DavidM S.A. de C.V. Todos Los Derechos Reservados &copy; <span>App Web<s /span></p>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <!--<script type="text/javascript" src="https://server/cookies.js"></script>-->
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
  <script type="text/javascript" src="../Municipios/script/session.js"></script>
</body>

</html>
