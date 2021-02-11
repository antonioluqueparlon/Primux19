<?php
require_once 'Modelo/conexion.php';
require_once 'Modelo/Usuario.php';

class UsuarioController{
    public static function insertarUsuario(Usuario $usu) {
        try{
            $conex = new Conexion();
            $conex->exec("Insert into usuario (email, password, nombre, primerApellido, segundoApellido, fechaNacimiento, pais, codigoPostal, telefono, rol, imagen) values
            ('$usu->email','$usu->password','$usu->nombre','$usu->primerApellido','$usu->segundoApellido','$usu->fechaNacimiento','$usu->pais','$usu->codigoPostal','$usu->telefono','$usu->rol','$usu->imagen')"
            );
        }catch (PDOException $ex) {
            die('ERROR EN LA BD'.$ex->getMessage());
        }
        unset($conex);   
    }

    public static function buscarPorCorreo($email) {
        try{
            $conex = new Conexion();
            $consulta1 = $conex->query("SELECT * from usuario WHERE email = '$email'");
            if($consulta1->rowCount()){
                $registro = $consulta1->fetchObject();
                $usuario = new Usuario($registro->id, $registro->email, $registro->password, $registro->nombre, $registro->primerApellido, 
                $registro->segundoApellido, $registro->fechaNacimiento, $registro->pais, $registro->codigoPostal, $registro->telefono, $registro->rol, $registro->imagen);
            return $usuario;
            }
        }catch (Exception $ex) {
            echo "<br><a href=index.php>IR al inicio</a><br>";
            die('ERROR con la BD' . $ex->getMessage());
        }
        
    }
    

    public static function comprobarUsuario($email, $password) {
        try {
            $conex=new Conexion();
            $result=$conex->query("SELECT * FROM usuario WHERE email='$email' and password='$password'");
            if($result->rowCount()){ //Esto es si encuentra 
                $registro = $result->fetchObject();
                $usuario = new Usuario($registro->id, $registro->email, $registro->password, $registro->nombre, $registro->primerApellido, 
                $registro->segundoApellido, $registro->fechaNacimiento, $registro->pais, $registro->codigoPostal, $registro->telefono, $registro->rol, $registro->imagen);
            return $usuario;
            }
            else return false;
        } catch (Exception $ex) {
            echo "<br><a href=index.php>IR al inicio</a><br>";
            die('ERROR con la BD'.$ex->getMessage());
        }
    }

    public static function recuperarUsuarios() {
        try {
            $conex = new Conexion();
            
            $result = $conex->query("SELECT * FROM usuario");
            if ($result->rowCount()) { //Esto es si encuentra 
                while ($registro = $result->fetchObject()) {
                    $usuario = new Usuario ($registro->id, $registro->email, $registro->password, $registro->nombre, $registro->primerApellido, 
                    $registro->segundoApellido, $registro->fechaNacimiento, $registro->pais, $registro->codigoPostal, $registro->telefono, $registro->rol, $registro->imagen);
                    //PARA QUE NO SE REPITA EL MISMO OBJETO PORQUE COGE LA MISMA REFERENCIA USAMOS MÉTODO CLONAR
                    $usuarios[] = clone($usuario);
                }
                return $usuarios;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            die("ERROR En la BD").$ex->getMessage();
        }
    }

    public static function EliminarUsuario($email) {
      try{
          $conex = new Conexion();
          $conex->exec("delete from usuario where email='$email'");
      }catch(Exception $ex){

      }
    }
    
    public static function modificarUsuario(Usuario $usuario) {
        try {
            $conex = new Conexion();
            $conex->exec("update usuario set email=$usuario->email, password=$usuario->password, nombre=$usuario->nombre,
            primerApellido=$usuario->primerApellido, segundoApellido=$usuario->segundoApellido, fechaNacimiento=$usuario->fechaNacimiento,
            pais=$usuario->pais, codigoPostal=$usuario->codigoPostal, telefono = $usuario->telefono, rol=$usuario->rol, imagen=$usuario->imagen where id=$usuario->id");
        } catch (Exception $ex) {
            echo "Error:" . $ex->getMessage();
        }
    }



}

