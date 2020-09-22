<?php

require_once '../helpers/Utils.php';
require_once '../entity/Post.php';
require_once '../config/parameters.php';
require_once '../database/db.php';
require_once '../models/PostDAO.php';

$mensaje = "";

if (isset($_POST['id_post'])) {
   $id = $_POST['id_post'];
   $post = new Post();
   $post->setIdPost($id);
   $post->setBrief($_POST['descorta']);
   $post->setContent($_POST['deslarga']);
   $post->setTitulo($_POST['titulo']);
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
   $posts = new postDAO();
   $result = $posts->updateBlog($post);
   if ($result == 0) {
      echo $mensaje = "false";
   } else {
      echo $mensaje = "true";
   }
} else {
   echo  $mensaje = "false";
}
