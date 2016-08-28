<?php


class ControlleurDefault extends \Frame\Core\Controller {
	public function __construct($arg = null){
		parent::__construct($arg);}	public function indexAction(){
	echo 'Je suis le controlleur par defaut  de BundleDashboard et je fonctionne';
  }
}