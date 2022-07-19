<?php

require_once 'controllers/errorController.php';

class App{

    public $controllerPath;
    
    function __construct(){

        $url= isset ($_GET['url']) ? $_GET['url'] : null ;

        $url=rtrim($url,'/');
        $url=explode('/',$url);

        if(empty($url[0])){
            $archivoController= 'controllers/mainController.php';
            require_once $archivoController;
            $controller=new MainController();
            $controller->loadModel('main');
            $controller->index();
            
            return false;
        }

        
        if(empty($url[2])){
            $controllerPath=$url[0];
            $archivoController= 'controllers/' . $controllerPath . 'Controller.php';
        }else{
            $controllerPath=$url[1];
            $archivoController= 'controllers/'.$controllerPath .'Controller.php';
        }


        if(file_exists($archivoController)){
            require_once $archivoController;
            $controllerName=$controllerPath.'Controller';
            $controller= new $controllerName;
            $controller->loadModel($controllerPath);

            if(isset($url[2])){
                $controller->{$url[2]}();  // la entrada se transforma en metodo
                return;
            }
            if(isset($url[1])){
                $controller->{$url[1]}();  // la entrada se transforma en metodo

            }else{
                $controller->index();
            }
        }else{
            $controller=new classError();
        }

    }

}
