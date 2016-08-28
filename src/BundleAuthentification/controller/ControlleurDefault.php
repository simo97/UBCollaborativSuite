<?php


class ControlleurDefault extends \Frame\Core\Controller {
    public function __construct($arg = null){
	parent::__construct($arg);
    }	
                
    public function indexAction(){
        //this method represent the authentification interface
        $data = array(
            'content'=> $this->includ('authentification', 'auth'),
            'bg_color'=>'blue'
        );
        $this->view->render($data,NULL,"Authentification - UB Collaboration suite");
    }
    
    /**
     * Description of this method
     * 
     * 
     * 
     */
    public function authAction(){
        if(isset($_POST['login']) && isset($_POST['pass'])){
            $log = is_string($_POST['login']) ? htmlentities($_POST['login']) : NULL;
            $pass = is_string($_POST['pass'])? htmlspecialchars($_POST['pass']) :NULL;
            
            $result = $this->_manager('utilisateur')->authentificate($log,$pass);
            if($result == FALSE){//in case of false result we redirect then user to the auth page with error messag
                $this->redirect('authentificatdion', 'default',NULL,'msg=Authentification Echoue');
            }
            //on succes case
            $this->_set_entity('utilisateur', $result);
            //we store the user data in session variable
            session_start();
            $_SESSION['nom'] = $this->_entity('utilisateur')->getNom();
            $_SESSION['prenom'] = $this->_entity('utilisateur')->getPrenom();
            $_SESSION['login'] = $this->_entity('utilisateur')->getLoggin();
            $_SESSION['nom'] = $this->_entity('utilisateur')->getNom();
            $_SESSION['matricule'] = $this->_entity('utilisateur')->getMatricule(); 
            $_SESSION['type'] = $this->_entity('utilisateur')->getType(); 
            
            /**
             * If the user is not and administrator we redirect him to dashboard bundle
             */
            if($this->_entity('utilisateur')->getType() != 'administrateur'){
                $this->redirect('dashboard', 'default');
            }
            $this->redirect('administration', 'default');
        }
    }
}