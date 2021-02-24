<?php

require_once 'crud/Modelo/conexion.php';
require_once 'crud/Modelo/Comentario.php';

class ComentarioController {

    //FUNCIONA
    public static function insertarComentario(Comentario $coment) {
        try {
            $conex = new Conexion;
            $conex->exec("Insert into comentario (idUsuario, idNoticia, cuerpo, puntuacion, fecha) values"
                    . "('$coment->idUsuario', '$coment->idNoticia', '$coment->cuerpo', '$coment->puntuacion' ,'$coment->fecha')");
        } catch (PDOException $ex) {
            die('ERROR EN LA BD' . $ex->getMessage());
        }
        unset($conex);
    }

    //FUNCIONA
    public static function borrarComentario($id) {
        try {
            $conex = new Conexion();
            $conex->exec("delete from comentario where id='$id'");
            //self::recuperarTodos();
        } catch (Exception $ex) {
            
        }
    }

    //FUNCIONA
    public static function buscarComentario($id) {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM comentario as c  WHERE id='$id'");
            if ($result->rowCount()) { //Esto es si encuentra 
                $registro = $result->fetchObject();
                $comentario = new Comentario($registro->id, $registro->idUsuario, $registro->idNoticia, $registro->cuerpo, $registro->puntuacion, $registro->fecha);
                return $comentario;
            } else
                return false;
        } catch (Exception $ex) {
            echo "<br><a href=index.php>IR al inicio</a><br>";
            die('ERROR con la BD' . $ex->getMessage());
        }
    }

    //EN PRUEBAS
    public static function actualizarComentario(Comentario $comentario, $idComentario) {
        try {
            $conex = new Conexion();
            $conex->exec("update comentario set id='$comentario->id', idUsuario='$comentario->idUsuario', "
                    . "idNoticia='$comentario->idNoticia', cuerpo='$comentario->cuerpo', puntuacion='$comentario->puntuacion' ,fecha='$comentario->fecha'  where id='$idComentario'");
        } catch (Exception $ex) {
            echo "Error:" . $ex->getMessage();
        }
    }

}
