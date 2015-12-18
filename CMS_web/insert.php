<?php

$name=$_GET['name'];
$email=$_GET['email'];
$data;

include('database/access-db.php'); 

$db = $Do->insertRow(array('name','email'),'furkan',array($name,$email));
if($db['Exec']){
	$data['status'] = 'Success';
}else{
	$data['status'] =  "Error";
}

echo json_encode($data);