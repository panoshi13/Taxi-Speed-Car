<?php 
require_once 'User.php';
class Post extends User{
    private $id_post;
    private $titulo;
    private $brief;
    private $content;
    private $image;
    private $created_at;
    private $estado;

    function getIdPost(){
        return $this->id_post;
    }
    function getTitulo(){
        return $this->titulo;
    }
    function getBrief(){
        return $this->brief;
    }
    function getContent(){
        return $this->content;
    }
    function getImage(){
        return $this->image;
    }
    function getCreated_at(){
        return $this->created_at;
    }
    function getEstado(){
        return $this->estado;
    }

    function setIdPost($id_post){
        $this->id_post=$id_post;
    }

    function setTitulo($titulo){
        $this->titulo=$titulo;
    }

    function setBrief($brief){
        $this->brief=$brief;
    }

    function setContent($content){
        $this->content=$content;
    }

    function setImage($image){
        $this->image=$image;
    }
    function setCreated_at($created_at){
        $this->created_at=$created_at;
    }
    function setEstado($estado){
        $this->estado=$estado;
    }


}


?>