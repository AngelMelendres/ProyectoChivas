<?php
class ClientesController extends Controller{
    function __construct(){
        parent::__construct();

    }
    //a vistas
    public function index(){
        $clientes=$this->model->getclientes();
        $this->view->clientes=$clientes; 
        $this->view->render('admin/clientes/index');
    }
    public function registrar(){
        $this->view->render('admin/clientes/registrarCliente');
    }
    public function editar(){
        $id=$_GET['id'];
        $cliente=$this->model->getClienteId($id);
        $this->view->cliente=$cliente;
        $this->view->render('admin/clientes/editarCliente');
        
    }
    


    public function insert(){
        $nombre=$_POST['nombre'];
        $cedula=$_POST['cedula'];
        $apellido=$_POST['apellido'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['correo'];
        $password=$_POST['password'];

        $cliente= new Cliente($nombre,$apellido,$cedula,$telefono,$correo,$password);
       
        if($this->model->insert($cliente)){
            header('Location: index');

        }
        
    }

    public function update(){
        $id=$_GET['id'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $cedula=$_POST['cedula'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['correo'];
        $password=$_POST['password'];


        $cliente= new Cliente($cedula,$nombre,$apellido,$telefono,$correo,$password);
       
        if($this->model->update($cliente,$id)){
            header('Location: index');

        }
    }

    public function eliminar(){
        $id=$_GET['id'];
        if($this->model->delete($id)){
            header('Location: index');
        }
    }
}



class Cliente{
    public $nombre;
    public $apellido;
    public $cedula;
    public $telefono;
    public $correo;
    public $password;
   

    public function __construct( $nombre,$apellido,$cedula,$telefono,$correo,$password){
     $this->nombre =$nombre ;
     $this->cedula =$cedula ;
     $this->telefono =$telefono ;
     $this->correo =$correo ;
     $this->apellido=$apellido;
     $this->password=$password;
    }
}