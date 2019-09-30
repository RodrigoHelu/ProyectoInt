<?php
$nombre = "";
$apellido = "";
$email = "";
$telefono = "";
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
    $nombre= null;
  }

  if (strlen($apellido) == 0) {
    $comentario2 = "El campo apellido está vacío";
    $apellido= null;
  }

  if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
    $comentario3 = "El email ingresado debe ser válido";
    $email= null;
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
<?php require_once("barranav.php"); ?>
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
<?php require_once("footer.php"); ?>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
