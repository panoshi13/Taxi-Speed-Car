<?php
require_once '../helpers/Utils.php';
require_once '../entity/User.php';
require_once '../entity/Post.php';
require_once '../config/parameters.php';
require_once '../database/db.php';
require_once '../models/PostDAO.php';

$blogs = new postDAO();
$blog = $blogs->getBlogs();
$tabla = "";
foreach ($blog as $value) { 
    $tabla = $tabla."<tr>
    <td>". $value['id'] ."</td>
    <td>". Utils::mostrarTitulo($value['titulo'])."</td>
    <td>". Utils::mostrarTitulo2($value['brief'])."</td>
    <td>". Utils::mostrarTitulo2($value['content'])."</td>
    <td>". Utils::mostrarTitulo2($value['image'])."</td>
    <td>". Utils::mostrarTitulo2($value['created_at'])."</td>
    <td>". Utils::mostrarTitulo2($value['nombre'])."</td>
    <td class='d-flex'>
        <button type='button' class='btn btn-warning btn-md' edit-id=".$value['id']." data-toggle='modal' data-target='#basicExampleModal'><i class='far fa-edit'></i></button>
        <button type='button' class='btn btn-danger btn-md' id='eliminar' delete-id=".$value['id']."><i class='far fa-trash-alt'></i></button>
        <button type='button' class='btn btn-success btn-md' id='ver' view-id=".$value['id']."><i class='far fa-eye'></i></button>
    </td>
</tr>";
}
echo $tabla;
?>