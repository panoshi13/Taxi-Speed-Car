<?php

require_once '../entity/Cartilla.php';
require_once '../config/parameters.php';
require_once '../database/db.php';
require_once '../models/cartillaDAO.php';

$id = isset($_POST['id_cartilla']) ? $_POST['id_cartilla'] : false;
$placa = isset($_POST['placa']) ? $_POST['placa'] : false;
$autorizacion = isset($_POST['autorizacion']) ? $_POST['autorizacion'] : false;
$persona = isset($_POST['persona']) ? $_POST['persona'] : false;
$ruc = isset($_POST['ruc']) ? $_POST['ruc'] : false;
$tarjeta = isset($_POST['tarjeta']) ? $_POST['tarjeta'] : false;
$nombre_conductor = isset($_POST['nombres']) ? trim($_POST['nombres']) : false;
$apellido_conductor = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
$dni_conductor = isset($_POST['dni']) ? $_POST['dni'] : false;
$fecha_creacion = isset($_POST['date']) ? $_POST['date'] : false;

if ($id && !$placa && !$autorizacion && !$persona && !$ruc && !$tarjeta && !$nombre_conductor && !$apellido_conductor && !$dni_conductor && !$fecha_creacion) {
    $obj = new Cartilla();
    $obj->setIdcartilla($id);

    $cartilla = new cartillaDAO();
    $datos = $cartilla->getOneCartilla($obj);

    echo json_encode($datos);
} else {

    //$apellido_limpio = str_replace(" ", "", $apellido_conductor);
    //$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    // Output: video-g6swmAP8X5VG4jCi.mp4
    //$cartilla_image = substr(str_shuffle($permitted_chars), 0, 16).".png";
    $cartilla_image = $_POST['imagen_cartilla'] . ".png";
    $fecha_renovacion = date("Y-m-d", strtotime($fecha_creacion . "+ 1 year"));

    $cartilla = new Cartilla();
    $cartilla->setIdcartilla($id);
    $cartilla->setPlaca($placa);
    $cartilla->setN_autorizacion_servicio($autorizacion);
    $cartilla->setN_persona_autorizada($persona);
    $cartilla->setN_ruc($ruc);
    $cartilla->setN_tarjeta_unica_circulacion($tarjeta);
    $cartilla->setNombre_conductor($nombre_conductor);
    $cartilla->setApellido_conductor($apellido_conductor);
    $cartilla->setDni_conductor($dni_conductor);
    $cartilla->setCartilla_image($cartilla_image);
    $cartilla->setFecha_creacion($fecha_creacion);
    $cartilla->setFecha_renovacion($fecha_renovacion);

    if (isset($_FILES['imagen_conductor'])) {
        //GUARDAR IMAGEN
        $file = $_FILES['imagen_conductor'];
        $filename = $file['name'];
        $mimetype = $file['type'];

        if ($mimetype == 'image/jpg' || $mimetype == 'image/jpeg' || $mimetype == 'image/png' || $mimetype == 'image/gif') {
            if (!is_dir('../uploads/conductores/')) {
                mkdir('../uploads/conductores/', 0777, true);
            }
            move_uploaded_file($file['tmp_name'], '../uploads/conductores/' . $filename);
            $cartilla->setFoto_conductor($filename);
        }
    }

    $admin = new cartillaDAO();
    $valor = $admin->actualizarCartilla($cartilla);
    if ($valor == 1) {
        $result = "true";
    } else {
        $result  = "false_2";
    }
    echo $result;
} 