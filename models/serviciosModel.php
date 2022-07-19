<?php
class ServiciosModel extends Model{
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

    public function insert(Servicio $servicio){
        
        try {
            $conexion=$this->database->conect();                
            $sql = "INSERT INTO `chivas` (`nombre`, `tamano`, `matricula`, `numAsientos`, `propietario`, `cedula`, `telefono`, `correo`, `ciudad`, `imagen`, `costo`, `itinerario`, `descripcion`) VALUES (:nombre, :tamano, :matricula, :numAsientos, :propietario, :cedula, :telefono, :correo, :ciudad, :imagen, :costo, :itinerario, :descripcion);";
            $conexion->prepare($sql)->execute(array( 
                'nombre'=>$servicio->nombre,
                'tamano'=>$servicio->tamano,
                'matricula'=>$servicio->matricula,
                'numAsientos'=>$servicio->numAsientos,
                'propietario'=>$servicio->propietario,
                'cedula'=>$servicio->cedula,
                'telefono'=>$servicio->telefono,
                'correo'=>$servicio->correo,
                'ciudad'=>$servicio->ciudad,
                'imagen'=>$servicio->nombreImagen,
                'costo'=>$servicio->costo,
                'itinerario'=>$servicio->itinerario,
                'descripcion'=>$servicio->descripcion,
                
            ));
           return true;
           
 
        } catch (Exception $e) {
            echo($e->getMessage());
            return false;
        }
    }

    public function update(Servicio $servicio, $id){
        
        try {
            $conexion=$this->database->conect();                
            $sql = "UPDATE `chivas` SET `nombre` = :nombre, `tamano` = :tamano, `matricula` = :matricula, `numAsientos` = :numAsientos, `propietario` = :propietario, `cedula` = :cedula, `telefono` = :telefono, `correo` = :correo, `ciudad` = :ciudad, `costo` = :costo, `itinerario` = :itinerario, `descripcion` = :descripcion WHERE `chivas`.`id` = $id;";
            $conexion->prepare($sql)->execute(array( 
                'nombre'=>$servicio->nombre,
                'tamano'=>$servicio->tamano,
                'matricula'=>$servicio->matricula,
                'numAsientos'=>$servicio->numAsientos,
                'propietario'=>$servicio->propietario,
                'cedula'=>$servicio->cedula,
                'telefono'=>$servicio->telefono,
                'correo'=>$servicio->correo,
                'ciudad'=>$servicio->ciudad,
                'costo'=>$servicio->costo,
                'itinerario'=>$servicio->itinerario,
                'descripcion'=>$servicio->descripcion,
            ));
           return true;
 
        } catch (Exception $e) {
            echo($e->getMessage());
            return false;
        }
    }

    public function delete($id){
        
        try {
            $conexion=$this->database->conect();                
            $sql = "DELETE FROM chivas WHERE `chivas`.`id` = $id";
            $conexion->prepare($sql)->execute();
           return true;
 
        } catch (Exception $e) {
            echo($e->getMessage());
            return false;
        }
    }

    public function getServicioId($id){
        try {
            $conexion=$this->database->conect(); 
            $usuarios = $conexion->prepare("SELECT * FROM chivas WHERE id=$id");
            $usuarios->execute();
            $usuario=$usuarios->fetchAll(PDO::FETCH_OBJ)[0];
            return $usuario;        
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /* 


    



 */


}
