<?php
class Database{
    private $host;
    private $user;
    private $db;
    private $password;
    private $charset;

    public function __construct(){
        $this->host= constant('HOST');
        $this->user= constant('USER');
        $this->db= constant('DB');
        $this->password= constant('PASSWORD');
        $this->charset= constant('CHARSET');
    }

    public function conect(){
        try{
            $conection='mysql:host='.$this->host.';dbname='.$this->db.';charset='.$this->charset;
            $options=[
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
    
            $pdo= new PDO($conection,$this->user,$this->password,$options);
            return $pdo;
    
        }catch(PDOException $e){
            print_r('ERROR DE CONEXION: '.$e->getMessage());
            
        }
        
    }
}
?>