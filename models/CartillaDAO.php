<?php

class cartillaDAO
{
    public $db;

    public function __construct()
    {
        $this->db = Database::conexion();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM placa";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function agregarCartilla($Cartilla)
    {
        $sql = "INSERT INTO placa (`idcartilla`, `placa`, `n_autorizacion_servicio`, `n_persona_autorizada`, `n_ruc`, `n_tarjeta_unica_circulacion`, `cartilla_image`, `fecha_creacion`, `fecha_renovacion`, `nombre_conductor`, `apellido_conductor`, `dni_conductor`, `foto_conductor`) VALUES(NULL,?,?,?,?,?,?,?,?,?,?,?,?)";
        $query = $this->db->prepare($sql);
        $query->bindValue(1, $Cartilla->getPlaca());
        $query->bindValue(2, $Cartilla->getN_autorizacion_servicio());
        $query->bindValue(3, $Cartilla->getN_persona_autorizada());
        $query->bindValue(4, $Cartilla->getN_ruc());
        $query->bindValue(5, $Cartilla->getN_tarjeta_unica_circulacion());
        $query->bindValue(6, $Cartilla->getCartilla_image());
        $query->bindValue(7, $Cartilla->getFecha_creacion());
        $query->bindValue(8, $Cartilla->getFecha_renovacion());
        $query->bindValue(9, $Cartilla->getNombre_conductor());
        $query->bindValue(10, $Cartilla->getApellido_conductor());
        $query->bindValue(11, $Cartilla->getDni_conductor());
        $query->bindValue(12, $Cartilla->getFoto_conductor());
        return $query->execute();
    }

    public function eliminarCartilla($Cartilla)
    {
        $sql = "DELETE FROM placa WHERE idcartilla=?";
        $query = $this->db->prepare($sql);
        $query->bindValue(1, $Cartilla->getIdcartilla());
        return $query->execute();
    }

    public function getOneCartilla($Cartilla)
    {
        $sql = "SELECT * FROM placa WHERE idcartilla = ?";
        $query = $this->db->prepare($sql);
        $query->bindValue(1, $Cartilla->getIdCartilla());
        $query->execute();
        return $query->fetchObject();
    }

    public function actualizarCartilla($Cartilla)
    {
        $sql = "UPDATE placa SET placa=?,n_autorizacion_servicio=?,n_persona_autorizada=?,n_ruc=?,n_tarjeta_unica_circulacion=?,cartilla_image=? ,fecha_creacion=?,fecha_renovacion=?,nombre_conductor=?,apellido_conductor=?,dni_conductor=?";
        $accion = false;
        if ($Cartilla->getFoto_conductor() !== null) {
            $sql .= ",foto_conductor=?";
            $accion = true;
        }
        $sql .= "WHERE idcartilla=?";
        $query = $this->db->prepare($sql);
        $query->bindValue(1, $Cartilla->getPlaca());
        $query->bindValue(2, $Cartilla->getN_autorizacion_servicio());
        $query->bindValue(3, $Cartilla->getN_persona_autorizada());
        $query->bindValue(4, $Cartilla->getN_ruc());
        $query->bindValue(5, $Cartilla->getN_tarjeta_unica_circulacion());
        $query->bindValue(6, $Cartilla->getCartilla_image());
        $query->bindValue(7, $Cartilla->getFecha_creacion());
        $query->bindValue(8, $Cartilla->getFecha_renovacion());
        $query->bindValue(9, $Cartilla->getNombre_conductor());
        $query->bindValue(10, $Cartilla->getApellido_conductor());
        $query->bindValue(11, $Cartilla->getDni_conductor());
        if ($accion) {
            $query->bindValue(12, $Cartilla->getFoto_conductor());
            $query->bindValue(13, $Cartilla->getIdCartilla());
        }else{
            $query->bindValue(12, $Cartilla->getIdCartilla());
        }
        
        return $query->execute();
    }
}
