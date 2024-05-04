<?php
session_start();
require_once '../Modelo/Usuario.php';
require_once '../Modelo/Tipo.php';
require_once '../Modelo/Ubicacion.php';
require_once '../Modelo/Incidencia.php';

if (!isset($_SESSION['user'])) {
    header("location: ../index.php");
} else {

    $data['user'] = Usuario::getUsuariobyId($_SESSION['user']);
    
    if ($data['user']->getEsTecnico()) {

        if (isset($_POST['incidenciaId'])) {

            $tecnicoId = $_SESSION['user'];
            $incidenciaId = $_POST['incidenciaId'];

            // Actualiza el técnico que lleva la incidencia
            $incidencia = Incidencia::getIncidenciaById($incidenciaId);
            $incidencia->atiendeIncidencia($tecnicoId);

            // Valida la operación para mostrar el modal
            $validacion = true;

            // Obtiene todos los datos necesarios para la vista
            if (isset($_POST['p'])) {
                $pagina = $_POST['p'];
            } else {
                $pagina = 1;
            }
            $cant_registros = 10;
            $offset = ($pagina-1) * $cant_registros;
            $paginas_totales = Incidencia::getPaginasTotalesIncTramite($cant_registros);

            $data['incidencias'] = Incidencia::getIncidenciasTramitePaginacion($offset, $cant_registros);
            $data['tipos'] = Tipo::getTipos();
            $data['ubicaciones'] = Ubicacion::getUbicaciones();
            if (isset($_POST['tipo'])) {

                $data['incidencias'] = Incidencia::getIncidenciasTramiteFiltroTipo($_POST['tipo']);

            }

            include '../Vista/incidenciasRegistradas.php';

        }

    } else {

        header("location: ../index.php");

    }

}