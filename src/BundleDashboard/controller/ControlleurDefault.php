<?php

class ControlleurDefault extends Frame\Core\Controller{
    
    public function __construct($arg = null){
	parent::__construct($arg);
    }	
                
    public function indexAction(){
        if(!isset($_SESSION['id_user'])){
            header('location:http://localhost/UB_Collaboration');
        }
	//o 'Je suis le controlleur par defaut  de BundleDashboard et je fonctionne';
        $data['content'] = $this->includ('dashboard', 'content');
        $data['side_bar'] = $this->includ('dashboard', 'side_bar_prof'); 
        $this->view()->render($data,'common',"Panneau - ".$_SESSION['libelle_type'],TRUE);
    }
}