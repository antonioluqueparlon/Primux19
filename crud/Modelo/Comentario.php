<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Noticia
 *
 * @author cano_
 */
class Comentario {

    protected $id;
    protected $idUsuario;
    protected $idNoticia;
    protected $cuerpo;
    protected $puntuacion;
    protected $fecha;

    function __construct($id = "", $idUsuario = "", $idNoticia = "", $cuerpo = "", $puntuacion = "", $fecha = "") {
        $this->id = $id;
        $this->idUsuario = $idUsuario;
        $this->idNoticia = $idNoticia;
        $this->cuerpo = $cuerpo;
        $this->puntuacion = $puntuacion;
        $this->fecha = $fecha;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }

    function __toString() {
        return "id Comentario: " . $this->id . ", id Usuario: " . $this->idUsuario . ", id Noticia: " . $this->idNoticia .
                ", cuerpo: " . $this->cuerpo . ", puntuacion: " . $this->puntuacion . ", fecha: " . $this->fecha;
    }

}
