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
class Noticia {

    protected $id;
    protected $idUsuario;
    protected $fecha;
    protected $titulo;
    protected $contenido;
    protected $descripcion;
    protected $imagen;
        
    function __construct($id="",$idUsuario="", $fecha="", $titulo="",  $descripcion="",$contenido="",$imagen="") {  
        $this->id = $id;
        $this->idUsuario = $idUsuario;
        $this->fecha = $fecha;
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->descripcion = $descripcion;
        $this->imagen = $imagen;
    }
    
    
    
    public function __set($name, $value) {
        $this->$name=$value;
    }
    
    public function __get($name) {
        return $this->$name;
    }

    function __toString() {
        return "id Noticia: " . $this->id . ", id Usuario: " . $this->idUsuario .", fecha: " . $this->fecha .
                ", titulo: " . $this->titulo . ", contenido: ". $this->contenido . ", descripcion: ". $this->descripcion;
    }
}
