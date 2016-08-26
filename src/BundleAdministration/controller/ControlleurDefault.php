<?php
include_once './core/FrameController.php';

use core\FrameController as FController;

class ControlleurDefault extends  FController\FrameController {
	public function __construct($arg = null){
		parent::__construct($arg);}	public function indexAction(){
	echo 'Je suis le controlleur par defaut  de BundleAdministration et je fonctionne';
  }
}