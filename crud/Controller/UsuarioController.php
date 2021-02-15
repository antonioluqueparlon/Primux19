<?php
require_once 'crud/Modelo/conexion.php';
require_once 'crud/Modelo/Usuario.php';

class UsuarioController{
    public static function insertarUsuario(Usuario $usu) {
        try {
            $conex = new Conexion;
            $conex-> exec("Insert into usuario (id, email, password,nombre, primerApellido, segundoApellido, fechaNacimiento, pais, codigoPostal, telefono, rol, imagen) values"
                    . "('$usu->id', '$usu->email','$usu->password','$usu->nombre',"
                    . "'$usu->primerApellido','$usu->segundoApellido','$usu->fechaNacimiento','$usu->pais','$usu->codigoPostal','$usu->telefono','$usu->rol','$usu->imagen')");
           
        } catch (PDOException $ex) {
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

    
        public static function borrarUsuario($id) {
            try {
            $conex = new Conexion();
            $conex->exec("delete from usuario where id='$id'");
            } catch (Exception $ex) {   
            }  
        }


        public static function buscarUsuario($id) {
            try {
                $conex = new Conexion();
                $result = $conex->query("SELECT * FROM usuario WHERE id='$id'");
                if ($result->rowCount()) { //Esto es si encuentra 
                    $registro = $result->fetchObject();
                    $usuario = new Usuario($registro->id, $registro->email, $registro->password, $registro->nombre, 
                            $registro->primerApellido, $registro->segundoApellido, $registro->fechaNacimiento, $registro->pais, $registro->codigoPostal, $registro->telefono,
                            $registro->rol,$registro->imagen);
                   
                    return $usuario;
                } else
                    return false;
            } catch (Exception $ex) {
                echo "<br><a href=index.php>IR al inicio</a><br>";
                die('ERROR con la BD' . $ex->getMessage());
            }
        }
    

            public static function buscarUsuarioMail($mail) {
                try {
                    $conex = new Conexion();
                    $result = $conex->query("SELECT * FROM usuario WHERE email='$mail'");
                    if ($result->rowCount()) { //Esto es si encuentra 
                        return true;
                    } else
                        return false;
                } catch (Exception $ex) {
                    echo "<br><a href=index.php>IR al inicio</a><br>";
                    die('ERROR con la BD' . $ex->getMessage());
                }
            }
    
        public static function buscarUsuarioMailPass($mail,$pass) {
            try {
                $conex = new Conexion();
                $result = $conex->query("SELECT * FROM usuario WHERE email='$mail' AND password='$pass'");
                if ($result->rowCount()) { //Esto es si encuentra 
                    return true;
                } else
                    return false;
            } catch (Exception $ex) {
                echo "<br><a href=index.php>IR al inicio</a><br>";
                die('ERROR con la BD' . $ex->getMessage());
            }
        }
        
        public static function modificarUsuario(Usuario $usuario) {
            try {
                $conex = new Conexion();
                $conex->exec("update usuario set email='$usuario->mail', password='$usuario->password', "
                        . "nombre='$usuario->nombre', primerApellido='$usuario->primerApellido', segundoApellido='$usuario->segundoApellido', "
                        . "fechaNacimiento='$usuario->fechaNacimiento', pais='$usuario->pais', codigoPostal='$usuario->codigoPostal', telefono='$usuario->telefono', rol='$usaurio->rol',"
                        . "imagen='$usuario->imagen'  where id='$usuario->id'");
            } catch (Exception $ex) {
                echo "Error:" . $ex->getMessage();
            }
        }
    
        public static function obtenerUltimoUsuario() {
            try {
            $conex = new Conexion();
            $result = $conex->query("select * from usuario ORDER BY id DESC LIMIT 1");
            if($result->rowCount()) {
                $registro = $result->fetchObject();
                $id = intval($registro->id);
                return $id+1;
    
            } else{
                return 0;
            }
            //self::recuperarTodos();
            } catch (Exception $ex) {   
            }  
        }
    
        public static function obtenerRol($mail) {
            try {
            $conex = new Conexion();
            $result = $conex->query("select * from usuario WHERE email='".$mail."'");
            if($result->rowCount()) {
                $registro = $result->fetchObject();
                return $registro->rol;
    
            } else{
                return false;
            }
            //self::recuperarTodos();
            } catch (Exception $ex) {   
            }  
        }
        
        
    
    


}

