<?php 
require_once 'entity/Post.php';
require_once 'models/PostDAO.php';

    class blogController{
        public function todas(){
            $posts = new postDAO();
            $post = $posts->getAll();

            $obj = new postDAO();
            $objs = $obj->Bloglimite();
            require_once 'views/blog/main.php';
            
        }

        

        public function noticia(){
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $post = new Post();
                $post->setIdPost($id);
                $posts = new postDAO();
                if (is_object($posts->getOne($post))) {
                    $noticia = $posts->getOne($post);
                    $obj = new postDAO();
                    $objs = $obj->Bloglimite();
                    require_once 'views/blog/noticia.php';
                }else{
                    Utils::error404();
                }
            }else{
                Utils::error404();
            }

            
        }
    }



?>