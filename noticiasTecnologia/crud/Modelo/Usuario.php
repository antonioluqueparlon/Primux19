<?php

require_once 'crud/Modelo/Conexion.php';

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

  

    public function __construct($id, $email, $password, $nombre, $primerApellido, $segundoApellido, $fechaNacimiento, $pais, $codigoPostal, $telefono, $rol,$imagen) {
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

    public static function insertarUsuario($id, $email, $password, $nombre, $primerApellido, $segundoApellido, $fechaNacimiento, $pais, $codigoPostal, $telefono, $rol,$imagen) {
        $conex = new Conexion();
        if ($conex->connect_errno != 0) {
            echo $conex->connect_error;
        } else {
            $consulta1 = $conex->query("INSERT INTO usuario VALUES('','$email','$password', '$nombre', '$primerApellido', '$segundoApellido','$fechaNacimiento','$pais','$codigoPostal','$telefono','$rol','$imagen') ");
            if ($conex->errno != 0) {
                return $conex->error;
            } else {
                if ($consulta1) {
                    return true;
                } else {
                    return $conex->error;
                }
            }
        }
    }

    
    public static function comprobarUsuario($email, $password) {
        $conex = new Conexion();
        if ($conex->connect_errno != 0) {
            echo $conex->connect_error;
        } else {
            $consulta1 = $conex->query("SELECT * from usuario WHERE email = '$email' AND password = '$password'");
            if ($conex->errno != 0) {
                return $conex->error;
            } else {
                if ($conex->affected_rows < 1) {
                    return FALSE;
                }


                return TRUE;
            }
        }
    }



    public static function EliminarUsuario($email) {
        $conex = new Conexion();
        if ($conex->connect_errno != 0) {
            echo $conex->connect_error;
        } else {
            $consulta1 = $conex->query("DELETE FROM usuario WHERE email = '$email' ");
            if ($conex->errno != 0) {
                return $conex->error;
            } else {
                if ($consulta1) {
                    return true;
                } else {
                    return $conex->error;
                }
            }
        }
    }
    
    public static function modificarUsuario($id, $email, $password, $nombre, $primerApellido, $segundoApellido, $fechaNacimiento, $pais, $codigoPostal, $telefono, $rol,$imagen) {
        $conex = new Conexion();
        if ($conex->connect_errno != 0) {
            echo $conex->connect_error;
        } else {
            $consulta1 = $conex->query("UPDATE usuario SET nombre = '$nombre', password = '$password', nombre = '$nombre', primerApellido = '$primerApellido', segundoApellido = '$segundoApellido', fechaNacimiento = '$fechaNacimiento', pais = '$pais', codigoPostal = '$codigoPostal', telefono = '$telefono', rol = '$rol', imagen = '$imagen' WHERE email = '$email'");
            if ($conex->errno != 0) {
                return $conex->error;
            } else {
                if ($conex->affected_rows < 1) {
                    return FALSE;
                }


                return TRUE;
            }
        }
    }

    public function __get($name) {
        return $this->$name;
    }

}
