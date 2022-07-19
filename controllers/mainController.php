<?php

class MainController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->view->render('main/index');
    }
    public function servicios()
    {
        $servicios = $this->model->getServicios();
        $this->view->servicios = $servicios;
        $this->view->render('main/servicios');
    }
    public function promociones()
    {
        $this->view->render('main/promociones');
    }
    public function contacto()
    {
        $this->view->render('main/contacto');
    }
    public function nosotros()
    {
        $this->view->render('main/nosotros');
    }
    public function galeria()
    {
        $this->view->render('main/galeria');
    }
    public function login()
    {
        $this->view->render('main/login');
    }
    public function crearCuenta()
    {
        $this->view->render('main/crearCuenta');
    }

    public function insert()
    {
        $nombre = $_POST['nombre'];
        $cedula = $_POST['cedula'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];

        $cliente = new Cliente($nombre, $apellido, $cedula, $telefono, $correo, $password);

        if ($this->model->insert($cliente)) {
            header('Location: index');
        }
    }

    public function validarLogin()
    {
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $cliente = $this->model->validarLogin($correo, $password);
        if ($cliente != null) {
            session_start();
            $this->view->cliente = $cliente;
            $_SESSION["correo"] = $correo;
            $_SESSION['idCliente'] = $cliente->id;
            header('Location: index');
        } else {
            header("Location: main/login");
        }
    }

    public function cerrarSesion()
    {
        session_start();
        session_destroy();
        $this->view->render('main/crearCuenta');
    }

    public function contratarServicio()
    {

        $fecha = $_POST['fecha'];
        $codigo = $_POST['codigo'];
        $idCliente = $_GET['idCliente'];
        $idServicio = $_GET['idServicio'];
        if ($this->model->insertContrato($fecha, $codigo, $idCliente, $idServicio)) {
            header('Location: index');
        }
    }
}
class Cliente
{
    public $nombre;
    public $apellido;
    public $cedula;
    public $telefono;
    public $correo;
    public $password;


    public function __construct($nombre, $apellido, $cedula, $telefono, $correo, $password)
    {
        $this->nombre = $nombre;
        $this->cedula = $cedula;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->apellido = $apellido;
        $this->password = $password;
    }
}
