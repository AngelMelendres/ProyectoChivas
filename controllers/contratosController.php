<?php
class ContratosController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    //a vistas
    public function index()
    {
        $contratos = $this->model->getContratos();
        $this->view->contratos = $contratos;
        $this->view->render('admin/contratos/index');
    }
    public function registrar()
    {
        $clientes = $this->model->getClientes();
        $this->view->clientes = $clientes;
        $servicios = $this->model->getServicios();
        $this->view->servicios = $servicios;
        $this->view->render('admin/contratos/registrarContrato');
    }

    public function insert()
    {
        $fecha = $_POST['fecha'];
        $codigo = $_POST['codigo'];
        $idCliente = $_POST['cliente'];
        $idServicio = $_POST['servicio'];

        $contrato = new contrato($fecha, $codigo, $idCliente, $idServicio);
        if ($this->model->insert($contrato)) {
            header('Location: index');
        }
    }

    public function editar()
    {
        $id = $_GET['id'];
        $clientes = $this->model->getClientes();
        $this->view->clientes = $clientes;
        $servicios = $this->model->getServicios();
        $this->view->servicios = $servicios;

        $contrato = $this->model->getContratoId($id);
        $this->view->contrato = $contrato;
        $this->view->render('admin/contratos/editarContrato');
    }
    public function eliminar()
    {
        $id = $_GET['id'];
        if($this->model->delete($id)){
            header('Location: index');
        } 
    }
    public function ver()
    {
        $id = $_GET['id'];
        $contrato = $this->model->getContratoIdd($id);
        $this->view->contrato = $contrato;
        $this->view->render('admin/contratos/verContrato');
    }
    public function update()
    {
        $id = $_GET['id'];
        $fecha = $_POST['fecha'];
        $codigo = $_POST['codigo'];
        $idCliente = $_GET['idCliente'];
        $idServicio = $_POST['idServicio'];

        $contrato = new Contrato($fecha, $codigo, $idCliente, $idServicio);

        if ($this->model->update($contrato, $id)) {
            header('Location: index');
        }
    }
}



class Contrato
{
    public $fecha;
    public $codigo;
    public $idCliente;
    public $idServicio;


    public function __construct($fecha, $codigo, $idCliente, $idServicio)
    {
        $this->fecha = $fecha;
        $this->codigo = $codigo;
        $this->idCliente = $idCliente;
        $this->idServicio = $idServicio;
    }
}
