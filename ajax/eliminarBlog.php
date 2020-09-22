<?php 

require_once '../entity/User.php';
require_once '../entity/Post.php';
require_once '../config/parameters.php';
require_once '../database/db.php';
require_once '../models/PostDAO.php';


if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $posts = new Post();
    $posts->setIdPost($id);
    $post = new postDAO();
    $eliminar = $post->deleteBlog($posts) ? "correcto": "incorrecto";
    echo $eliminar;
}
