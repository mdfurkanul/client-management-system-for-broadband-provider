<?php
$title=$_GET['title'];
$msg=$_GET['msg'];
$status="Pending";
$data;
include('database/access-db.php'); 
$db = $Do->insertRow(array('title','message','status'),'problems',array($title,$msg,$status));
if($db['Exec']){
	$data['status'] = 'Success';
}else{
	$data['status'] =  "Error";
}

echo json_encode($data);