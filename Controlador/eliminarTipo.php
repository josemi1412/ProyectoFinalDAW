<?php
session_start();
require_once '../Modelo/Usuario.php';
require_once '../Modelo/Tipo.php';
require_once '../Modelo/Ubicacion.php';
require_once '../Modelo/Incidencia.php';

if (!isset($_SESSION['user'])) {
    header("location: ../index.php");
} else {

    $data['user'] = Usuario::getUsuarioById($_SESSION['user']);
    
    if ($data['user']->getEsAdmin()) {

        if (isset($_POST['tipoId'])) {

            $tipoEliminado = Tipo::getTipoById($_POST['tipoId']);
            $tipoEliminado->eliminarTipo();
            header("location: ../Controlador/gestionarTipos.php");

        } else {
            header("location: ../index.php");
        }


    } else {

        header("location: ../index.php");

    }

}