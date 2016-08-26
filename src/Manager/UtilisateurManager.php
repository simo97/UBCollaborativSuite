<?php

require_once 'Manager.php';
require_once './src/Entity/UtilisateurEntity.php';

/**
 * Description of UtilisateurManager
 *
 * @author adonis_97
 */
class UtilisateurManager extends Manager {
    
    private $user;


    public function __construct() {
        parent::__construct('utilisateur');
    }
    
    public function authentificate($login, $pass){
        
        $sql = 'select * from utilisateur where loggin = :login and pass = sha1(:pass) ';
        $param = array(
            ':login'=> $login,
            ':pass'=>$pass
        );
        //$data = $this->execute_query($sql, $param)->fetch();
        $res = $this->execute_query($sql, $param);
        if($data = $res->fetch()){//if the user exist
            
            return $this->loadEntity('utilisateur',$res);
        }else{
            return false;
        }
        
    }
    
    public function unauthentificate(){
        
    }
}
