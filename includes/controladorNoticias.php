<?php

include_once('conexion.php');
include_once('Noticia.php') ;


class controladorNoticias {

    public static function SeleccionarNoticia(Noticia $alq) {
        try {
            $conex = new conexion();
            $conex->exec("select enlace from noticia where id='1'");
        } catch (PDOException $ex) {
            die('ERROR EN LA BD' . $ex->getMessage());
        }
        unset($conex);
    }

}
?>

