<?php

require_once '../entity/User.php';
require_once '../entity/Post.php';
require_once '../config/parameters.php';
require_once '../database/db.php';
require_once '../models/UserDAO.php';
session_start();


$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : false;
$descorta = isset($_POST['descorta']) ? $_POST['descorta'] : false;
$deslarga = isset($_POST['deslarga']) ? $_POST['deslarga'] : false;
$result = "";

if ($titulo && $deslarga && $descorta) {
   $post = new Post();
   
   $post->setIdUser($_SESSION['verify']->id);
   $post->setTitulo($titulo);
   $post->setBrief($descorta);
   $post->setContent($deslarga);
   
   if (isset($_FILES['imagen'])) {
      //GUARDAR IMAGEN
      $file = $_FILES['imagen'];
      $filename = $file['name'];
      $mimetype = $file['type'];

      if ($mimetype == 'image/jpg' || $mimetype == 'image/jpeg' || $mimetype == 'image/png' || $mimetype == 'image/gif') {
         if (!is_dir('../uploads/image/')) {
            mkdir('../uploads/image/', 0777, true);
         }
         move_uploaded_file($file['tmp_name'], '../uploads/image/' . $filename);
         $post->setImage($filename);
      }
   }

   $admin = new userDAO();
   $valor = $admin->insertBlog($post);
   if ($valor == 1) {
      $result = "true";
   }else{
      $result  = "false";
   }
   echo $result;
} else {
   echo  $result = "false";
}
