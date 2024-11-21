<?php
require_once('modelo/indexmodel.php');
class IndexController{
    private $indexModel;
    public function __construct(){
        $this->indexModel = new IndexModel();
    }
    public static function index(){
        require_once("vista/index.php");
    }
    public static function Contacto(){
        require_once("vista/contacto.php");
    }
}
?>