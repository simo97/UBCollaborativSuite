<?php 
Class MatiereEntity {

public function __construct($param = NULL){
	 $this->hydrate($param);
}

protected $id_mat; 
protected $id_user; 
protected $id_admin; 
protected $nom; 
protected $prenom; 
protected $libelle; 
protected $coef; 
protected $temps; 

public function getId_mat (){
	return $this->Id_mat ;
}
public function getId_user (){
	return $this->Id_user ;
}
public function getId_admin (){
	return $this->Id_admin ;
}
public function getNom (){
	return $this->Nom ;
}
public function getPrenom (){
	return $this->Prenom ;
}
public function getLibelle (){
	return $this->Libelle ;
}
public function getCoef (){
	return $this->Coef ;
}
public function getTemps (){
	return $this->Temps ;
}
public function setId_mat ($value){
	 $this->Id_mat = $value;
}
public function setId_user ($value){
	 $this->Id_user = $value;
}
public function setId_admin ($value){
	 $this->Id_admin = $value;
}
public function setNom ($value){
	 $this->Nom = $value;
}
public function setPrenom ($value){
	 $this->Prenom = $value;
}
public function setLibelle ($value){
	 $this->Libelle = $value;
}
public function setCoef ($value){
	 $this->Coef = $value;
}
public function setTemps ($value){
	 $this->Temps = $value;
}
public function hydrate($param = NULL){
	if(isset($param['id_mat'])){
		$this->setId_mat($param['id_mat']);
	}
	if(isset($param['id_user'])){
		$this->setId_user($param['id_user']);
	}
	if(isset($param['id_admin'])){
		$this->setId_admin($param['id_admin']);
	}
	if(isset($param['nom'])){
		$this->setNom($param['nom']);
	}
	if(isset($param['prenom'])){
		$this->setPrenom($param['prenom']);
	}
	if(isset($param['libelle'])){
		$this->setLibelle($param['libelle']);
	}
	if(isset($param['coef'])){
		$this->setCoef($param['coef']);
	}
	if(isset($param['temps'])){
		$this->setTemps($param['temps']);
	}
}
}