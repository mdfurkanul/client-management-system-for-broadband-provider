<?php
	$data['exist']=false;
	if(isset($_COOKIE["LeadId"])){
		$data['exist']=true;
	}
echo json_encode($data);
?>