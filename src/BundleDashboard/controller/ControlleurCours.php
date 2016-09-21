<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlleurCours
 *
 * Ce controlleur va gere la connexion a BBB pour l'enseignant
 *
 * @author adonis_97
 */
class ControlleurCours extends Frame\Core\Controller {

    public function __construct($argument = null) {
        parent::__construct($argument);
    }

    public function indexAction(){
        if(!isset($_SESSION['id_user'])){
            header('location:http://localhost/UB_Collaboration');
        }
    }

    /**
     * This method will be use to retrive the start cours form to the server an return it to the user
     * for filling and will call to startCoursesAction() for starting communicate with BBB
     */
    public function ajaxStartCoureAction(){
        if(!isset($_SESSION['id_user'])){
            header('location:http://localhost/UB_Collaboration');
        }
      try {
        $html = $this->includ('dashboard','start_cours_form');
        echo $html;
      } catch (Exception $e) {
        echo $e->getMessage();
      }

    }
    
    //cette fo,ction crre le cour et retourne le resultat
    public function createCourseAction(){
        if(!isset($_SESSION['id_user'])){
            header('location:http://localhost/UB_Collaboration');
        }
    }

    /**
     * Cette methode va permettre de debuter une seance de cour dans BBB
     * elle va appeler la methode create() et ensuit join() de BBB
     */
    public function startCoursesAction(){
        if(!isset($_SESSION['id_user'])){
            header('location:http://localhost/UB_Collaboration');
        }
        try {
            $server_addr = '192.168.232.129';
            $server_port = '80';
            $shared_secret= "7fbc7c99d8fdfa8d8b5d78abed9c5ec4";//doit etre configurer dans BBB
            $nom = 'session_'.time();
            $_SESSION['session_id'] = $nom;//je stocke cela pour reutilise apres
            
            
            $parameter = "createname=cour&meetingID=".$nom."&attendeePW=123456&moderatorPW=456789";//le lien de creating de la session
            $sha1 = sha1($parameter.$shared_secret);
            $link = "name=cour&meetingID=".$nom."&attendeePW=123456&moderatorPW=456789&checksum=".$sha1;
            
            //header('location:http://'.$server_addr.'/bigbluebutton/api/join?'.$link);

            //$sha1 = sha1($parameter);//on ajoute le secret shared a la fin de la chaine pour le hachage
            //$_SESSION['checksum'] = $sha1; // stackago dans la session
            
            $flink = 'http://'.$server_addr.'/bigbluebutton/api/create?'.$link;
//            header($flink);
//            die();
            
            
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $flink);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_USERAGENT, 'adnis');
            $res = curl_exec($curl);
            curl_close($curl);
            
            
            $dom_result = new DOMDocument();
            $dom_result->loadXML($res);
            $code = $dom_result->getElementsByTagName('returncode')->item(0)->nodeValue;
            if($code == 'SUCCESS'){
                echo 'Ok';
            }else{
                echo $res;
            }
            //print_r($res);
            //header('location:http://'.$server_addr.'/bigbluebutton/api/create?'.$link);
            //header('location:http://test-install.blindsidenetworks.com/bigbluebutton/api/join?fullName=User+4303438&meetingID=random-1656050h&password=mp&redirect=true&checksum=90b2e17a3b5d51b60b0771c32318917b7c569126');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
    public function joinCourseAsStudentAction(){
        
    }
    
    public function joinCourseAsTeacherAction(){
        try{
            $server_addr = '192.168.232.129';
            $server_port = '80';
            $shared_secret= "7fbc7c99d8fdfa8d8b5d78abed9c5ec4";//doit etre configurer dans BBB
            
            //config du sha1
            $string = 'joinfullName='.$_SESSION['nom'].'+'.$_SESSION['prenom'].'&meetingID='.$_SESSION['session_id'].'&password=456789';
            $hash = sha1($string.$shared_secret);
            
            //-- debut de la cretaion de l'url
            
            $link = 'fullName='.$_SESSION['nom'].'+'.$_SESSION['prenom'].'&meetingID='.$_SESSION['session_id'].'&password=456789&redirect=true&checksum='.$hash;
            header('location:http://'.$server_addr.'/bigbluebutton/api/join?'.$link);
        } catch (Exception $ex) {
            echo $e->getMessage();
        }
    }
}
