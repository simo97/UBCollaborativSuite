<?php

class ControlleurDefault extends Frame\Core\Controller {
    
    public function __construct($arg = null){
	parent::__construct($arg);  
        
    }	
        
    /**
     * This method will be the entry point for adminstration panel which is use by 
     * the administrator
     */
    public function indexAction(){
        if(!isset($_SESSION['id_user'])){
            header('location:http://localhost/UB_Collaboration');
        }
        //session_start();
	$data['side_bar'] = $this->includ('administration', 'side_bar');
        $data['content'] = $this->includ('administration', 'content');
        
        $this->view->render($data,'admin',"acceuil",true);
    }
}