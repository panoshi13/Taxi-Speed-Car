<?php 

require_once '../entity/Cartilla.php';
require_once '../config/parameters.php';
require_once '../database/db.php';
require_once '../models/cartillaDAO.php';


if(isset($_POST['id'])){
    $cartilla = new Cartilla();
    $cartilla->setIdcartilla($_POST['id']);

    $delete = new cartillaDAO();
    $eliminar = $delete->eliminarCartilla($cartilla);
    if ($eliminar > 0) {
        echo "true";
    }else{
        echo "false";
    }
    

}else{
    echo "false";
}



?>