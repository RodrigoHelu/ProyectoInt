<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Perfil | OpenFUX</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylesPERF.css">
    <link rel="icon" href="img/favicon.png">
  </head>
  <body>
    <header>
<?php require_once("barranavlogueado.php"); ?>
<?php require_once("barranavcellogueado.php"); ?>
    </header>
      <div class="container-fluid gedf-wrapper">
          <div class="row">
              <div class="col-md-3" id="fotoperfil">
                  <div class="card">
                      <div class="card-body">
                          <div class="mr-2">
                          <img class="rounded-circle" width="100" src="img/perfil.png" alt="Foto de perfil">
                          </div>
                          <div class="h5">@LeeCross</div>
                          <div class="h7 text-muted">Miracles Lee Cross</div>
                          <div class="h7">Developer of web applications, JavaScript, PHP, Java, Python, Ruby, Java, Node.js,
                              etc.
                          </div>
                      </div>
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                              <div class="h6 text-muted"><a href="#">Seguidores</a></div>
                              <div class="h5">5.234</div>
                          </li>
                          <li class="list-group-item">
                              <div class="h6 text-muted"><a href="Amigos.php">Seguidos</a></div>
                              <div class="h5">6.758</div>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-6 gedf-main">
                  <div class="card gedf-card" id="publicaciones1">
                      <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs" role="tablist">
                              <li class="nav-item">
                                  <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Haz
                                      una publicacion</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Imágenes</a>
                              </li>
                          </ul>
                      </div>
                      <div class="card-body">
                          <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                  <div class="form-group">
                                      <label class="sr-only" for="message">post</label>
                                      <textarea class="form-control" id="message" rows="3" placeholder="¿Qué estás pensando?"></textarea>
                                  </div>

                              </div>
                              <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                                  <div class="form-group">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="customFileLang" lang="en" name="archivo">
                                      <label class="custom-file-label" for="customFileLang">Sube una foto</label>
                                    </div>
                                  </div>
                                  <div class="py-4"></div>
                              </div>
                          </div>
                          <div class="btn-toolbar justify-content-between">
                              <div class="btn-group">
                                  <button type="submit" class="btn btn-primary">Compartir</button>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="card gedf-card" id="publicaciones2">
                      <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs" role="tablist">
                              <li class="nav-item">
                                  <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Publica</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Imágenes</a>
                              </li>
                          </ul>
                      </div>
                      <div class="card-body">
                          <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                  <div class="form-group">
                                      <label class="sr-only" for="message">post</label>
                                      <textarea class="form-control" id="message" rows="3" placeholder="¿Qué estás pensando?"></textarea>
                                  </div>

                              </div>
                              <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                                  <div class="form-group">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="customFileLang" lang="en" name="archivo">
                                      <label class="custom-file-label" for="customFileLang">Sube una foto</label>
                                    </div>
                                  </div>
                                  <div class="py-4"></div>
                              </div>
                          </div>
                          <div class="btn-toolbar justify-content-between">
                              <div class="btn-group">
                                  <button type="submit" class="btn btn-primary">Compartir</button>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="card gedf-card" id="misposts">
                      <div class="card-header">
                          <div class="d-flex justify-content-between align-items-center">
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                  <img class="rounded-circle" width="45" src="img/perfil.png" alt="Foto de perfil">
                                </div>
                                  <div class="ml-2">
                                      <div class="h5 m-0">@LeeCross</div>
                                      <div class="h7 text-muted">Miracles Lee Cross</div>
                                  </div>
                              </div>
                              <div>
                                  <div class="dropdown">
                                      <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-h"></i>
                                      </button>
                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                          <a class="dropdown-item" href="#">Guardar</a>
                                          <a class="dropdown-item" href="#">Ocultar</a>
                                          <a class="dropdown-item" href="#">Eliminar</a>
                                      </div>
                                  </div>
                              </div>
                          </div>

                      </div>
                      <div class="card-body col-12">
                          <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> Hace 2 minutos</div>
                          <a class="card-link" href="#">
                              <h5 class="card-title"><em>Lorem ipsum dolor sit amet, consectetur adip.</em></h5>
                          </a>
                          <p class="card-text" id="parrafoss">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium esse magnam nemo dolor
                              sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
                          </p>
                      </div>
                      <div class="card-footer col-12">
                          <a href="#" class="card-link" id="iconitos"><i class="fa fa-gittip"></i> Me gusta</a>
                          <a href="#" class="card-link" id="iconitos"><i class="fa fa-comment"></i> Comentar</a>
                          <a href="#" class="card-link" id="iconitos"><i class="fa fa-mail-forward"></i> Compartir</a>
                      </div>
                  </div>

                  <div class="card gedf-card" id="misposts">
                      <div class="card-header">
                          <div class="d-flex justify-content-between align-items-center">
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                  <img class="rounded-circle" width="45" src="img/perfil.png" alt="Foto de perfil">
                                </div>
                                  <div class="ml-2">
                                      <div class="h5 m-0">@LeeCross</div>
                                      <div class="h7 text-muted">Miracles Lee Cross</div>
                                  </div>
                              </div>
                              <div>
                                  <div class="dropdown">
                                      <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-h"></i>
                                      </button>
                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                          <a class="dropdown-item" href="#">Guardar</a>
                                          <a class="dropdown-item" href="#">Ocultar</a>
                                          <a class="dropdown-item" href="#">Eliminar</a>
                                      </div>
                                  </div>
                              </div>
                          </div>

                      </div>
                      <div class="card-body">
                          <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> Hace 10 minutos</div>
                          <a class="card-link" href="#">
                              <h5 class="card-title"><em> Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit consectetur
                                  deserunt illo esse distinctio.</em></h5>
                          </a>
                          <p class="card-text" id="parrafoss">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam omnis nihil, aliquam est, voluptates officiis iure soluta
                              alias vel odit, placeat reiciendis ut libero! Quas aliquid natus cumque quae repellendus. Lorem
                              ipsum dolor sit amet consectetur adipisicing elit. Ipsa, excepturi. Doloremque, reprehenderit!
                              Quos in maiores, soluta doloremque molestiae reiciendis libero expedita assumenda fuga quae.
                              Consectetur id molestias itaque facere? Hic!
                          </p>
                          <div>
                              <span class="badge badge-primary">JavaScript</span>
                              <span class="badge badge-primary">PHP</span>
                              <span class="badge badge-primary">Node.js</span>
                              <span class="badge badge-primary">HTML</span>
                              <span class="badge badge-primary">CSS</span>
                          </div>
                      </div>
                      <div class="card-footer">
                          <a href="#" class="card-link" id="iconitos"><i class="fa fa-gittip"></i> Me gusta</a>
                          <a href="#" class="card-link" id="iconitos"><i class="fa fa-comment"></i> Comentar</a>
                          <a href="#" class="card-link" id="iconitos"><i class="fa fa-mail-forward"></i> Compartir</a>
                      </div>
                  </div>

                  <div class="card gedf-card" id="misposts">
                      <div class="card-header">
                          <div class="d-flex justify-content-between align-items-center">
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                  <img class="rounded-circle" width="45" src="img/perfil.png" alt="Foto de perfil">
                                </div>
                                  <div class="ml-2">
                                      <div class="h5 m-0">@LeeCross</div>
                                      <div class="h7 text-muted">Miracles Lee Cross</div>
                                  </div>
                              </div>
                              <div>
                                  <div class="dropdown">
                                      <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-h"></i>
                                      </button>
                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                          <a class="dropdown-item" href="#">Guardar</a>
                                          <a class="dropdown-item" href="#">Ocultar</a>
                                          <a class="dropdown-item" href="#">Eliminar</a>
                                      </div>
                                  </div>
                              </div>
                          </div>

                      </div>
                      <div class="card-body">
                          <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> Hace 40 minutos</div>
                          <a class="card-link" href="#">
                              <h5 class="card-title"><em>Totam non adipisci hic! Possimus ducimus amet, dolores illo ipsum quos
                                  cum.</em></h5>
                          </a>
                          <p class="card-text" id="parrafoss">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam sunt fugit reprehenderit consectetur exercitationem odio,
                              quam nobis? Officiis, similique, harum voluptate, facilis voluptas pariatur dolorum tempora sapiente
                              eius maxime quaerat.
                          </p>
                      </div>
                      <div class="card-footer">
                          <a href="#" class="card-link" id="iconitos"><i class="fa fa-gittip"></i> Me gusta</a>
                          <a href="#" class="card-link" id="iconitos"><i class="fa fa-comment"></i> Comentar</a>
                          <a href="#" class="card-link" id="iconitos"><i class="fa fa-mail-forward"></i> Compartir</a>
                      </div>
                  </div>
              </div>

              <div class="col-md-3" id="amigosqueseguir">
                  <div class="card gedf-card">
                      <div class="card-body">
                          <h5 class="card-title">@mapichetto</h5>
                          <h6 class="card-subtitle mb-2 text-muted">Marcos Pichetto</h6>
                          <p class="card-text" id="parrafoss">Que será de nosotros en octubre?</p>
                          <a href="#" class="card-link">Entra a su perfil</a>
                          <a href="#" class="card-link">Ocultar publicación</a>
                      </div>
                  </div>
                  <div class="card gedf-card">
                          <div class="card-body">
                              <h5 class="card-title">@termofdez</h5>
                              <h6 class="card-subtitle mb-2 text-muted">Matías Fernández</h6>
                              <p class="card-text" id="parrafoss">Alto fútbol <ion-icon name="football"></ion-icon></p>
                              <a href="#" class="card-link">Entra a su perfil</a>
                              <a href="#" class="card-link">Ocultar publicación</a>
                          </div>
                    </div>
              </div>
          </div>
      </div>

<?php require_once("footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
