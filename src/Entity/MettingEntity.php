<?php 
Class MettingEntity {

public function __construct($param = NULL){
	 $this->hydrate($param);
}

protected $id_meeting; 
protected $url; 
protected $nom; 
protected $meetingid; 
protected $usr_pass; 
protected $mod_pass; 
protected $wel_msg; 
protected $number; 
protected $temps; 
protected $type; 
protected $date; 

public function getId_meeting (){
	return $this->Id_meeting ;
}
public function getUrl (){
	return $this->Url ;
}
public function getNom (){
	return $this->Nom ;
}
public function getMeetingid (){
	return $this->Meetingid ;
}
public function getUsr_pass (){
	return $this->Usr_pass ;
}
public function getMod_pass (){
	return $this->Mod_pass ;
}
public function getWel_msg (){
	return $this->Wel_msg ;
}
public function getNumber (){
	return $this->Number ;
}
public function getTemps (){
	return $this->Temps ;
}
public function getType (){
	return $this->Type ;
}
public function getDate (){
	return $this->Date ;
}
public function setId_meeting ($value){
	 $this->Id_meeting = $value;
}
public function setUrl ($value){
	 $this->Url = $value;
}
public function setNom ($value){
	 $this->Nom = $value;
}
public function setMeetingid ($value){
	 $this->Meetingid = $value;
}
public function setUsr_pass ($value){
	 $this->Usr_pass = $value;
}
public function setMod_pass ($value){
	 $this->Mod_pass = $value;
}
public function setWel_msg ($value){
	 $this->Wel_msg = $value;
}
public function setNumber ($value){
	 $this->Number = $value;
}
public function setTemps ($value){
	 $this->Temps = $value;
}
public function setType ($value){
	 $this->Type = $value;
}
public function setDate ($value){
	 $this->Date = $value;
}
public function hydrate($param = NULL){
	if(isset($param['id_meeting'])){
		$this->setId_meeting($param['id_meeting']);
	}
	if(isset($param['url'])){
		$this->setUrl($param['url']);
	}
	if(isset($param['nom'])){
		$this->setNom($param['nom']);
	}
	if(isset($param['meetingid'])){
		$this->setMeetingid($param['meetingid']);
	}
	if(isset($param['usr_pass'])){
		$this->setUsr_pass($param['usr_pass']);
	}
	if(isset($param['mod_pass'])){
		$this->setMod_pass($param['mod_pass']);
	}
	if(isset($param['wel_msg'])){
		$this->setWel_msg($param['wel_msg']);
	}
	if(isset($param['number'])){
		$this->setNumber($param['number']);
	}
	if(isset($param['temps'])){
		$this->setTemps($param['temps']);
	}
	if(isset($param['type'])){
		$this->setType($param['type']);
	}
	if(isset($param['date'])){
		$this->setDate($param['date']);
	}
}
}