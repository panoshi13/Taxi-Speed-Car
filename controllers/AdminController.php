<?php
require_once 'entity/User.php';
require_once 'entity/Post.php';
require_once 'models/UserDAO.php';
require_once 'models/PostDAO.php';
class adminController{
    public function login(){
        require_once 'views/admin/login.php';
    }

    public function inciar(){
        if(isset($_POST['username']) && isset($_POST['password'])){

            $user = new User();
            $user->setUsername($_POST['username']);
            $user->setPassword($_POST['password']);

            /* $username = $_POST['username'];
            $password = $_POST['password']; */

            $iniciar_sesion = new userDAO();
            $datos = $iniciar_sesion->login($user);

            if (is_object($datos)) {
                $_SESSION['verify'] = $datos;
                header("Location: ".base_url);
            }else{
                $_SESSION['verify-fail'] = "Los datos no coinciden";
                header("Location: ".base_url."admin/index");
            }
            
        }
    }

    public function logout(){
        Utils::deleteSession('verify');
        header("location: ".base_url);
    }

    public function noticia(){
        Utils::isAdmin();
        require_once 'views/admin/noticia.php';
    }

    public function cartilla()
    {
        Utils::isAdmin();
        require_once 'views/admin/cartilla.php';
    }

}
?>