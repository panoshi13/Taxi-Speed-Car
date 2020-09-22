<?php

class Cartilla
{
    private $idcartilla;
    private $placa;
    private $n_autorizacion_servicio;
    private $n_persona_autorizada;
    private $n_ruc;
    private $n_tarjeta_unica_circulacion;
    private $cartilla_image;
    private $fecha_creacion;
    private $fecha_renovacion;
    private $nombre_conductor;
    private $apellido_conductor;
    private $dni_conductor;
    private $foto_conductor;

    function getIdcartilla()
    {
        return $this->idcartilla;
    }

    function getPlaca()
    {
        return $this->placa;
    }

    function getN_autorizacion_servicio()
    {
        return $this->n_autorizacion_servicio;
    }

    function getN_persona_autorizada()
    {
        return $this->n_persona_autorizada;
    }

    function getN_ruc()
    {
        return $this->n_ruc;
    }

    function getN_tarjeta_unica_circulacion()
    {
        return $this->n_tarjeta_unica_circulacion;
    }

    function getCartilla_image()
    {
        return $this->cartilla_image;
    }

    function getFecha_creacion()
    {
        return $this->fecha_creacion;
    }

    function getFecha_renovacion()
    {
        return $this->fecha_renovacion;
    }

    function getNombre_conductor()
    {
        return $this->nombre_conductor;
    }

    function getApellido_conductor()
    {
        return $this->apellido_conductor;
    }
    function getDni_conductor()
    {
        return $this->dni_conductor;
    }

    function getFoto_conductor()
    {
        return $this->foto_conductor;
    }

    function setIdcartilla($idcartilla)
    {
        $this->idcartilla = $idcartilla;
    }

    function setPlaca($placa)
    {
        $this->placa = $placa;
    }

    function setN_autorizacion_servicio($n_autorizacion_servicio)
    {
        $this->n_autorizacion_servicio = $n_autorizacion_servicio;
    }

    function setN_persona_autorizada($n_persona_autorizada)
    {
        $this->n_persona_autorizada = $n_persona_autorizada;
    }

    function setN_ruc($n_ruc)
    {
        $this->n_ruc = $n_ruc;
    }

    function setN_tarjeta_unica_circulacion($n_tarjeta_unica_circulacion)
    {
        $this->n_tarjeta_unica_circulacion = $n_tarjeta_unica_circulacion;
    }

    function setCartilla_image($cartilla_image)
    {
        $this->cartilla_image = $cartilla_image;
    }

    function setFecha_creacion($fecha_creacion)
    {
        $this->fecha_creacion = $fecha_creacion;
    }

    function setFecha_renovacion($fecha_renovacion)
    {
        $this->fecha_renovacion = $fecha_renovacion;
    }

    function setNombre_conductor($nombre_conductor)
    {
        $this->nombre_conductor = $nombre_conductor;
    }

    function setApellido_conductor($apellido_conductor)
    {
        $this->apellido_conductor = $apellido_conductor;
    }

    function setDni_conductor($dni_conductor)
    {
        $this->dni_conductor = $dni_conductor;
    }

    function setFoto_conductor($foto_conductor)
    {
        $this->foto_conductor = $foto_conductor;
    }
}
