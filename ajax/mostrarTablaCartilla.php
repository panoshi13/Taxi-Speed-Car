<?php
require_once '../helpers/Utils.php';
require_once '../config/parameters.php';
require_once '../database/db.php';
require_once '../models/CartillaDAO.php';

$cartillas = new cartillaDAO();
$cartilla = $cartillas->getAll();
$tabla = "";
foreach ($cartilla as $value) { 
    $tabla = $tabla."<tr>
    <td>". $value['idcartilla'] ."</td>
    <td>". $value['placa']."</td>
    <td>". $value['nombre_conductor']."</td>
    <td>". $value['apellido_conductor']."</td>
    <td>". $value['dni_conductor']."</td>
    <td><img src='http://localhost/TaxiSpeedCar/uploads/conductores/".$value['foto_conductor']."' class='img-fluid'></td>
    <td><img src='http://localhost/TaxiSpeedCar/uploads/cartillas/".$value['cartilla_image']."' alt='imagen de cartilla'class='img-fluid'></td>
    <td>". $value['fecha_creacion']."</td>
    <td class='d-flex'>
        <a href='http://localhost/TaxiSpeedCar/uploads/cartillas/".$value['cartilla_image']."' download ><button type='button' class='btn btn-yellow btn-md' id='descargar_cartilla' descargar-idcartilla=".$value['idcartilla']."><i class='fas fa-download'></i></button></a>
        <button type='button' class='btn btn-dark-green btn-md'id='editar_cartilla' editar-cartilla=".$value['idcartilla']."><i class='far fa-edit'></i></button>
        <button type='button' class='btn btn-cyan btn-md' id='eliminar_cartilla' delete-idcartilla=".$value['idcartilla']."><i class='far fa-trash-alt'></i></button>
    </td>
    <td>". $value['n_autorizacion_servicio']."</td>
    <td>". $value['n_persona_autorizada']."</td>
    <td>". $value['n_ruc']."</td>
    <td>". $value['n_tarjeta_unica_circulacion']."</td>
    <td>". $value['fecha_renovacion']."</td>
</tr>";
}
echo $tabla;

?>

