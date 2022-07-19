<?php
class MainModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function insert(Cliente $cliente)
    {

        try {
            $conexion = $this->database->conect();
            $sql = "INSERT INTO `clientes` (`cedula`,`nombre`,`apellido`, `telefono`, `correo`,`password`) VALUES (:cedula, :nombre, :apellido, :telefono, :correo,:password);";
            $conexion->prepare($sql)->execute(array(
                'cedula' => $cliente->cedula,
                'nombre' => $cliente->nombre,
                'apellido' => $cliente->apellido,
                'telefono' => $cliente->telefono,
                'correo' => $cliente->correo,
                'password' => $cliente->password,


            ));
            return true;
        } catch (Exception $e) {
            echo ($e->getMessage());
            return false;
        }
    }

    public function insertContrato($fecha, $codigo, $idCliente, $idServicio)
    {
        try {
            $conexion = $this->database->conect();
            $sql = "INSERT INTO `contratos` (`idChiva`, `idCliente`, `codigo`, `fecha`) VALUES (:idChiva,:idCliente,:codigo,:fecha);";
            $conexion->prepare($sql)->execute(array(
                'idChiva' => $idServicio,
                'idCliente' => $idCliente,
                'codigo' => $codigo,
                'fecha' => $fecha,

            ));
            return true;
        } catch (Exception $e) {
            echo ($e->getMessage());
            return false;
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

    public function validarLogin($correo, $password)
    {
        try {

            $conexion = $this->database->conect();
            $clientes = $conexion->prepare("select * from clientes WHERE correo= :correo AND password= $password");
            $clientes->execute(array('correo' => $correo));
            if ($clientes->rowCount() != 0) {
                $cliente = $clientes->fetchAll(PDO::FETCH_OBJ)[0];
                return $cliente;
            } else {
                return null;
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
