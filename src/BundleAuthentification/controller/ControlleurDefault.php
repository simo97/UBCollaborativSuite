<?php
include_once './core/FrameController.php';

use core\FrameController as FController;

class ControlleurDefault extends  FController\FrameController {
    public function __construct($arg = null){
	parent::__construct($arg);
    }	
                
    public function indexAction(){
        echo 'Je suis le controlleur par defaut  de BundleAuthentification et je fonctionne';
        $this->_entity('metting')->setId_u(5);
        echo $this->_entity('metting')->getId_u();
  }
}