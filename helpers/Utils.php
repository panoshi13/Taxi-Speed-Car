<?php 

class Utils{
    static function deleteSession($name){
        if (isset($_SESSION[$name])) {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
    }
    static function deleteSession1($name){
        if (isset($_SESSION[$name])) {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        header("Location: ".base_url);
    }
    static function error404(){
        return require_once 'views/error/index.php';
    }

    static function mostrarTitulo($leng){
        if (strlen($leng) > 10) {
            return substr($leng, 0, 15). "...";
        } else {
            return  $leng;
        }
        
    }

    static function mostrarTitulo2($leng){
        if (strlen($leng) > 20) {
            return substr($leng, 0, 18). "...";
        } else {
            return $leng;
        }
        
    }

    static function isAdmin(){
        if (!isset($_SESSION['verify'])) {
            header("Location: ".base_url);
        }
    }

}

?>