<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="Vistaport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../Vista/css/estilos.css">
    <link rel="stylesheet" href="../Vista/css/estilosModal.css">
    <link rel="stylesheet" href="../Vista/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="../Vista/css/jquery-3.6.0.min.js"></script>
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

                    <div class="col-md-7 bg-light p-5 rounded">

                        <h2 class="text-center bg-primary text-light text-uppercase py-2"><?=$data['textoTitulo']?></h2>

                        <form action="" method="post" id="myForm">
                            <div class="mb-3">
                                <label for="tipo" class="form-label">Tipo: </label>
                                <select required id="tipo" name="tipo" class="form-select">
                                    <option value="">-- Elige Tipo --</option>
                                    <?php
                                        foreach ($data['tipos'] as $tipo) {

                                            if (isset($data['tipoId'])) {
                                                if ($tipo->getId()==$data['tipoId']) {
                                                    echo '<option value="'.$tipo->getId().'" selected="selected">'.$tipo->getNombre().'</option>';
                                                } else {
                                                    echo '<option value="'.$tipo->getId().'">'.$tipo->getNombre().'</option>';
                                                }
                                            } else {
                                                echo '<option value="'.$tipo->getId().'">'.$tipo->getNombre().'</option>';
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="ubicacion" class="form-label">Ubicación: </label>
                                <select required id="ubicacion" name="ubicacion" class="form-select">
                                    <option value="">-- Elige Ubicacion --</option>
                                    <?php
                                        foreach ($data['ubicaciones'] as $ubicacion) {

                                            if (isset($data['ubicacionId'])) {

                                                if ($ubicacion->getId()==$data['ubicacionId']) {
                                                    echo '<option value="'.$ubicacion->getId().'" selected="selected">'.$ubicacion->getNombre().'</option>';
                                                } else {
                                                    echo '<option value="'.$ubicacion->getId().'">'.$ubicacion->getNombre().'</option>';
                                                }

                                            } else {
                                                echo '<option value="'.$ubicacion->getId().'">'.$ubicacion->getNombre().'</option>';
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Titulo: </label>
                                <?php

                                    if (isset($data['titulo'])) {
                                        echo '<input type="text" id="titulo" name="titulo" class="form-control" required placeholder="Escribe un título" value="'.$data['titulo'].'">';
                                    } else {
                                        echo '<input type="text" id="titulo" name="titulo" class="form-control" required placeholder="Escribe un título">';
                                    }

                                ?>
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción: </label>
                                <?php

                                    if (isset($data['descripcion'])) {
                                        echo '<textarea class="form-control" id="descripcion" name="descripcion" rows="3" required placeholder="Escribe una descripción">'.$data['descripcion'].'</textarea>';
                                    } else {
                                        echo '<textarea class="form-control" id="descripcion" name="descripcion" rows="3" required placeholder="Escribe una descripción"></textarea>';
                                    }
                                ?>
                            </div>

                            <?php if (isset($data['estado'])): ?>

                                <div class="mb-3">

                                    <label for="estado" class="form-label">Estado: </label>
                                    <select required id="estado" name="estado" class="form-select">
                                        <option value="0">Pendiente</option>
                                        <option value="2">Resuelto</option>
                                    </select>
                                    <small class="form-text text-muted">
                                    Si dejas el estado como Resuelto, no podrás volver a modificar la incidencia.
                                    </small>

                                </div>

                                <input type="hidden" name="id" value="<?=$data['incidenciaId']?>">
                                <input type="hidden" name="fecha" value="<?=$data['fecha']?>">

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" onclick="window.location.href='../Controlador/listarIncidenciasPropias.php'">Volver</button>

                            <?php endif ?>
                            <input type="submit" class="btn btn-success" value="Enviar">
                            <?php if (!isset($data['estado'])): ?>

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" onclick="window.location.href='../index.php'">Volver</button>

                            <?php endif ?>

                            
                        </form>

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
                    <button type="button" class="btn btn-primary" id="contactoEnviar">Enviar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
                </div>
            </div>

            <!-- Modal HTML -->
            <div id="myModal" class="modal fade">
                <div class="modal-dialog modal-dialog-centered modal-confirm">
                    <div class="modal-content">
                        <div class="modal-header justify-content-center">
                            <div class="icon-box">
                                <i class="material-icons">&#xE876;</i>
                            </div>
                        </div>
                        <div class="modal-body text-center">
                            <h4>¡Genial!</h4>	
                            <p>Tu solicitud ha sido tramitada con éxito.</p>
                            <p>Un técnico lo revisará lo antes posible.</p>
                            <button class="btn btn-success" data-dismiss="modal" onclick="window.location.href='index.php'"><span>Continuar</span> <i class="material-icons">&#xE5C8;</i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal HTML de Modificación -->
            <div id="myModalMod" class="modal fade">
                <div class="modal-dialog modal-dialog-centered modal-confirm">
                    <div class="modal-content">
                        <div class="modal-header justify-content-center">
                            <div class="icon-box">
                                <i class="material-icons">&#xE876;</i>
                            </div>
                        </div>
                        <div class="modal-body text-center">
                            <h4>¡Genial!</h4>	
                            <p>Los cambios se han guardado correctamente.</p>
                            <button class="btn btn-success" data-dismiss="modal" onclick="window.location.href='../Controlador/listarIncidenciasPropias.php'"><span>Continuar</span> <i class="material-icons">&#xE5C8;</i></button>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

            <?php if (isset($validacion)): ?>
                <script>
                $(document).ready(function(){
                    $('#myModal').modal('show');
                });
                </script>
            <?php endif ?>

            <?php if (isset($validacionMod)): ?>
                <script>
                $(document).ready(function(){
                    $('#myModalMod').modal('show');
                });
                </script>
            <?php endif ?>

  </body>
</html>