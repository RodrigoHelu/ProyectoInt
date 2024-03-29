<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FAQ | OpenFUX</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesFAQ.css">
    <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="icon" href="img/favicon.png">
  </head>
  <body>
<?php require_once("barranav.php"); ?>
  <div class="container">
    <div class="col-12 text-center mt-3"  id="pregfrec">Preguntas Frecuentes</div>
      <div class="row">
          <div class="col-12 col-md-1">
              <div class="nav nav-pills faq-nav" id="faq-tabs" role="tablist" aria-orientation="vertical">
                  <a href="#tab1" class="nav-link active" data-toggle="pill" role="tab" aria-controls="tab1" aria-selected="true" id="menufaq">
                      <i class="mdi mdi-help-circle"></i>General
                  </a>
                  <a href="#tab2" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab2" aria-selected="false" id="menufaq">
                      <i class="mdi mdi-account"></i>Cuenta
                  </a>
                  <a href="#tab3" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab3" aria-selected="false" id="menufaq">
                      <i class="mdi mdi-account"></i>Perfil
                  </a>
                  <a href="#tab4" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab4" aria-selected="false" id="menufaq2">
                      <i class="mdi mdi-heart"></i>Dispositivos
                  </a>
                  <a href="#tab6" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab6" aria-selected="false" id="menufaq2">
                      <i class="mdi mdi-help"></i>Anuncios
                  </a>
              </div>
          </div>
          <div class="col-12 col-lg-9" id="margencaja">
              <div class="tab-content" id="faq-tab-content">
                  <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                      <div class="accordion" id="accordion-tab-1">
                          <div class="card">
                              <div class="card-header" id="accordion-tab-1-heading-1">
                                  <h5>
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">Pregunta 1</button>
                                  </h5>
                              </div>
                              <div class="collapse" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                  <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p><strong>Ejemplo: </strong>It has survived not only five centuries.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-header" id="accordion-tab-1-heading-2">
                                  <h5>
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">Pregunta 2</button>
                                  </h5>
                              </div>
                              <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                  <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p><strong>Ejemplo: </strong>It has survived not only five centuries.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-header" id="accordion-tab-1-heading-3">
                                  <h5>
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">Pregunta 3</button>
                                  </h5>
                              </div>
                              <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                                  <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p><strong>Ejemplo: </strong>It has survived not only five centuries.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-header" id="accordion-tab-1-heading-4">
                                  <h5>
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">Pregunta 4</button>
                                  </h5>
                              </div>
                              <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                  <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p><strong>Ejemplo: </strong>It has survived not only five centuries.</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2">
                      <div class="accordion" id="accordion-tab-2">
                          <div class="card">
                              <div class="card-header" id="accordion-tab-2-heading-1">
                                  <h5>
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-1" aria-expanded="false" aria-controls="accordion-tab-2-content-1">Pregunta 5</button>
                                  </h5>
                              </div>
                              <div class="collapse" id="accordion-tab-2-content-1" aria-labelledby="accordion-tab-2-heading-1" data-parent="#accordion-tab-2">
                                  <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p><strong>Ejemplo: </strong>It has survived not only five centuries.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-header" id="accordion-tab-2-heading-2">
                                  <h5>
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-2" aria-expanded="false" aria-controls="accordion-tab-2-content-2">Pregunta 6</button>
                                  </h5>
                              </div>
                              <div class="collapse" id="accordion-tab-2-content-2" aria-labelledby="accordion-tab-2-heading-2" data-parent="#accordion-tab-2">
                                  <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p><strong>Ejemplo: </strong>It has survived not only five centuries.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-header" id="accordion-tab-2-heading-3">
                                  <h5>
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-3" aria-expanded="false" aria-controls="accordion-tab-2-content-3">Pregunta 7</button>
                                  </h5>
                              </div>
                              <div class="collapse" id="accordion-tab-2-content-3" aria-labelledby="accordion-tab-2-heading-3" data-parent="#accordion-tab-2">
                                  <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p><strong>Ejemplo: </strong>It has survived not only five centuries.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-header" id="accordion-tab-2-heading-4">
                                  <h5>
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-2-content-4" aria-expanded="false" aria-controls="accordion-tab-2-content-4">Pregunta 8</button>
                                  </h5>
                              </div>
                              <div class="collapse" id="accordion-tab-2-content-4" aria-labelledby="accordion-tab-2-heading-4" data-parent="#accordion-tab-2">
                                  <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p><strong>Ejemplo: </strong>It has survived not only five centuries.</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3">
                      <div class="accordion" id="accordion-tab-3">
                          <div class="card">
                              <div class="card-header" id="accordion-tab-3-heading-1">
                                  <h5>
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-1" aria-expanded="false" aria-controls="accordion-tab-3-content-1">Pregunta 9</button>
                                  </h5>
                              </div>
                              <div class="collapse" id="accordion-tab-3-content-1" aria-labelledby="accordion-tab-3-heading-1" data-parent="#accordion-tab-3">
                                  <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p><strong>Ejemplo: </strong>It has survived not only five centuries.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-header" id="accordion-tab-3-heading-2">
                                  <h5>
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-2" aria-expanded="false" aria-controls="accordion-tab-3-content-2">Pregunta 10</button>
                                  </h5>
                              </div>
                              <div class="collapse" id="accordion-tab-3-content-2" aria-labelledby="accordion-tab-3-heading-2" data-parent="#accordion-tab-3">
                                  <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p><strong>Ejemplo: </strong>It has survived not only five centuries.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-header" id="accordion-tab-3-heading-3">
                                  <h5>
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-3" aria-expanded="false" aria-controls="accordion-tab-3-content-3">Pregunta 11</button>
                                  </h5>
                              </div>
                              <div class="collapse" id="accordion-tab-3-content-3" aria-labelledby="accordion-tab-3-heading-3" data-parent="#accordion-tab-3">
                                  <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p><strong>Ejemplo: </strong>It has survived not only five centuries.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-header" id="accordion-tab-3-heading-4">
                                  <h5>
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-4" aria-expanded="false" aria-controls="accordion-tab-3-content-4">Pregunta 12</button>
                                  </h5>
                              </div>
                              <div class="collapse" id="accordion-tab-3-content-4" aria-labelledby="accordion-tab-3-heading-4" data-parent="#accordion-tab-3">
                                  <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p><strong>Ejemplo: </strong>It has survived not only five centuries.</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane" id="tab4" role="tabpanel" aria-labelledby="tab4">
                      <div class="accordion" id="accordion-tab-4">
                          <div class="card">
                              <div class="card-header" id="accordion-tab-4-heading-1">
                                  <h5>
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-1" aria-expanded="false" aria-controls="accordion-tab-4-content-1">Pregunta 13</button>
                                  </h5>
                              </div>
                              <div class="collapse" id="accordion-tab-4-content-1" aria-labelledby="accordion-tab-4-heading-1" data-parent="#accordion-tab-4">
                                  <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p><strong>Ejemplo: </strong>It has survived not only five centuries.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-header" id="accordion-tab-4-heading-2">
                                  <h5>
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-2" aria-expanded="false" aria-controls="accordion-tab-4-content-2">Pregunta 14</button>
                                  </h5>
                              </div>
                              <div class="collapse" id="accordion-tab-4-content-2" aria-labelledby="accordion-tab-4-heading-2" data-parent="#accordion-tab-4">
                                  <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p><strong>Ejemplo: </strong>It has survived not only five centuries.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-header" id="accordion-tab-4-heading-3">
                                  <h5>
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-3" aria-expanded="false" aria-controls="accordion-tab-4-content-3">Pregunta 15</button>
                                  </h5>
                              </div>
                              <div class="collapse" id="accordion-tab-4-content-3" aria-labelledby="accordion-tab-4-heading-3" data-parent="#accordion-tab-4">
                                  <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p><strong>Ejemplo: </strong>It has survived not only five centuries.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-header" id="accordion-tab-4-heading-4">
                                  <h5>
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-4-content-4" aria-expanded="false" aria-controls="accordion-tab-4-content-4">Pregunta 16</button>
                                  </h5>
                              </div>
                              <div class="collapse" id="accordion-tab-4-content-4" aria-labelledby="accordion-tab-4-heading-4" data-parent="#accordion-tab-4">
                                  <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p><strong>Ejemplo: </strong>It has survived not only five centuries.</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane" id="tab6" role="tabpanel" aria-labelledby="tab6">
                      <div class="accordion" id="accordion-tab-6">
                          <div class="card">
                              <div class="card-header" id="accordion-tab-6-heading-1">
                                  <h5>
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-1" aria-expanded="false" aria-controls="accordion-tab-6-content-1">Pregunta 17</button>
                                  </h5>
                              </div>
                              <div class="collapse" id="accordion-tab-6-content-1" aria-labelledby="accordion-tab-6-heading-1" data-parent="#accordion-tab-6">
                                  <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p><strong>Ejemplo: </strong>It has survived not only five centuries.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-header" id="accordion-tab-6-heading-2">
                                  <h5>
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-2" aria-expanded="false" aria-controls="accordion-tab-6-content-2">Pregunta 18</button>
                                  </h5>
                              </div>
                              <div class="collapse" id="accordion-tab-6-content-2" aria-labelledby="accordion-tab-6-heading-2" data-parent="#accordion-tab-6">
                                  <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p><strong>Ejemplo: </strong>It has survived not only five centuries.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-header" id="accordion-tab-6-heading-3">
                                  <h5>
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-3" aria-expanded="false" aria-controls="accordion-tab-6-content-3">Pregunta 19</button>
                                  </h5>
                              </div>
                              <div class="collapse" id="accordion-tab-6-content-3" aria-labelledby="accordion-tab-6-heading-3" data-parent="#accordion-tab-6">
                                  <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p><strong>Ejemplo: </strong>It has survived not only five centuries.</p>
                                  </div>
                              </div>
                          </div>
                          <div class="card">
                              <div class="card-header" id="accordion-tab-6-heading-4">
                                  <h5>
                                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-6-content-4" aria-expanded="false" aria-controls="accordion-tab-6-content-4">Pregunta 20</button>
                                  </h5>
                              </div>
                              <div class="collapse" id="accordion-tab-6-content-4" aria-labelledby="accordion-tab-6-heading-4" data-parent="#accordion-tab-6">
                                  <div class="card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p><strong>Ejemplo: </strong>It has survived not only five centuries.</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
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
