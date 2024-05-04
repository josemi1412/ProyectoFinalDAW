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

            $incidencia = Incidencia::getIncidenciaById($_POST['incidenciaId']);

            if (isset($_POST['estadoform'])) {

                $incidencia->setEstado($_POST['estadoform']);
                $incidencia->update();
                header("location: ../Controlador/verIncidenciasTecnico.php");

            } else {

                include '../Vista/selectEstado.php';

            }

        } else {

            header("location: ../index.php");

        }

    } else {

        header("location: ../index.php");

    }

}