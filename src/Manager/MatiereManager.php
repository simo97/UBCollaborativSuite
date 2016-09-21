<?php

require_once 'Manager.php';
require_once './src/Entity/MatiereEntity.php';


/**
 * Description of MatiereManager
 *
 * @author adonis_97
 */
class MatiereManager extends Frame\Core\FrameDataBase {
    //put your code here
    
    public function __construct() {
        parent::__construct('typeuser');
    }
    
    public function getList(){
        return $this->execute_query('select * from matieres')->fetchAll();
    }
    
    public function addMatiere(MatiereEntity $matiere){
        $sql = 'insert into matieres(id_user,id_admin,nom,libelle,coef,temps)values'
                . '(:id_u,:id_am,:nm,:lib,:coef,:tmp)';
        $param = array(
            ':id_u'=>$matiere->getId_user(),
            ':id_am'=>$matiere->getId_admin(),
            ':nm'=>$matiere->getNom(),
            ':lib'=>$matiere->getLibelle(),
            ':coef'=>$matiere->getCoef(),
            'tmp'=>$matiere->getTemps()
        );
        $final_res = $this->execute_query($sql,$param);
        $this->execute_query('insert into enseignant(id_user)values(:id)',array(':id'=>$_SESSION['id_user']));
        return $final_res;
    }
}
