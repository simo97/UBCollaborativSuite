<?php

/**
 * Description of ControlleurMatiere
 *
 * @author adonis_97
 */
class ControlleurMatiere extends Frame\Core\Controller {
    
    public function __construct($arg = null){
	parent::__construct($arg);  
        
    }
    
    /*
     * La methode par defaut va simplement afficher la liste des matieres
     */
    public function indexAction() {
        if(!isset($_SESSION['id_user'])){
            header('location:http://localhost/UB_Collaboration');
        }
        $list_matiere = $this->loadManager('matiere')->getList();
        $data['side_bar'] = $this->includ('administration', 'side_bar') ;
        $data['content'] =  $this->includ('administration', 'list_matieres', $list_matiere) ;
        $this->view()->render($data,'admin','Liste des matieres',true);
    }
    
    public function ajaxAddMatiereAction(){
        if(!isset($_SESSION['id_user'])){
            header('location:http://localhost/UB_Collaboration');
        }
        try {
            $html_form = $this->includ('administration', 'add_matieres');
            echo $html_form;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    
    public function saveMatieresAction(){
        if(!isset($_SESSION['id_user'])){
            header('location:http://localhost/UB_Collaboration');
        }
        try {
            $matiere = $this->loadEntity('matiere', array(
                'nom'=>$_POST['nom'],
                'libelle'=> $_POST['libelle'],
                'coef'=>$_POST['coef'],
                'temps'=>$_POST['temps'],
                'id_admin'=> 1,
                'id_user'=> $_SESSION['id_user']
            ));
            //la matiere est crre maintenant il faut l'enregistrer
            $matier_manager = $this->loadManager('matiere')->addMatiere($matiere);
            if($matier_manager == TRUE){
                $list_matiere = $this->loadManager('matiere')->getList();
                $data['side_bar'] = $this->includ('administration', 'side_bar') ;
                $data['content'] =  $this->includ('administration', 'list_matieres', $list_matiere) ;
                $this->view()->render($data,'admin','Liste des matieres',true);
            }
        } catch (Exception $ex) {
            
        }
    }
    
}
