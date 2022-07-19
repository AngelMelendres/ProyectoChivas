<?php
class AdminModel extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function getServicios(){
        try {
            $conexion=$this->database->conect();
            $prepare=$conexion->prepare("select * from chivas");
            $prepare->execute();
            $servicios=$prepare->fetchAll(PDO::FETCH_OBJ);
            
            return $servicios;
                    
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}