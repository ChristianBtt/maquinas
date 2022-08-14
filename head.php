<!doctype html>
<html lang="es">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/bootstrap.min.css" />
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

</head>

<body>

  <?php
  $url = "http://" . $_SERVER['HTTP_HOST'] . "/maquinarias";
  $day = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
  $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
  $date = $day[gmdate('N') - 1] . " " . gmdate("d", time()) . " De " . $meses[gmdate('n') - 1];

  ?>


  <nav class="navbar navbar-expand-lg shadow position-fixed top-0 bg-secondary" style="width:100%;z-index:1">
    <div class="container-fluid">

      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $url; ?>/registro.php">Nuevo Registro</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo $url; ?>/admin.php">Ver Registro</a>
          </li>
        </ul>
        <div class="d-flex">
          <label style="margin-right:20px"><?php echo $date; ?></label>

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Log in
          </button>

        </div>
      </div>
    </div>
  </nav>
  <div class="position-relative top-0" style="height:80px"></div>

  <!-- Modal -->
  <form>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Log In</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="user" name="user" placeholder="Usuario">
              <label for="user">Usuario</label>
            </div>

            <div class="form-floating" style="margin-top:30px">
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña">
              <label for="floatingPassword">Contraseña</label>
            </div>

          </div>
          <div class="modal-footer">
            <button type="Sumbit" class="btn btn-primary">Entrar</button>
          </div>
        </div>
      </div>
    </div>
  </form>