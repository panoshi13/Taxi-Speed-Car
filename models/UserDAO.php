<?php


class userDAO{
    public $db;

    public function __construct()
    {
        $this->db=Database::conexion();
    }

    public function login($User){
        
            $sql = "SELECT * FROM usuario WHERE username=? AND password=?";
            $query = $this->db->prepare($sql);
            $query->bindValue(1, $User->getUsername());
            $query->bindValue(2, $User->getPassword());
            $query->execute();
            if (!$query->rowCount() == 0) {
                return $query->fetchObject();
            } else {
                return "Error";
            }
        
        
    }

    public function insertBlog($Post){
        $sql = "INSERT INTO post(id,titulo,brief,content,image,created_at,estado,user_id,category_id) VALUES(null,?,?,?,?,NOW(),1,?,1)";
        $query = $this->db->prepare($sql);
        $query->bindValue(1, $Post->getTitulo());
        $query->bindValue(2, $Post->getBrief());
        $query->bindValue(3, $Post->getContent());
        $query->bindValue(4, $Post->getImage());
        $query->bindValue(5, $Post->getIdUser());
        return $query->execute();
    }
}
