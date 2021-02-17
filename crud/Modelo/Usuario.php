<?php

class Usuario {
    private $id;
    private $email;
    private $password;
    private $nombre;
    private $primerApellido;
    private $segundoApellido;
    private $fechaNacimiento;
    private $pais;
    private $codigoPostal;
    private $telefono;
    private $rol;
    private $imagen;

  

    public function __construct($id="", $email="", $password="", $nombre="", $primerApellido="", $segundoApellido="", $fechaNacimiento="", $pais="", $codigoPostal="", $telefono="", $rol="",$imagen="") {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->nombre = $nombre;
        $this->primerApellido = $primerApellido;
        $this->segundoApellido = $segundoApellido;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->pais = $pais;
        $this->codigoPostal = $codigoPostal;
        $this->telefono = $telefono;
        $this->rol = $rol;
        $this->imagen = $imagen;
    }

    public function __get($name) {
        return $this->$name;
    }
    public function __set($name, $value) {
        $this->$name=$value;
    }
}
