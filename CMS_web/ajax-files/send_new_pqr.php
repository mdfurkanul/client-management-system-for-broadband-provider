<?php
	include("../database/access-db.php");
	$Lid = $_COOKIE["LeadId"]; 
	$pid = 'Pq-'.uniqid();
	$data['next'] = false;
	$data['nextStep'] = '';
	$data['success'] = false;
	
	$where2go = $_GET["where2go"];
	$passenger = $_GET["passenger"];
	$date = $_GET["date"];
	$timeHour = $_GET["timeHour"];
	$timeMinute = $_GET["timeMinute"];
	$timeAmPm = $_GET["timeAmPm"];
	$address = $_GET["address"];
	$type = $_GET["type"];
	$locationId = $_GET["location"];	
	$spid = $_GET["spid"];	
	
	$timeHr = intval($timeHour);
	if($timeAmPm=="pm"){
		$timeHr = intval($timeHour) + 12;}
	if($timeHr==24){
		$timeHr = 0;}
	$timeHr = sprintf("%02d",$timeHr);
	$timeMinute = sprintf("%02d",intval($timeMinute)); 
	$time = $timeHr.":".$timeMinute.":00";
	
//	if($Do->countRow("pickup_info WHERE lead_id=? AND sp_id=? AND pickup_location=?",array($Lid,$spid,$locationId))==0){ 
		$pqr = $Do->insertRow(array('pqr','pqr_id','lead_id','sp_id'),array($pid,$Lid,$spid)); 
		if($pqr['Exec']){
			$pickup = $Do->insertRow(array('pickup_info','pickup_id','lead_id','sp_id','pickup_location','pickup_date','pickup_time','vehicle_type','passenger','tour_type'),array($pid,$Lid,$spid,$locationId,$date,$time,$type,$passenger,$where2go));
			if($pickup['Exec']){
				$data['success'] = true; 
				if($where2go=="just_drive"){
					$data['next'] = true; 
					$data['nextStep'] = "askHour"; 
				}
			}
		} 
//	} 
echo json_encode($data);