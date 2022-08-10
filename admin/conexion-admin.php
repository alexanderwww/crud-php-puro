<?php

class conexionBDD{
    private $servidor='localhost';
    private $usuario='root';
    private $contrasena='';
    private $conexion;

    public function __construct(){

        try{
            $this->conexion=new PDO("mysql:host=$this->servidor;dbname=crud",$this->usuario,$this->contrasena);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $error){
            return 'Error al conectarse a la BDd'.$error;
        }
    }

    public function ejecutar($codigoSQL){
        $this->conexion->exec($codigoSQL);
        return $this->conexion->lastInsertId();
    }

    public function consultar($codigoSQL2){
        // https://www.baulphp.com/consultar-datos-mysql-mediante-pdo-ejemplos/
        $codigoAlmacenado=$this->conexion->prepare($codigoSQL2);
        $codigoAlmacenado->execute();
        return $codigoAlmacenado->fetchAll();

    }

    public function consultarID($codigoSQL3){
        $codigo=$this->conexion->prepare($codigoSQL3);
        $codigo->execute();
        return $codigo->fetchAll();

    }
}

?>