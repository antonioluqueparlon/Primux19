<?php
require_once 'crud/Modelo/Conexion.php';
require_once 'crud/Modelo/Noticia.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NoticiaController
 *
 * @author cano_
 */
class NoticiaController {
    //FUNCIONA
    public static function insertarNoticia(Noticia $noti) {
        try {
            $conex = new Conexion;
            $conex-> exec("Insert into noticia (idUsuario, fecha, titulo,imagen, contenido, descripcion) values"
                    . "('$noti->idUsuario', '$noti->fecha','$noti->titulo','$noti->imagen',"
                    . "'$noti->contenido','$noti->descripcion')");
           
        } catch (PDOException $ex) {
            die('ERROR EN LA BD'.$ex->getMessage());
        }
        unset($conex); 
    }
    //FUNCIONA
    public static function borrarNoticia($id) {
        try {
        $conex = new Conexion();
        $conex->exec("delete from noticia where id='$id'");
        //self::recuperarTodos();
        } catch (Exception $ex) {   
        }  
    }
    //FUNCIONA
    public static function buscarNoticia($id) {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM noticia WHERE id='$id'");
            if ($result->rowCount()) { //Esto es si encuentra 
                $registro = $result->fetchObject();
                $noticia = new Noticia($registro->id, $registro->idUsuario, $registro->fecha, $registro->titulo, 
                        $registro->descripcion, $registro->contenido, $registro->imagen);
               
                return $noticia;
            } else
                return false;
        } catch (Exception $ex) {
            echo "<br><a href=index.php>IR al inicio</a><br>";
            die('ERROR con la BD' . $ex->getMessage());
        }
    }
    //FUNCIONA
    public static function recuperarTodasNoticias() {
        try {
            $conex = new Conexion();
            //PARA QUE VAYAN CAMBIANDO LAS NOTICIAS EN EL INDEX HACEMOS RAND Y LO LIMITAMOS A 4 QUE SON LAS TARJETAS
            // CON NOTICIAS QUE QUEREMOS QUE SALGAN
            $result = $conex->query("SELECT * FROM noticia ORDER BY RAND() LIMIT  4");
            if ($result->rowCount()) { //Esto es si encuentra 
                while ($registro = $result->fetchObject()) {
                    $noticia = new Noticia($registro->id, $registro->idUsuario, $registro->fecha,
                            $registro->titulo, $registro->descripcion, $registro->contenido, $registro->imagen);

                    //PARA QUE NO SE REPITA EL MISMO OBJETO PORQUE COGE LA MISMA REFERENCIA USAMOS MÉTODO CLONAR
                    $noticias[] = clone($noticia);
                }
                return $noticias;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            die("ERROR En la BD").$ex->getMessage();
        }
    }

    public static function recuperarTodasNoticiasOtras() {
        try {
            $conex = new Conexion();
            //PARA QUE VAYAN CAMBIANDO LAS NOTICIAS EN EL INDEX HACEMOS RAND Y LO LIMITAMOS A 4 QUE SON LAS TARJETAS
            // CON NOTICIAS QUE QUEREMOS QUE SALGAN
            $result = $conex->query("SELECT * FROM noticia ORDER BY RAND() LIMIT  4");
            if ($result->rowCount()) { //Esto es si encuentra 
                while ($registro = $result->fetchObject()) {
                    $noticia = new Noticia($registro->id, $registro->idUsuario, $registro->fecha,
                            $registro->titulo, $registro->descripcion, $registro->contenido, $registro->imagen);

                    //PARA QUE NO SE REPITA EL MISMO OBJETO PORQUE COGE LA MISMA REFERENCIA USAMOS MÉTODO CLONAR
                    $noticias[] = clone($noticia);
                }
                return $noticias;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            die("ERROR En la BD").$ex->getMessage();
        }
    }

    public static function recuperarTodasNoticiasUltimas1() {
        try {
            $conex = new Conexion();
            //PARA QUE VAYAN CAMBIANDO LAS NOTICIAS EN EL INDEX HACEMOS RAND Y LO LIMITAMOS A 4 QUE SON LAS TARJETAS
            // CON NOTICIAS QUE QUEREMOS QUE SALGAN
            $result = $conex->query("SELECT * FROM noticia ORDER BY RAND() LIMIT  4");
            if ($result->rowCount()) { //Esto es si encuentra 
                while ($registro = $result->fetchObject()) {
                    $noticia = new Noticia($registro->id, $registro->idUsuario, $registro->fecha,
                            $registro->titulo, $registro->descripcion, $registro->contenido, $registro->imagen);

                    //PARA QUE NO SE REPITA EL MISMO OBJETO PORQUE COGE LA MISMA REFERENCIA USAMOS MÉTODO CLONAR
                    $noticias[] = clone($noticia);
                }
                return $noticias;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            die("ERROR En la BD").$ex->getMessage();
        }
    }

    public static function recuperarTodasNoticiasUltimas2() {
        try {
            $conex = new Conexion();
            //PARA QUE VAYAN CAMBIANDO LAS NOTICIAS EN EL INDEX HACEMOS RAND Y LO LIMITAMOS A 4 QUE SON LAS TARJETAS
            // CON NOTICIAS QUE QUEREMOS QUE SALGAN
            $result = $conex->query("SELECT * FROM noticia ORDER BY RAND() LIMIT  4");
            if ($result->rowCount()) { //Esto es si encuentra 
                while ($registro = $result->fetchObject()) {
                    $noticia = new Noticia($registro->id, $registro->idUsuario, $registro->fecha,
                            $registro->titulo, $registro->descripcion, $registro->contenido, $registro->imagen);

                    //PARA QUE NO SE REPITA EL MISMO OBJETO PORQUE COGE LA MISMA REFERENCIA USAMOS MÉTODO CLONAR
                    $noticias[] = clone($noticia);
                }
                return $noticias;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            die("ERROR En la BD").$ex->getMessage();
        }
    }
    
    //FUNCIONA CORRECTAMENTE
    public static function recuperarNoticiaContienePalabraClave($palabra) {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM noticia where titulo like '%$palabra%' or descripcion like '%$palabra%' or contenido like '%$palabra%'");
            if ($result->rowCount()) { //Esto es si encuentra 
                while ($registro = $result->fetchObject()) {
                    $noticia = new Noticia($registro->id, $registro->idUsuario, $registro->fecha,
                            $registro->titulo, $registro->descripcion, $registro->contenido, $registro->imagen);

                    //PARA QUE NO SE REPITA EL MISMO OBJETO PORQUE COGE LA MISMA REFERENCIA USAMOS MÉTODO CLONAR
                    $noticias[] = clone($noticia);
                }
                return $noticias;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            die("ERROR En la BD").$ex->getMessage();
        }
    }
    //FUNCIONA
    public static function recuperarNoticiaUsuario ($idUsu) {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT  * FROM noticia  where idUsuario = $idUsu ");
            if ($result->rowCount()) { //Esto es si encuentra 
                while ($registro = $result->fetchObject()) {
                    $noticia = new Noticia($registro->id, $registro->idUsuario, $registro->fecha,
                            $registro->titulo, $registro->descripcion, $registro->contenido, $registro->imagen);
                    //PARA QUE NO SE REPITA EL MISMO OBJETO PORQUE COGE LA MISMA REFERENCIA USAMOS MÉTODO CLONAR
                    $noticias[] = clone($noticia);
                }
                return $noticias;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            die("ERROR En la BD").$ex->getMessage();
        }
    }
    //EN PRUEBAS
    public static function actualizarNoticia(Noticia $noticia) {
        try {
            $conex = new Conexion();
            $conex->exec("update noticia set id=$noticia->id, idUsuario=$noticia->idUsuario, "
                    . "fecha=$noticia->fecha, titulo=$noticia->titulo, imagen=$noticia->imagen, "
                    . "contenido=$noticia->descripcion  where id=$noticia->id");
        } catch (Exception $ex) {
            echo "Error:" . $ex->getMessage();
        }
    }

    public static function recuperarNoticiaSeccionPS() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM noticia where seccion like 'Playstation' or descripcion like 'Playstation' or contenido like 'Playstation'");
            if ($result->rowCount()) { //Esto es si encuentra 
                while ($registro = $result->fetchObject()) {
                    $noticia = new Noticia($registro->id, $registro->idUsuario, $registro->fecha,
                            $registro->titulo, $registro->descripcion, $registro->contenido, $registro->imagen);

                    //PARA QUE NO SE REPITA EL MISMO OBJETO PORQUE COGE LA MISMA REFERENCIA USAMOS MÉTODO CLONAR
                    $noticias[] = clone($noticia);
                }
                return $noticias;
            } else {
                return false;
            }
        } catch (PDOException $ex) {
            die("ERROR En la BD").$ex->getMessage();
        }
    }
    
    
}
