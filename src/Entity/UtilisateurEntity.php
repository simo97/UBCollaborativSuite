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
protected $libelle_type; 

public function getId_user (){
	return $this->id_user ;
}
public function getNom (){
	return $this->nom ;
}
public function getPrenom (){
	return $this->prenom ;
}
public function getLoggin (){
	return $this->loggin ;
}
public function getPass (){
	return $this->pass ;
}
public function getEtat (){
	return $this->etat ;
}
public function getMatricule (){
	return $this->matricule ;
}
public function getNumero (){
	return $this->numero ;
}
public function getLibelle_type (){
	return $this->libelle_type ;
}
public function setId_user ($value){
	 $this->id_user = $value;
}
public function setNom ($value){
	 $this->nom = $value;
}
public function setPrenom ($value){
	 $this->prenom = $value;
}
public function setLoggin ($value){
	 $this->loggin = $value;
}
public function setPass ($value){
	 $this->pass = $value;
}
public function setEtat ($value){
	 $this->etat = $value;
}
public function setMatricule ($value){
	 $this->matricule = $value;
}
public function setNumero ($value){
	 $this->numero = $value;
}
public function setLibelle_type ($value){
	 $this->libelle_type = $value;
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
	if(isset($param['libelle_type'])){
		$this->setLibelle_type($param['libelle_type']);
	}
}
}