<?php 

class AdminController extends Controller{
    function __construct(){
        parent::__construct();
        
    }

    public function index(){
        $this->view->render('admin/index');
    }
    public function servicios(){
        //aqio si se muestra
        $servicios=$this->model->getServicios();
        $this->view->servicios=$servicios;
        $this->view->render('admin/servicios/index');
    }
    public function clientes(){
        $this->view->render('admin/servicios/index');
    }
    public function contratos(){
        $this->view->render('admin/contratos/index');
    }
    public function opciones(){
        $this->view->render('admin/opciones');
    }
    public function login(){
        $this->view->render('admin/login');
    }

    
}



