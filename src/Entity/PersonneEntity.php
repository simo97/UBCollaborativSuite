<?php 
Class PersonneEntity {

public function __construct($param = NULL){
	 $this->hydrate($param);
}

protected $id_per; 
protected $nom; 
protected $prenom; 

public function getId_per (){
	return $this->Id_per ;
}
public function getNom (){
	return $this->Nom ;
}
public function getPrenom (){
	return $this->Prenom ;
}
public function setId_per ($value){
	 $this->Id_per = $value;
}
public function setNom ($value){
	 $this->Nom = $value;
}
public function setPrenom ($value){
	 $this->Prenom = $value;
}
public function hydrate($param = NULL){
	if(isset($param['id_per'])){
		$this->setId_per($param['id_per']);
	}
	if(isset($param['nom'])){
		$this->setNom($param['nom']);
	}
	if(isset($param['prenom'])){
		$this->setPrenom($param['prenom']);
	}
}
}