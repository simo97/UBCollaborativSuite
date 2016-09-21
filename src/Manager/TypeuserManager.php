<?php

require_once 'Manager.php';
require_once './src/Entity/UtilisateurEntity.php';

/**
 * Description of TypeuserManager
 *
 * @author adonis_97
 */
class TypeuserManager extends Frame\Core\FrameDataBase{
    
    private $type_user;
    
    public function __construct() {
        parent::__construct('typeuser');
    }
    
    public function getListTypeUser(){
        
        $list_type = $this->execute_query('select * from type_utilisateur')->fetchAll();
        return $list_type;
    }
    
    public function addType($type_lib){
        $sql = 'insert into type_utilisateur(libelle_type)values(:lib)';
        $param = array(
            ':lib'=>$type_lib
        );
        return $this->execute_query($sql, $param);
    }
    
}
