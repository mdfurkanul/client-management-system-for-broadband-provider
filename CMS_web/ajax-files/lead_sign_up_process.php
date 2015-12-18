<?php
	include("../database/access-db.php");
	$data['success']=false; 
	$name = $_GET['name'];
	$email = $_GET['email'];
	$Lid = 'Ld-'.uniqid();

if($Do->countRow("lead WHERE email=?",array($email))>0){
	$lead = $Do->fetchRow(array('lead','lead_id'),"WHERE email=?",array($email));
	setLead($lead['lead_id']);
	$data['success']=true; 
}
else{
	$reg = $Do->insertRow(array('lead','lead_id','name','email'),array($Lid,$name,$email));
	if($reg['Exec']){
		$data['success']=true; 
		setLead($Lid);
	}
}
echo json_encode($data);