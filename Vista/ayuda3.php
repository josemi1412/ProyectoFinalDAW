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
        
            <!-- Login -->

            <main>
                <div class="container-fluid mt-3 mb-3">
                <div class="row justify-content-center align-items-center" style="min-height: 76vh;">

                    <div class="col-md-7 bg-light p-5 rounded">

                        <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" onclick="window.location.href='../index.php'">Volver</button>
                        
                        <h2 class="text-center bg-primary text-light text-uppercase py-2">FAQ'S- Preguntas y Respuestas</h2>
                        

                        <ul class="list-group">
                            <li class="list-group-item"><a href="?p=1">1. ¿Cómo registrarse en HELPER'S?</a></li>
                            <li class="list-group-item"><a href="?p=2">2. ¿Cómo inicio sesión en HELPER'S?</a></li>
                            <li class="list-group-item active" aria-current="true"><a href="?p=3">3. Uso de la aplicación como cliente</a></li>
                            <li class="list-group-item"><a href="?p=4">4. Uso de la aplicación como técnico</a></li>
                            <li class="list-group-item"><a href="?p=5">5. Uso de la aplicación como administrador</a></li>
                        </ul>

                        <br>
                        <div class="container cuerpoAyuda">
                            <div class="col-12 rounded pt-4 pb-1">
                                <h4 class="text-center"><b><u>Uso de la aplicación como cliente</u></b></h4><br>
                                <p>Para un usuario normal, este es el menú que le aparecerá con las distintas funcionalidades que le permite la plataforma. <br><br>
                                <img src="../Vista/img/ayuda/captura6.png" class="img-fluid" alt="..."><br><br>
                                Las funcionalidades que ofrecen las distintas opciones son las siguientes:<br>
                                    <p style="margin-left:2em">-	<u>Presentar incidencia:</u> el cliente podrá presentar una nueva incidencia.<br>
                                    -	<u>Listar mis incidencias:</u> el cliente podrá visualizar de manera interactiva las distintas incidencias que haya presentado, ordenadas por fecha, pudiendo modificar su estado y sus propiedades.<br>
                                    -	<u>Listar todas las incidencias:</u> el cliente podrá visualizar todas las incidencias registradas en la base de datos, ordenadas por fecha, con el objetivo de ver si ya se ha reportado la incidencia que él fuese a presentar.<br>
                                    -	<u>Cambiar rol:</u> el usuario podrá cambiar su rol en la aplicación. ( En caso de poseer más de uno) <br>
                                    -	<u>Cerrar sesión:</u> el usuario podrá cerrar su sesión.<br>
                                    </p>
                                <br><br>
                                <span style="color: red;"><b><u>Presentar incidencia</u></b></span><br><br>
                                Esta opción, aparecerá un formulario dónde se podrá cumplimentar los datos de una incidencia y al enviarla, quedará presentada.<br><br>
                                <img src="../Vista/img/ayuda/captura7.png" class="img-fluid" alt="..."><br><br>
                                Si todo ha ido bien, el cliente verá el siguiente mensaje:<br><br>
                                <img src="../Vista/img/ayuda/captura8.png" class="img-fluid" alt="..."><br><br>
                                <span style="color: red;"><b><u>Listar mis incidencias</u></b></span><br><br>
                                Esta opción, se mostrará un listado con las incidencias que ha tramitado y se puede filtrar por Tipo o Ubicación, además de ser modificadas.<br><br>
                                <img src="../Vista/img/ayuda/captura9.png" class="img-fluid" alt="..."><br><br>
                                Si el usuario hace clic en “Modificar” en alguna de las incidencias, le saldrá el siguiente formulario:<br><br>
                                <img src="../Vista/img/ayuda/captura10.png" class="img-fluid" alt="..."><br><br>
                                Si el usuario decide cambiar el estado de la incidencia a “Resuelto” porque la misma se ha solucionado antes de que el técnico acuda a resolverla, la incidencia ya no se podrá volver a modificar y quedará registrada en la base de datos.<br><br>
                                Cuando haya realizado los cambios deseados, tan solo deberá dar click en “Enviar” y se verá el siguiente mensaje:<br><br>
                                <img src="../Vista/img/ayuda/captura11.png" class="img-fluid" alt="..."><br><br>
                                <span style="color: red;"><b><u>Listar todas las incidencias</u></b></span><br><br>
                                Esta opción permite ver un listado con todas las incidencias presentadas en la aplicación.<br><br>
                                <img src="../Vista/img/ayuda/captura12.png" class="img-fluid" alt="..."><br><br>
                                Si el cliente hace clic en “Detalles”, podrá ver la incidencia más a fondo, ya que se le mostrará la descripción de la incidencia.<br><br>
                                <img src="../Vista/img/ayuda/captura13.png" class="img-fluid" alt="..."><br><br>

                                </p>
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