<?php 
Class UtilisateurEntity {

public function __construct($param = NULL){
	 $this->hydrate($param);
}

protected $id_user; 
protected $nom; 
protected $prenom; 
protected $loggin; 
protected $pass; 
protected $etat; 
protected $matricule; 
protected $numero; 
protected $type; 

public function getId_user (){
	return $this->Id_user ;
}
public function getNom (){
	return $this->Nom ;
}
public function getPrenom (){
	return $this->Prenom ;
}
public function getLoggin (){
	return $this->Loggin ;
}
public function getPass (){
	return $this->Pass ;
}
public function getEtat (){
	return $this->Etat ;
}
public function getMatricule (){
	return $this->Matricule ;
}
public function getNumero (){
	return $this->Numero ;
}
public function getType (){
	return $this->Type ;
}
public function setId_user ($value){
	 $this->Id_user = $value;
}
public function setNom ($value){
	 $this->Nom = $value;
}
public function setPrenom ($value){
	 $this->Prenom = $value;
}
public function setLoggin ($value){
	 $this->Loggin = $value;
}
public function setPass ($value){
	 $this->Pass = $value;
}
public function setEtat ($value){
	 $this->Etat = $value;
}
public function setMatricule ($value){
	 $this->Matricule = $value;
}
public function setNumero ($value){
	 $this->Numero = $value;
}
public function setType ($value){
	 $this->Type = $value;
}
public function hydrate($param = NULL){
	if(isset($param['id_user'])){
		$this->setId_user($param['id_user']);
	}
	if(isset($param['nom'])){
		$this->setNom($param['nom']);
	}
	if(isset($param['prenom'])){
		$this->setPrenom($param['prenom']);
	}
	if(isset($param['loggin'])){
		$this->setLoggin($param['loggin']);
	}
	if(isset($param['pass'])){
		$this->setPass($param['pass']);
	}
	if(isset($param['etat'])){
		$this->setEtat($param['etat']);
	}
	if(isset($param['matricule'])){
		$this->setMatricule($param['matricule']);
	}
	if(isset($param['numero'])){
		$this->setNumero($param['numero']);
	}
	if(isset($param['type'])){
		$this->setType($param['type']);
	}
}
}