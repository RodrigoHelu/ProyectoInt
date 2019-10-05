<?php

$email = "";
$comentario1 = "";
$comentario2 = "";

  if ($_POST) {
    $email = $_POST["email"];

    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
      $comentario1 = "El email ingresado debe ser válido";
      $email= null;
    }

    if (strlen($_POST["password"]) < 8) {
      $comentario2 = "La contraseña debe tener al menos 8 caracteres";
    }

   }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inicio | OpenFUX</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="icon" href="img/favicon.png">
  </head>
  <body>
<?php require_once("barranav.php"); ?>
    <div class="container">
    <div class="row">
      <div class="col-12 col-lg-9">
    <h3 class="text-center" id="titulo"><strong>Estás a solo un paso de la nueva red social: OpenFux.com</strong></h3>
    </div>
    <br>
    <div class="col-12 col-lg-6">
    <h5 class="text-center" id="texto">Tenemos miles de funciones modernas que no se ven en todas las redes, entre ellas: </h5>
    <ion-icon name="paw" id="mano"></ion-icon><h4 class="text-center" id="texto">Explorar</h4>
    <p class="text-center">Recibe todas las noticias de tus amigos en un único lugar.</p>
    <ion-icon name="briefcase" id="maleta"></ion-icon><h4 class="text-center" id="texto">Publicaciones guardadas</h4>
    <p class="text-center">Guarda las publicaciones de tus seguidos para verlas más adelante.</p>
    <ion-icon name="brush" id="pincel"></ion-icon><h4 class="text-center" id="texto">Personalizar</h4>
    <p class="text-center">Personaliza tu inicio de la manera que mejor te parezca.</p>
    </div>
    <div class="col-12 col-lg-6" id="datos">
    <form role="form" action="Home.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleInputEmail1">Dirección e-mail</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su e-mail" name="email" value=<?=$email?>>
        <small class="form-text text-muted" id="black"><?=$comentario1?></small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
        <small class="form-text text-muted" id="black"><?=$comentario2?></small>
        <small id="pwHelp" class="form-text text-muted"><a href="#">¿Olvidaste tu contraseña?</a></small>
      </div>
      <div class="custom-control custom-control-alternative custom-checkbox">
          <input class="custom-control-input" id="customCheckRegister1" type="checkbox">
          <label class="custom-control-label" for="customCheckRegister1">
            <span style="color:white">Recordar usuario</span>
          </label>
        </div>
  <br>
      <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
    </form>
    </div>
    <div class="col-12 col-lg-12">
    <br>
    <br>
    <br>
    <h2 class="font-weight-bold text-center" id="parrafo1">Descubre lo que están haciendo tus amigos en este mismo momento</h2>
    <h2 class="font-weight-bold text-center" id="parrafo">Únete hoy a OpenFUX.</h2>
    <br>
    </div>
    <div class="col-12 col-lg-6">
  <button type="button" class="btn btn-primary btn-lg btn-block" hrel="Registro.php" id="boton">Registrate</button>
  <button type="button" class="btn btn-primary btn-lg btn-block" id="boton">Iniciar sesión</button>
    </div>
  <div class="col-12 col-lg-12">
  <br>
  <p class="text-center font-weight-bold">Si te registras significa que aceptas los <a href="#">Términos del servicio</a> y la <a href="#">Política de privacidad</a>, incluido el <a href="#">Uso de cookies</a>. Otros usuarios podrán encontrarte por tu correo electrónico o tu número de teléfono si los proporcionas. </p>
  </div>
  </div>
  </div>
  <br>
  <br>
  <br>
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
