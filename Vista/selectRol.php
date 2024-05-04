<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="Vistaport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../Vista/css/estilos.css">
    <title>HELPER'S resolvemos tus incidencias</title>
  </head>
  <body>

            <!-- Banner y logos -->

            <header class="logos-menu mt-3">      
                
                    <img src="../Vista/img/logo.png" class="img-fluid" alt="...">
                
            </header>
        
            <!-- Cuerpo de la web -->

            <main>
                <div class="container mt-3 mb-3">
                <div class="row justify-content-center align-items-center" style="min-height: 76vh;">

                    <div class="col-md-12 bg-light p-5">

                        <h2 class="text-center py-2">Selecciona tu rol de usuario:</h2>

                        <div class="row mt-3">
                            <div class="col d-flex flex-row justify-content-center">
                                <form action="" method="post">
                                    <input type="hidden" name="rol" value="cliente">
                                    <button type="submit" class="btn btn-primary">Cliente</button>
                                </form>
                                <?php if ($data['user']->getEsTecnico()): ?>
                                    <form action="" method="post" class="ms-1">
                                        <input type="hidden" name="rol" value="tecnico">
                                        <button type="submit" class="btn btn-primary">Tecnico</button>
                                    </form>
                                <?php endif ?>
                                <?php if ($data['user']->getEsAdmin()): ?>
                                    <form action="" method="post" class="ms-1">
                                        <input type="hidden" name="rol" value="admin">
                                        <button type="submit" class="btn btn-primary">Admin</button>
                                    </form>
                                <?php endif ?>
                            </div>
                        </div>

                    </div>
                        

                </div>
                </div>
            </main>

            <!-- Footer -->

            <footer class="container-fluid text-white elfooter">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-sm-12 col-md-4 order-1 mt-5 text-warning">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalContacto">Contacto</a>
                    </div>
                    <div class="col-sm-12 col-md-4 order-3 order-md-2 mt-5 text-warning">
                        <a href="https://www.facebook.com/" target="_blank" target="_blank"><img width="35px" height="35px" src="../Vista/img/facebook.png"></a>
                        <a href="https://twitter.com/" target="_blank"><img width="35px" height="35px" src="../Vista/img/twitter.png"></a>
                        <a href="https://www.pinterest.es/" target="_blank"><img width="35px" height="35px" src="../Vista/img/pinterest.png"></a>
                        <a href="https://www.instagram.com/" target="_blank"><img width="35px" height="35px" src="../Vista/img/instagram.png"></a>
                        <a href="https://www.youtube.com/" target="_blank"><img width="35px" height="35px" src="../Vista/img/youtube.png"></a>
                    </div>
                    <div class="col-sm-12 col-md-4 order-2 order-md-3 mt-5 text-warning">
                        <a href="../Controlador/verAyuda.php">Ayuda</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <br>
                        <br>
                       &copy; Copyright 2024 - HELPER'S - Todos los derechos reservados
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </footer>

             <!-- Modal con el formulario de contacto -->
            <div class="modal fade" id="modalContacto" tabindex="-1" aria-labelledby="modalContactoLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="modalContactoLabel">Contacte con nosotros</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form>
                        <label for="contactoNombre" class="form-label">Nombre</label>
                        <input type="text" name="contactoNombre" id="contactoNombre" class="form-control" placeholder="Escriba su nombre"><br>
                        <label for="contactoEmail" class="form-label">Email</label>
                        <input type="email" name="contactoEmail" id="contactoEmail" class="form-control" placeholder="Escriba su dirección de email"><br>
                        <label for="contactoMensaje" class="form-label">Mensaje</label>
                        <textarea class="form-control" placeholder="Escriba aquí su mensaje" id="contactoMensaje"></textarea><br>
                    </form>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="contactoEnviar">Enviar</button>
                    </div>
                </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>