<?php 
Class TypeuserEntity {

public function __construct($param = NULL){
	 $this->hydrate($param);
}

protected $id_type; 
protected $libelle; 

public function getId_type (){
	return $this->Id_type ;
}
public function getLibelle (){
	return $this->Libelle ;
}
public function setId_type ($value){
	 $this->Id_type = $value;
}
public function setLibelle ($value){
	 $this->Libelle = $value;
}
public function hydrate($param = NULL){
	if(isset($param['id_type'])){
		$this->setId_type($param['id_type']);
	}
	if(isset($param['libelle'])){
		$this->setLibelle($param['libelle']);
	}
}
}