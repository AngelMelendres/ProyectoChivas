<?php
//clase base de model
class Model{
    function __construct(){
        $this->database= new Database();
    }
}
?>