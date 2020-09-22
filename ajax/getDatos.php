<?php 

require_once '../helpers/Utils.php';
require_once '../entity/Post.php';
require_once '../config/parameters.php';
require_once '../database/db.php';
require_once '../models/PostDAO.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $post = new Post();
    $post->setIdPost($id);
    $posts = new postDAO();
    $obj = $posts->getOneBlog($post);
    echo json_encode($obj);
}


?>