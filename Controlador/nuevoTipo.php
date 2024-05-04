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

        if (isset($_POST['nombre']) && isset($_POST['descripcion'])) {

            // Obtengo todos los datos del formulario

            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];      

            // Realizo las operaciones en la base de datos

            $tipo = new Tipo(0, $nombre, $descripcion);
            $tipo->insert();
            $validacionNuevo = true;
        }

        $data['textoTitulo'] = "Crear nuevo tipo";

        include '../Vista/editTipo.php';


    } else {

        header("location: ../index.php");

    }

}