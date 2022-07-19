<?php
class ContratosModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getContratos()
    {
        try {
            $conexion = $this->database->conect();
            $prepare = $conexion->prepare("
            SELECT
                idChiva,
                idCliente,
                contratos.id AS idContrato,
                contratos.codigo AS codigoContrato,
                contratos.fecha AS fechaContrato,
                clientes.cedula AS cedulaCliente,
                clientes.nombre as nombreCliente,
                clientes.apellido AS apellidoCliente,
                clientes.correo AS correoCliente,
                clientes.telefono AS telefonoCliente,
                chivas.nombre AS nombreChiva,
                chivas.tamano AS tamanoChiva,
                chivas.matricula,
                chivas.numAsientos,
                chivas.propietario,
                chivas.cedula AS cedulaPropietario,
                chivas.telefono AS telefonoPropietario,
                chivas.correo AS correoPropietario,
                chivas.ciudad,
                chivas.imagen,
                chivas.costo,
                chivas.itinerario,
                chivas.descripcion
            FROM
                contratos
                INNER JOIN chivas ON chivas.id = contratos.idChiva
                INNER JOIN clientes ON clientes.id = contratos.idCliente;
            ");
            $prepare->execute();
            $contratos = $prepare->fetchAll(PDO::FETCH_OBJ);

            return $contratos;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getServicios()
    {
        try {
            $conexion = $this->database->conect();
            $prepare = $conexion->prepare("select * from chivas");
            $prepare->execute();
            $servicios = $prepare->fetchAll(PDO::FETCH_OBJ);

            return $servicios;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getClientes()
    {
        try {
            $conexion = $this->database->conect();
            $prepare = $conexion->prepare("select * from clientes");
            $prepare->execute();
            $servicios = $prepare->fetchAll(PDO::FETCH_OBJ);

            return $servicios;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function insert(Contrato $contrato)
    {
        try {
            $conexion = $this->database->conect();
            $sql = "INSERT INTO `contratos` (`idChiva`, `idCliente`, `codigo`, `fecha`) VALUES (:idChiva,:idCliente,:codigo,:fecha);";
            $conexion->prepare($sql)->execute(array(
                'idChiva' => $contrato->idServicio,
                'idCliente' => $contrato->idCliente,
                'codigo' => $contrato->codigo,
                'fecha' => $contrato->fecha,

            ));
            print_r($contrato);
            return true;
        } catch (Exception $e) {
            echo ($e->getMessage());
            return false;
        }
    }

    public function getContratoId($id)
    {
        try {
            $conexion = $this->database->conect();
            $contratos = $conexion->prepare("SELECT * FROM contratos WHERE id=$id");
            $contratos->execute();
            $contrato = $contratos->fetchAll(PDO::FETCH_OBJ)[0];
            return $contrato;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getContratoIdd($id)
    {
        try {
            $conexion = $this->database->conect();
            $prepare = $conexion->prepare("
            SELECT
                idChiva,
                idCliente,
                contratos.id AS idContrato,
                contratos.codigo AS codigoContrato,
                contratos.fecha AS fechaContrato,
                clientes.cedula AS cedulaCliente,
                clientes.nombre as nombreCliente,
                clientes.apellido AS apellidoCliente,
                clientes.correo AS correoCliente,
                clientes.telefono AS telefonoCliente,
                chivas.nombre AS nombreChiva,
                chivas.tamano AS tamanoChiva,
                chivas.matricula,
                chivas.numAsientos,
                chivas.propietario,
                chivas.cedula AS cedulaPropietario,
                chivas.telefono AS telefonoPropietario,
                chivas.correo AS correoPropietario,
                chivas.ciudad,
                chivas.imagen,
                chivas.costo,
                chivas.itinerario,
                chivas.descripcion
            FROM
                contratos
                INNER JOIN chivas ON chivas.id = contratos.idChiva
                INNER JOIN clientes ON clientes.id = contratos.idCliente
            WHERE 
                contratos.id=$id;
            ");
            $prepare->execute();
            $contrato = $prepare->fetchAll(PDO::FETCH_OBJ)[0];

            return $contrato;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function update(Contrato $Contrato, $id)
    {

        try {
            $conexion = $this->database->conect();
            $sql = "UPDATE `contratos` SET `fecha` = :fecha, `idChiva` = :idServicio, `codigo` = :codigo WHERE `contratos`.`id` = $id;";
            $conexion->prepare($sql)->execute(array(
                'fecha' => $Contrato->fecha,
                'idServicio' => $Contrato->idServicio,
                'codigo' => $Contrato->codigo,
                
            ));
            return true;
        } catch (Exception $e) {
            echo ($e->getMessage());
            return false;
        }
    }
    public function delete($id){
        
        try {
            $conexion=$this->database->conect();                
            $sql = "DELETE FROM contratos WHERE `contratos`.`id` = $id";
            $conexion->prepare($sql)->execute();
           return true;
 
        } catch (Exception $e) {
            echo($e->getMessage());
            return false;
        }
    }
}
