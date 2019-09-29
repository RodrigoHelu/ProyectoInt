<?php
$nombre = "";
$apellido = "";
$email = "";
$comentario = "";
$comentario2 = "";
$comentario3 = "";
$comentario4 = "";
$comentario5 = "";

if ($_POST) {
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $email = $_POST["email"];
  $telefono = $_POST["telefono"];

  if (strlen($nombre) == 0) {
    $comentario = "El campo nombre está vacío";
    $nombre="";
  }

  if (strlen($apellido) == 0) {
    $comentario2 = "El campo apellido está vacío";
    $apellido="";
  }

  if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
    $comentario3 = "El email ingresado debe ser válido";
    $email="";
  }

  if (is_numeric($_POST["telefono"]) == false) {
    $comentario4 = "El teléfono debe ser numérico";
  }

  if (strlen($_POST["comentario"]) == 0) {
    $comentario5 = "Por favor ingrese un mensaje";
  }

}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contacto | OpenFUX</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesCON.css">
    <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="icon" href="img/favicon.png">
  </head>
  <body>
    <header>
    <nav class="navbar navbar-dark bg-primary" id="menunavv">
      <a class="navbar-brand" href="Home.html" id="navegacion">
    <img src="img/logo.png" class="d-inline-block align-top img-fluid" alt="Logo OpenFUX" id="imagenlogo">
      </a>
        <a class="nav-item nav-link active" href="Home.html" id="textonav">Inicio <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="Registro.html" id="textonav">Registrate</a>
        <a class="nav-item nav-link" href="Perfil.html" id="textonav">Términos y condiciones</a>
        <ul class="nav">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="barracel">Menú</a>
          <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="Home.html">Inicio</a>
          <a class="dropdown-item" href="Registro.html">Registrate</a>
          <a class="dropdown-item" href="Perfil.html">Términos y condiciones</a>
          </div>
          </li>
        </ul>
    </nav>
  </header>
  <div class="container">
    <div class="col-12 text-center mt-3"  id="pregfrec"><h2><strong>Contáctanos</strong></h2></div>
      <div class="row">
          <div class="col-12 col-lg-12" id="cajadecontacto">
              <div class="well well-sm">
                  <form class="form-horizontal" action="Contacto.php" method="post">
                          <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                              <div class="col-md-8">
                                  <input id="fname" name="nombre" type="text" placeholder="Nombre" class="form-control" value=<?=$nombre?>>
                                  <small class="form-text text-muted" style="color: black"><?=$comentario?></small>
                              </div>
                          </div>
                          <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                              <div class="col-md-8">
                                  <input id="lname" name="apellido" type="text" placeholder="Apellido" class="form-control" value=<?=$apellido?>>
                                  <small class="form-text text-muted" style="color: black"><?=$comentario2?></small>
                              </div>
                          </div>

                          <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                              <div class="col-md-8">
                                  <input id="email" name="email" type="text" placeholder="Correo Electrónico" class="form-control" value=<?=$email?>>
                                  <small class="form-text text-muted" style="color: black"><?=$comentario3?></small>
                              </div>
                          </div>

                          <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                              <div class="col-md-8">
                                  <input id="phone" name="telefono" type="phone" placeholder="Teléfono" class="form-control" value=<?=$telefono?>>
                                  <small class="form-text text-muted" style="color: black"><?=$comentario4?></small>
                              </div>
                          </div>

                          <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                              <div class="col-md-8">
                                  <textarea class="form-control" id="message" name="comentario" placeholder="Ingrese su mensaje aquí. Nos contactaremos con usted a la brevedad." rows="7"></textarea>
                                  <small class="form-text text-muted" style="color: black"><?=$comentario5?></small>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-lg-8 text-center" id="enviarpc">
                                  <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                              </div>
                              <div class="col-12 text-center" id="enviarcel">
                                  <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                              </div>
                          </div>
                  </form>
              </div>
          </div>
      </div>
  <br>
  <br>
  <br>
  <br>
  <footer class="py-5">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-lg-9">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="#" class="nav-link" target="_blank" id="chon">Desarrolladores</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link" target="_blank" id="chon">Anunciarse</a>
            </li>
            <li class="nav-item">
              <a href="Contacto.html" class="nav-link" target="_blank" id="chon">Contacto</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link" target="_blank" id="chon">Sobre Nosotros</a>
            </li>
            <li class="nav-item">
              <a href="FAQ.html" class="nav-link" target="_blank" id="chon">FAQ</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3">
          <div class="copyright text-center text-xl-right text-muted">
            © 2019 <a href="#" class="font-weight-bold ml-1" target="_blank" id="chon">TK ltd.</a>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
