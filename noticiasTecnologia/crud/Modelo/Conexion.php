<?php 

class Conexion extends PDO { //O puede extender de mysqli segun vayamos a utilizar uno u otro
    private $dsn="mysql:host=localhost;dbname=technoteam;charset=utf8mb4";
    private $usu="TechnoTeam";
    private $pass="1234";
    private $opciones=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
    
    public function __construct() {
        parent::__construct($this->dsn, $this->usu, $this->pass, $this->opciones);
    }
}
?>