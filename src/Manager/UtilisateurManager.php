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
        
        $sql = 'select * from view_user where loggin = :login and pass = sha1(:pass) ';
        $param = array(
            ':login'=> $login,
            ':pass'=>$pass
        );
        //$data = $this->execute_query($sql, $param)->fetch();
        $res = $this->execute_query($sql, $param);
        if($data = $res->fetch()){//if the user exist
            
            //we create the entity here and return it
            return $this->loadEntity('utilisateur',$data);
        }else{
            return false;
        }
        
    }
    
    public function unauthentificate(){
        
    }
    
    public function addUser(UtilisateurEntity $user){
        $sql = 'INSERT INTO utilisateur (nom,prenom,loggin,pass,matricule,type_user)'
                . 'values(:nom,:prenom,:loggin,sha(:pass),:matricule,:type_user)';
        
        $param =  array(
            ':nom'=>$user->getNom(),
            ':prenom'=> $user->getPrenom(),
            ':loggin'=>$user->getLoggin(),
            ':pass'=>$user->getPass(),
            ':matricule'=>$user->getMatricule(),
            ':type_user'=>$_POST['type_utilisateur']
        );
        
        
        $result = $this->execute_query($sql, $param);
        return $result;
    }
    
    public function getList(){
        $sql = "select * from view_user";
        $list =  $this->execute_query($sql);
        $list = $list->fetchAll();
//        echo '<pre>';
//        var_dump($list);// $list;
//        echo '</pre>';
//        die();
        return $list;
    }
}
