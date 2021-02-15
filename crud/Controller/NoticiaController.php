<?php

require_once 'crud/Modelo/conexion.php';
require_once 'crud/Modelo/Noticia.php';


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
            $result = $conex->query("SELECT * FROM noticia as n  WHERE id='$id'");
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

    public static function buscarUsuarioEnNoticia($idNoticia, $idUsuario) {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT nombre FROM usuario as usu, noticia as n WHERE n.id='$idNoticia' and n.idUsuario=$idUsuario and n.idUsuario=usu.id");
            if ($result->rowCount()) { //Esto es si encuentra 
                  $registro= $result->fetchObject();             
                return $registro->nombre;
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

    public static function recuperarNoticiaSeccionXBOX() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM noticia where seccion like 'Xbox' or descripcion like 'Xbox' or contenido like 'Xbox'");
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

    public static function recuperarNoticiaSeccionNintendo() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM noticia where seccion like 'Nintendo' or descripcion like 'Nintendo' or contenido like 'Nintendo'");
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

    public static function recuperarNoticiaSeccionPC() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM noticia where seccion like 'PC' or descripcion like 'PC' or contenido like 'PC'");
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

    public static function recuperarNoticiaSeccionWindows() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM noticia where seccion like 'Windows' or descripcion like 'Windows' or contenido like 'Windows'");
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

    public static function recuperarNoticiaSeccionOtros() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM noticia where seccion like 'Otros' or descripcion like 'Otros' or contenido like 'Otros'");
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

    public static function recuperarNoticiaSeccionLinux() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM noticia where seccion like 'Linux' or descripcion like 'Linux' or contenido like 'Linux'");
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

    public static function recuperarNoticiaSeccionMoviles() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM noticia where seccion like 'Movil' or descripcion like 'Movil' or contenido like 'Movil'");
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

    public static function recuperarNoticiaSeccionFutbol() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM noticia where seccion like 'Futbol' or descripcion like 'Futbol' or contenido like 'Futbol'");
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

    public static function recuperarNoticiaSeccionCiclismo() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM noticia where seccion like 'Ciclismo' or descripcion like 'Ciclismo' or contenido like 'Ciclismo'");
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

    public static function recuperarNoticiaSeccionBaloncesto() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM noticia where seccion like 'Baloncesto' or descripcion like 'Baloncesto' or contenido like 'Baloncesto'");
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

    public static function recuperarNoticiaSeccionTenis() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM noticia where seccion like 'Tenis' or descripcion like 'Tenis' or contenido like 'Tenis'");
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

    public static function recuperarNoticiaSeccionRally() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM noticia where seccion like 'Rally' or descripcion like 'Rally' or contenido like 'Rally'");
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

    public static function recuperarNoticiaSeccionF1() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM noticia where seccion like 'Formula1' or descripcion like 'Formula1' or contenido like 'Formula1'");
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

    public static function recuperarNoticiaSeccionFormulaE() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM noticia where seccion like 'FormulaE' or descripcion like 'FormulaE' or contenido like 'FormulaE'");
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

    public static function recuperarNoticiaSeccionMotoGP() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM noticia where seccion like 'MotoGP' or descripcion like 'MotoGP' or contenido like 'MotoGP'");
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

    public static function recuperarNoticiasUltimasNoticias() {
        try {
            $conex = new Conexion();
            //PARA QUE VAYAN CAMBIANDO LAS NOTICIAS EN EL INDEX HACEMOS RAND Y LO LIMITAMOS A 4 QUE SON LAS TARJETAS
            // CON NOTICIAS QUE QUEREMOS QUE SALGAN
            $result = $conex->query("SELECT * FROM noticia ORDER BY fecha desc LIMIT  3");
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
