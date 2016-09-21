<?php
/**
 * Description of ControlleurUtilisateur
 * 
 * Les fonctions de sauvegarde par AJAX appelent d'abord la sauvegarde puis elles affichent
 *
 * @author adonis_97
 */
class ControlleurUtilisateur extends Frame\Core\Controller{
    //put your code here
    
    public function __construct($arg = null){
	parent::__construct($arg);  
        
    }
    
    public function indexAction() {
        if(!isset($_SESSION['id_user'])){
            header('location:http://localhost/UB_Collaboration');
        }
    }
    
    /**
     * This methode will be called by an JS function to display the form of adding an user
     */
    public function ajaxAddUtilisateurAction(){
        if(!isset($_SESSION['id_user'])){
            header('location:http://localhost/UB_Collaboration');
        }
        try {
            $list_type = $this->loadManager('typeuser')->getListTypeUser();
            $form = $this->includ('administration','form_add_user',$list_type);
            echo $form;
        } catch(Exception $ex) {
           //On doit appeler le moteur de vue pour afficher le message d'erreur ici
            
            $this->view()->generateErrorFrameException($ex);
        }
    }
    
    //retourne e formulaire pour la creation d'un nouveau type d'utilisateur
    public function ajaxAddTypeAction(){
        if(!isset($_SESSION['id_user'])){
            header('location:http://localhost/UB_Collaboration');
        }
        try{
            echo $this->includ('administration', 'add_type');
        } catch (Exception $ex) {
            $this->view()->generateErrorFrameException($ex);
        }
    }
    
    /**
     * This methode will be called by an JS function to display the list of users
     */
    public function ajaxListUtilisateurAction(){
        
    }
    
    public function saveUtilisateurAction(){
        if(!isset($_SESSION['id_user'])){
            header('location:http://localhost/UB_Collaboration');
        }
        ///le code pour ajouter un utilisateur
        $form_user = $this->loadEntity('utilisateur', array(
            'nom'=>  $_POST['nom'],
            'prenom'=>$_POST['prenom'],
            'loggin'=>$_POST['nom'],
            'pass'=>'new_user',
            'matricule'=>$_POST['matricule'],
            'etat'=> 0,
            'libelle_type'=> $_POST['type_utilisateur']
        ));//l'utilisateur st cree et en memoire
        $res = $this->loadManager('utilisateur')->addUser($form_user);
        if($res == TRUE){
            $result = $this->loadManager('utilisateur')->getList();
            //$res['users'] = $res;
            $data['side_bar'] = $this->includ('administration', 'side_bar') ;
            $data['content'] =  $this->includ('administration', 'list_user', $result) ;
            $this->view->render($data,'admin','list des utilisateurs',TRUE);
        }else{
            $this->redirect('administration', 'default', NULL,'err=Echec ajout utilisateur');
        }
    }
    
    /**
     * 
     */
    public function saveTypeAction(){
        if(!isset($_SESSION['id_user'])){
            header('location:http://localhost/UB_Collaboration');
        }
        $res = $this->loadManager('typeuser')->addType($_POST['nom']);
        if($res == TRUE){
            $resultat = $this->loadManager('typeuser')->getListTypeUser();
            $data['side_bar'] = $this->includ('administration', 'side_bar') ;
            $data['content'] =  $this->includ('administration', 'list_type', $resultat) ;
            $this->view->render($data,'admin','list des types d\'utilisateurs',TRUE);
        }
    }
    
    public function listTypeAction(){
        if(!isset($_SESSION['id_user'])){
            header('location:http://localhost/UB_Collaboration');
        }
        $resultat = $this->loadManager('typeuser')->getListTypeUser();
        $data['side_bar'] = $this->includ('administration', 'side_bar') ;
        $data['content'] =  $this->includ('administration', 'list_type', $resultat) ;
        $this->view->render($data,'admin','list des types d\'utilisateurs',TRUE);
    }
    
    /**
     * The normal way to list the user
     */
    public function listUtilisateurAction(){
        if(!isset($_SESSION['id_user'])){
            header('location:http://localhost/UB_Collaboration');
        }
        $result = $this->loadManager('utilisateur')->getList();
        //$res['users'] = $res;
        $data['side_bar'] = $this->includ('administration', 'side_bar') ;
        $data['content'] =  $this->includ('administration', 'list_user', $result) ;
        $this->view->render($data,'admin','list des utilisateurs',TRUE);
    }
}
