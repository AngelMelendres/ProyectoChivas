<?php
class ClientesModel extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function getClientes(){
        try {
            $conexion=$this->database->conect();
            $prepare=$conexion->prepare("select * from clientes");
            $prepare->execute();
            $clientes=$prepare->fetchAll(PDO::FETCH_OBJ);
            
            return $clientes;
                    
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function insert(Cliente $cliente){
        
        try {
            $conexion=$this->database->conect();                
            $sql = "INSERT INTO `clientes` (`cedula`,`nombre`,`apellido`, `telefono`, `correo`,`password`) VALUES (:cedula, :nombre, :apellido, :telefono, :correo,:password);";
            $conexion->prepare($sql)->execute(array( 
                'cedula'=>$cliente->cedula,
                'nombre'=>$cliente->nombre,
                'apellido'=>$cliente->apellido,
                'telefono'=>$cliente->telefono,
                'correo'=>$cliente->correo,
                'password'=>$cliente->password,
                
                
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
            $sql = "DELETE FROM clientes WHERE `clientes`.`id` = $id";
            $conexion->prepare($sql)->execute();
           return true;
 
        } catch (Exception $e) {
            echo($e->getMessage());
            return false;
        }
    }

    public function update(Cliente $cliente, $id){
        
        try {
            $conexion=$this->database->conect();                
            $sql = "UPDATE `clientes` SET `cedula` = :cedula, `nombre` = :nombre, `apellido` = :apellido, `telefono` = :telefono, `correo` = :correo WHERE `clientes`.`id` = $id;";
            $conexion->prepare($sql)->execute(array( 
                'cedula'=>$cliente->cedula,
                'nombre'=>$cliente->nombre,
                'apellido'=>$cliente->apellido,
                'telefono'=>$cliente->telefono,
                'correo'=>$cliente->correo,
                
            ));
           return true;
 
        } catch (Exception $e) {
            echo($e->getMessage());
            return false;
        }
    }
    public function getClienteId($id){
        try {
            $conexion=$this->database->conect(); 
            $cliente = $conexion->prepare("SELECT * FROM clientes WHERE id=$id");
            $cliente->execute();
            $usuario=$cliente->fetchAll(PDO::FETCH_OBJ)[0];
            return $usuario;        
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}