<?php
class ServiciosController extends Controller{
    function __construct(){
        parent::__construct();

    }
    //a vistas
    public function index(){
        $servicios=$this->model->getServicios();
        $this->view->servicios=$servicios;
        $this->view->render('admin/servicios/index');
    }

    public function registrar(){
        $this->view->render('admin/servicios/registrarServicio');
    }

    
    public function editar(){
        $id=$_GET['id'];
        $servicio=$this->model->getServicioId($id);
        $this->view->servicio=$servicio;
        $this->view->render('admin/servicios/editarServicio');
        
    }
    public function ver(){
        $id=$_GET['id'];
        $servicio=$this->model->getServicioId($id);
        $this->view->servicio=$servicio;
        $this->view->render('admin/servicios/verServicio');
        
    }


    public function insert(){
        $nombre=$_POST['nombre'];
        $tamano=$_POST['tamano'];
        $matricula=$_POST['matricula'];
        $numAsientos=$_POST['numAsientos'];
        $propietario=$_POST['propietario'];
        $cedula=$_POST['cedula'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['correo'];
        $ciudad=$_POST['ciudad'];
        $imagen=$_FILES['imagen'];
        $costo=$_POST['costo'];
        $itinerario=$_POST['itinerario'];
        $descripcion=$_POST['descripcion'];

        $servicio= new Servicio($nombre,$tamano,$matricula,$numAsientos,$propietario,$cedula,$telefono,$correo,$ciudad,$imagen,$costo,$itinerario,$descripcion);
       
        $servicio->validarImagen();
        if($this->model->insert($servicio)){
            header('Location: index');

        }
        
    }

    public function update(){
        $id=$_GET['id'];
        $nombre=$_POST['nombre'];
        $tamano=$_POST['tamano'];
        $matricula=$_POST['matricula'];
        $numAsientos=$_POST['numAsientos'];
        $propietario=$_POST['propietario'];
        $cedula=$_POST['cedula'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['correo'];
        $ciudad=$_POST['ciudad'];
        $costo=$_POST['costo'];
        $itinerario=$_POST['itinerario'];
        $descripcion=$_POST['descripcion'];

        $servicio= new Servicio($nombre,$tamano,$matricula,$numAsientos,$propietario,$cedula,$telefono,$correo,$ciudad,'',$costo,$itinerario,$descripcion);
       
        print_r($servicio);
        if($this->model->update($servicio,$id)){
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


class Servicio{
    public $nombre;
    public $tamano;
    public $matricula;
    public $numAsientos;
    public $propietario;
    public $cedula;
    public $telefono;
    public $correo;
    public $ciudad;
    public $imagen;
    public $costo;
    public $itinerario;
    public $descripcion;
    public $nombreImagen;

    public function __construct( $nombre,$tamano,$matricula,$numAsientos,$propietario,$cedula,$telefono,$correo,$ciudad,$imagen,$costo,$itinerario,$descripcion){
     $this->nombre =$nombre ;
     $this->tamano = $tamano;
     $this->matricula =$matricula ;
     $this->numAsientos =$numAsientos ;
     $this->propietario =$propietario ;
     $this->cedula =$cedula ;
     $this->telefono =$telefono ;
     $this->correo =$correo ;
     $this->ciudad = $ciudad;
     $this->imagen =$imagen ;
     $this->costo =$costo ;
     $this->itinerario =$itinerario ;
     $this->descripcion =$descripcion ;
    }

    public function validarDAtos(){
        print_r($this->imagen['name']);
    }

    public function validarImagen(){
        $nombre_img = $this->imagen['name'];
        if (!empty($this->imagen['name'])) {
            if (($this->imagen["type"] == "image/gif") || ($this->imagen["type"] == "image/jpeg") || ($this->imagen["type"] == "image/jpg") || ($this->imagen["type"] == "image/png")) {
                $directorio = $_SERVER['DOCUMENT_ROOT'].'/proyectoChivas/public/img/';
                move_uploaded_file($this->imagen['tmp_name'], $directorio . $nombre_img);
                
            } else {
                echo "No se puede subir una imagen con ese formato ";
            }
        }
        $this->nombreImagen=$this->imagen['name'];

    }
}
