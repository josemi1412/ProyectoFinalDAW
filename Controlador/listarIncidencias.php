<?php
session_start();
require_once '../Modelo/Usuario.php';
require_once '../Modelo/Tipo.php';
require_once '../Modelo/Ubicacion.php';
require_once '../Modelo/Incidencia.php';

if (!isset($_SESSION['user'])) {
    header("location: ../index.php");
} else {
        
    // Paginación del listado

    if (isset($_GET['p'])) {
        $pagina = $_GET['p'];
    } else {
        $pagina = 1;
    }
    $cant_registros = 10;
    $offset = ($pagina-1) * $cant_registros;
    $paginas_totales = Incidencia::getPaginasTotales($cant_registros);

    // Obtiene todas las incidencias
    $data['incidencias'] = Incidencia::getIncidenciasPaginacion($offset, $cant_registros);

    // Obtiene todos los tipos
    $data['tipos'] = Tipo::getTipos();

    // Obtiene todas las ubicaciones
    $data['ubicaciones'] = Ubicacion::getUbicaciones();

    // Filtra las incidencias

    if (isset($_POST['tipo'])) {

        $data['incidencias'] = Incidencia::getIncidenciasFiltroTipo($_POST['tipo']);

    } else if (isset($_POST['ubicacion'])) {

        $data['incidencias'] = Incidencia::getIncidenciasFiltroUbicacion($_POST['ubicacion']);

    }
        
    include '../Vista/incidencias.php';    

}