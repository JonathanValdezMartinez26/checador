<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use \Core\MasterDom;
use \Core\Controller;
//use \App\models\Test as TestDao;

class Procesos extends Controller{

    function __construct(){
        parent::__construct();
        $this->_contenedor = new Contenedor;
        View::set('header',$this->_contenedor->header());
        View::set('footer',$this->_contenedor->footer());
    }

    public function docentes(){

        View::render('tabla_procesos');
    }
}
