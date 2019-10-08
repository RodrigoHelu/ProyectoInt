<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Perfil | OpenFUX</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesPERF.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="icon" href="img/favicon.png">
  </head>
  <body>

<?php require_once("barranavlogueado.php"); ?>
<?php require_once("barranavcellogueado.php"); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4 pb-5">
            <div class="author-card pb-3">
                <div class="author-card-cover " style="background-image: url(https://demo.createx.studio/createx-html/img/widgets/author/cover.jpg);"></div>
                <div class="author-card-profile">
                    <div class="author-card-avatar"><img class="rounded-circle" src="img/perfil.png" alt="Lee Cross">
                    </div>
                    <div class="author-card-details">
                        <h5 class="author-card-name text-lg">Lee Cross</h5><span class="author-card-position">Miembro desde Agosto de 2019</span>
                    </div>
                </div>
            </div>
            <div class="wizard" id="wizard">
                <nav class="list-group list-group-flush">
                    <a href="" class="nav-link" data-toggle="pill" role="tab">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="mr-1"></i>
                                <div class="d-inline-block font-weight-medium">Amigos</div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="nav-link" data-toggle="pill" role="tab">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="mr-1"></i>
                                <div class="d-inline-block font-weight-medium">Notificaciones</div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="nav-link active" data-toggle="pill" role="tab">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="mr-1"></i>
                                <div class="d-inline-block font-weight-medium">Cuenta</div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="nav-link" data-toggle="pill" role="tab">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="mr-1"></i>
                                <div class="d-inline-block font-weight-medium">Privacidad</div>
                            </div>
                        </div>
                    </a>
                    <a href="" class="nav-link" data-toggle="pill" role="tab">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="mr-1"></i>
                                <div class="d-inline-block font-weight-medium">Información</div>
                            </div>
                        </div>
                    </a>
                </nav>
            </div>
        </div>
        <div class="col-lg-8 pb-5" id="textcolor" href="">
            <form class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-fn">Nombre</label>
                        <input class="form-control" type="text"value="Lee" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-ln">Apellido</label>
                        <input class="form-control" type="text" value="Cross" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-email">Correo Electrónico</label>
                        <input class="form-control" type="email" value="leecross@example.com" disabled="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-phone">Teléfono</label>
                        <input class="form-control" type="text" value="+54 (0381) 555 555" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-pass">Nueva Contraseña</label>
                        <input class="form-control" type="password">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-confirm-pass">Confirmar Contraseña</label>
                        <input class="form-control" type="password">
                    </div>
                </div>
                <div class="col-12">
                    <hr class="mt-2 mb-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">

                        <button class="btn btn-style-1 btn-primary" type="button">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<br>
<br>
<?php require_once("footer.php"); ?>






  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
