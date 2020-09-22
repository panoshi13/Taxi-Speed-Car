<?php 

class postDAO{
    public $db;

    public function __construct()
    {
        $this->db=Database::conexion();
    }

    public function getAll(){
        $sql = "SELECT * FROM post";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function getOne($Post){
        $sql = "SELECT * FROM post WHERE id=?";
        $query = $this->db->prepare($sql);
        $query->bindValue(1,$Post->getIdPost());
        $query->execute();
        if (!$query->rowCount() == 0) {
            return $query->fetchObject();
        } else {
            return false;
        }
        
    }

    public function getBlogs(){
        $sql = "SELECT P.*, U.nombre FROM `post` P INNER JOIN `usuario` U ON P.user_id=U.id";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function deleteBlog($Post){
        $sql = "DELETE FROM `post` WHERE id=?";
        $query = $this->db->prepare($sql);
        $query->bindValue(1, $Post->getIdPost());
        return $query->execute();
    }

    public function getOneBlog($Post){
        $sql = "SELECT * FROM post WHERE id=?";
        $query = $this->db->prepare($sql);
        $query->bindValue(1, $Post->getIdPost());
        $query->execute();
        if (!$query->rowCount() == 0) {
            return $query->fetchObject();
        } else {
            return false;
        }
    }

    public function updateBlog($Post){
        $sql = "UPDATE post SET titulo=?, brief=?, content=?";
        $accion = false;
        if ($Post->getImage() !== null) {
            $accion = true;
            $sql .= ", image=?";
        }
        $sql .= "WHERE id=?";

        $query = $this->db->prepare($sql);
        $query->bindValue(1, $Post->getTitulo());
        $query->bindValue(2, $Post->getBrief());
        $query->bindValue(3, $Post->getContent());
        if($accion){
            $query->bindValue(4, $Post->getImage());
            $query->bindValue(5, $Post->getIdPost());
        }else{
            $query->bindValue(4, $Post->getIdPost());
        }
        return $query->execute();
    }

    public function Bloglimite()
    {
        $sql = "SELECT * FROM `post` ORDER by RAND() DESC LIMIT 4";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
}
