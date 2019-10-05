<?php

$nombre = "";
$apellido = "";
$usuario = "";
$email = "";
$ext = "";
$password = "";
$comentario = "";
$comentario2 = "";
$comentario3 = "";
$comentario4 = "";
$comentario5 = "";
$comentario6 = "";
$error = "";
$exito = "";
$foto = "Sube tu foto de perfil";

    if ($_POST) {
      $nombre = $_POST["nombre"];
      $apellido = $_POST["apellido"];
      $usuario = $_POST["usuario"];
      $email = $_POST["email"];

      if (strlen($nombre) == 0) {
        $comentario = "El campo nombre está vacío";
        $nombre = null;
      }

      if (strlen($apellido) == 0) {
        $comentario2 = "<br>El campo apellido está vacío";
        $apellido = null;
      }

      if (strlen($usuario) == 0) {
        $comentario6 = "<br>El campo usuario está vacío";
        $usuario = null;
      }

      if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        $comentario3 = "El email ingresado debe ser válido";
        $email = null;
      }

      if (strlen($_POST["password"]) < 8) {
        $comentario4 = "<br>La contraseña debe tener al menos 8 caracteres";
      }

      if($_FILES){
          if ($_FILES["archivo"]["error"] != 0) {
            $comentario5 = "Hubo un error al cargar tu foto de perfil";
          }
          else {
            $foto = "Tu foto se subió exitosamente";
            $nombrearchivo = $_FILES["archivo"]["name"];
            $ext = pathinfo($_FILES["archivo"]["name"], PATHINFO_EXTENSION);
            if ($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
              $comentario5 = "La imagen debe tener extension .jpg, .jpeg o .png";
                }
            else {
              // No hay errores
              move_uploaded_file($_FILES["archivo"]["tmp_name"], "archivos/ " . $nombre . $apellido . "." . $ext);
              $error = 0;
              $exito = "Usuario registrado con éxito";
              $nombre = "";
              $apellido = "";
              $usuario = "";
              $email = "";
                }
              }
            }
      if($nombre != null && $apellido != null && $email != null && $usuario != null){
        $password  =  password_hash( $_POST['password'], PASSWORD_DEFAULT);
        $archivo = "usuarios.json";
        $contenidoArchivo = file_get_contents( $archivo );

        $datos = json_decode( $contenidoArchivo, true );
        if (!$datos) {
          $datos = [];
        }

        $datos[] =  [
          'nombre' =>  $_POST['nombre'],
          'apellido' => $_POST['apellido'],
          'usuario' =>  $_POST['usuario'],
          'email' =>  $_POST['email'],
          'password' => $password
        ];

        $json = json_encode( $datos );

        file_put_contents( $archivo, $json );
      }

    }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registro | OpenFUX</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesREG.css">
    <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="icon" href="img/favicon.png">
  </head>
  <body>
<?php require_once("barranav.php"); ?>
    <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8">
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
    <div class="col-12 col-lg-5" id="registro">
      <div class="card shadow border-0" id="cajon">
        <div class="card-header bg-transparent pb-5" >
          <div class="text-center mt-2 mb-2"><small>Conectar con</small></div>
          <div class="text-center">
            <a href="#" class="btn btn-neutral btn-icon mr-4">
              <span class="btn-inner--icon"><img src="https://img.icons8.com/color/48/000000/facebook-new.png"></span>
              <span class="btn-inner--text">Facebook</span>
            </a>
            <a href="#" class="btn btn-neutral btn-icon mr-4">
              <span class="btn-inner--icon"><img src="https://img.icons8.com/color/48/000000/google-logo.png"></span>
              <span class="btn-inner--text">Google</span>
            </a>
            <a href="#" class="btn btn-neutral btn-icon mr-4">
              <span class="btn-inner--icon"><img src="https://img.icons8.com/color/48/000000/instagram-new.png"></span>
              <span class="btn-inner--text">Instagram</span>
            </a>
            <a href="#" class="btn btn-neutral btn-icon mr-4">
              <span class="btn-inner--icon"><img src="https://img.icons8.com/color/48/000000/twitter.png"></span>
              <span class="btn-inner--text">Twitter</span>
            </a>
          </div>
        </div>
        <div class="card-body mt--1 px-lg-5 py-lg-5" id="cajareg">
          <div class="text-center mb-4">
            <small  id="black">O regístrate con tus datos</small>
          </div>
          <?php if($error == 0) :?>
          <div class="text-center mb-4">
            <small  id="green"><?=$exito?></small>
          </div>
          <?php endif; ?>
          <form role="form" action="Registro.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <div class="input-group input-group-alternative mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                </div>
                <input class="form-control" placeholder="Nombre" type="text" name="nombre" value=<?=$nombre?>>
              </div>
              <small class="form-text text-muted" id="black"><?=$comentario?></small>
            </div>
            <div class="form-group">
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                </div>
                <input class="form-control" placeholder="Apellido" type="text" name="apellido" value=<?=$apellido?>>
              </div>
              <small class="form-text text-muted" id="black"><?=$comentario2?></small>
            </div>
            <div class="form-group">
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                </div>
                <input class="form-control" placeholder="Usuario" type="text" name="usuario" value=<?=$usuario?>>
              </div>
              <small class="form-text text-muted" id="black"><?=$comentario6?></small>
            </div>
            <div class="form-group">
              <div class="input-group input-group-alternative mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                </div>
                <input class="form-control" placeholder="Correo Electrónico" type="email" name="email" value=<?=$email?>>
              </div>
              <small class="form-text text-muted" id="black"><?=$comentario3?></small>
            </div>
            <div class="form-group">
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                </div>
                <input class="form-control" placeholder="Contraseña" type="password" name="password">
              </div>
              <small class="form-text text-muted" id="black"><?=$comentario4?></small>
            </div>
            <div class="font-italic" id="black"><small>Seguridad de la contraseña: <span class="text-success font-weight-700">segura</span></small></div>
            <br>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01"></span>
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileLang" lang="en" name="archivo">
                <label class="custom-file-label" for="customFileLang"><?=$foto?></label>
              </div>
            </div>
            <small class="form-text text-muted" id="black"><?=$comentario5?></small>
            <div class="row my-4">
              <div class="col-12">
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id="customCheckRegister1" type="checkbox">
                  <label class="custom-control-label" for="customCheckRegister1">
                    <span id="black">Recordar usuario</span>
                  </label>
                </div>
              </div>
              <br>
              <div class="col-12">
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id="customCheckRegister2" type="checkbox" required>
                  <label class="custom-control-label" for="customCheckRegister2">
                    <span id="black">Acepto los <a href="#!">Términos y condiciones</a></span>
                  </label>
                </div>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary mt-4">Crear Cuenta</button>
            </div>
          </form>
        </div>
      </div>
      </div>
    </div>
    <div class="col-12 col-lg-5">
    <br>
    <br>
    <br>
    <h2 class="font-weight-bold text-center" id="parrafo">Descubre lo que están haciendo tus amigos en este mismo momento <br> Únete hoy a OpenFUX. </h2>
    <br>
    </div>
  <div class="col-12 col-lg-12">
  <br>
  <p class="text-center font-weight-bold" id="textoregistro">Si te registras significa que aceptas los <a href="#">Términos del servicio</a> y la <a href="#">Política de privacidad</a>, incluido el <a href="#">Uso de cookies</a>. Otros usuarios podrán encontrarte por tu correo electrónico o tu número de telefono si los proporcionas. </p>
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
