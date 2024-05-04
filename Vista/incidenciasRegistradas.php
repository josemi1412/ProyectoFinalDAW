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
    <script src="https://kit.fontawesome.com/9fceebffdc.js" crossorigin="anonymous"></script>
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

                        <div class="col-12 bg-light p-5 rounded">

                            <h2 class="text-center bg-primary text-light text-uppercase py-2">Incidencias registradas</h2>

                            <div class="row mt-3 mb-3">
                                <form action="" method="post">
                                        
                                        <div class="col d-flex flex-row align-items-center">
                                            <div class="col-lg-1 col-sm-2 col-3">
                                                <label for="tipo" class="form-label">Tipo: </label>
                                            </div>
                                            <div class="col-lg-3 col-sm-5">
                                                <select required id="tipo" name="tipo" class="form-select">
                                                    <option value="">-- Elige Tipo --</option>
                                                    <?php
                                                        foreach ($data['tipos'] as $tipo) {
                                                            echo '<option value="'.$tipo->getId().'">'.$tipo->getNombre().'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-lg-4 ms-3 col-sm-5">
                                            <input type="submit" class="btn btn-primary" value="Filtrar">
                                            </div>
                                        </div>
                                        
                                </form>
                            </div>

                            <div class="table-responsive-lg mb-2">

                                <table class="table table-striped">
                                    <tr>
                                    <th>Tipo</th><th>Ubicación</th><th>Título</th><th>Fecha</th><th>Estado</th><th>Usuario</th><th></th><th></th>
                                    </tr>

                                    <?php
                                    foreach ($data['incidencias'] as $incidencia) {

                                        if ($incidencia->getEstado()==0) {
                                            $incidenciaTexto = '<i class="fas fa-times-circle"style="color: #eb0202; font-size:2rem;"></i>';
                                        } else if ($incidencia->getEstado()==1) {
                                            $incidenciaTexto = '<i class="fas fa-clock" style="color: #f97d00; font-size:2rem;"></i>';
                                        } else if ($incidencia->getEstado()==2) {
                                            $incidenciaTexto = '<i class="fas fa-check-circle" style="color: #019B17; font-size:2rem;"></i>';
                                        }

                                        $tipo = Tipo::getTipoById($incidencia->getId_tipo());
                                        $tipoTexto = $tipo->getNombre();
                                        $ubicacion = Ubicacion::getUbicacionById($incidencia->getId_ubicacion());
                                        $ubicacionTexto = $ubicacion->getNombre();

                                    ?>
                                    <tr>
                                        <td><?=$tipoTexto?></td><td><?=$ubicacionTexto?></td><td><?=$incidencia->getTitulo()?></td></td><td><?=$incidencia->getFecha()?></td><td><?=$incidenciaTexto?></td><td><?=$incidencia->getId_usuario()?></td>
                                        <td>
                                        
                                        <form action="" method="post" id="myForm">
                                            <input type="hidden" name="titulo" value="<?=$incidencia->getTitulo()?>">
                                            <input type="hidden" name="descripcion" value="<?=$incidencia->getDescripcion()?>">
                                            <input type="hidden" name="atendidoTecnico" value="<?=$incidencia->getId_tecnico()?>">
                                            <?php

                                                // Este código es para que cuando hagas click en el botón no se pierda el filtro aplicado

                                                if (isset($_POST['tipo'])) {
                                                    echo '<input type="hidden" name="tipo" value="'.$_POST["tipo"].'">';
                                                }

                                                if (isset($_POST['ubicacion'])) {
                                                    echo '<input type="hidden" name="ubicacion" value="'.$_POST["ubicacion"].'">';
                                                }
                                            ?>
                                            <input type="submit" class="btn btn-dark" value="Detalles">
                                        </form>
                                        
                                        </td>
                                        <td>
                                        
                                        <?php if ($incidencia->getId_tecnico()==null): ?>

                                            <form action="../Controlador/atenderIncidencia.php" method="post" id="myForm2">
                                                <input type="hidden" name="incidenciaId" value="<?=$incidencia->getId()?>">
                                                <input type="hidden" name="p" value="<?=$pagina?>">
                                                <?php

                                                    // Este código es para que cuando hagas click en el botón no se pierda el filtro aplicado

                                                    if (isset($_POST['tipo'])) {
                                                        echo '<input type="hidden" name="tipo" value="'.$_POST["tipo"].'">';
                                                    }

                                                    if (isset($_POST['ubicacion'])) {
                                                        echo '<input type="hidden" name="ubicacion" value="'.$_POST["ubicacion"].'">';
                                                    }
                                                ?>
                                                <input type="submit" class="btn btn-success" value="Atender">
                                            </form>

                                        <?php endif ?>
                                        
                                        </td>   
                                    </tr>
                                    <?php
                                    }
                                    ?>

                                </table>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" onclick="window.location.href='../index.php'">Volver</button>
                                </div>

                                <!-- Paginación -->

                                <?php if (!isset($_POST['tipo']) && !isset($_POST['ubicacion'])): ?>

                                <div class="col">
                                    <nav aria-label="Botones de paginación" class="mt-1">
                                        <ul class="pagination pagination-sm justify-content-end m-0">
                                            <li class="page-item <?php if($pagina <= 1){ echo 'disabled'; } ?>">
                                                <a class="page-link"
                                                    href="<?php if($pagina <= 1){ echo ''; } else { echo "?p=" . ($pagina-1); } ?>">Anterior</a>
                                            </li>

                                            <?php for($i = 1; $i <= $paginas_totales; $i++ ): ?>
                                            <li class="page-item <?php if($pagina == $i) {echo 'active'; } ?>">
                                                <a class="page-link" href="?p=<?= $i; ?>"> <?= $i; ?> </a>
                                            </li>
                                            <?php endfor; ?>

                                            <li class="page-item <?php if($pagina >= $paginas_totales) { echo 'disabled'; } ?>">
                                                <a class="page-link"
                                                    href="<?php if($pagina >= $paginas_totales){ echo ''; } else {echo "?p=". ($pagina+1); } ?>">Siguiente</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>

                                <?php endif ?>
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
                    <button type="button" class="btn btn-primary" id="contactoEnviar">Enviar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
                </div>
            </div>

            <!-- Modal de revisión de incidencias -->
            <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="revisionIncidenciaLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?php if(isset($_POST['titulo'])) { echo $_POST['titulo']; } ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php if(isset($_POST['titulo'])) { echo $_POST['descripcion']; } ?>
                        </div>
                        <div class="modal-footer">
                            <?php if ($_POST['atendidoTecnico']!=null): ?>
                                <span class="me-3" style="color:#0d6efd; font-weight:bold;">Atendida por: <?=$_POST['atendidoTecnico']?></span>
                            <?php endif ?>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal de Atender Incidencia -->
            <div id="myModal2" class="modal fade">
                <div class="modal-dialog modal-dialog-centered modal-confirm">
                    <div class="modal-content">
                        <div class="modal-header justify-content-center">
                            <div class="icon-box">
                                <i class="material-icons">&#xE876;</i>
                            </div>
                        </div>
                        <div class="modal-body text-center">
                            <h4>¡Genial!</h4>	
                            <p>La incidencia ha sido atendida correctamente.</p>
                            <p>Puedes modificar su estado en "Ver incidencias atendidas".</p>
                            <button class="btn btn-success" data-dismiss="modal" onclick="window.location.href='../Controlador/index.php'"><span>Continuar</span> <i class="material-icons">&#xE5C8;</i></button>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
            
            <!-- Script para lanzar modal de Detalles -->

            <?php if (isset($_POST['titulo'])): ?>
            <script>
                $(document).ready(function(){
                    $('#myModal').modal('show');
                });
            </script>
            <?php endif ?>

            <!-- Script para lanzar modal de Atender -->

            <?php if (isset($validacion)): ?>
            <script>
                $(document).ready(function(){
                    $('#myModal2').modal('show');
                });
            </script>
            <?php endif ?>

  </body>
</html>