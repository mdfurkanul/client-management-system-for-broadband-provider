<?php 
	include('access-db.php');  
	$data['exist'] = false;
	$action = $_GET['action'];
	$value = $_GET['val'];
	
	
	switch($action){
		case "state":
			$query = $Do->fetchTable(array('zipcode','state'),'WHERE country=? GROUP BY state',array($value));
			if($query['rowFound']){
				for($i=0;$i<$query['countRow'];$i++){
					$j=$i+1;
					$data['value'][$i]=$query[$j]['state'];
				} 
				$data['exist'] = true;
			}
		break;
		case "cityName":
			$query = $Do->fetchTable(array('zipcode','city'),'WHERE state=? GROUP BY city',array($value));
			if($query['rowFound']){
				for($i=0;$i<$query['countRow'];$i++){
					$j=$i+1;
					$data['value'][$i]=$query[$j]['city'];
				} 
				$data['exist'] = true;
			}
		break;
		case "zipCode":
			$query = $Do->fetchTable(array('zipcode','zip'),'WHERE city=? GROUP BY zip',array($value));
			if($query['rowFound']){
				for($i=0;$i<$query['countRow'];$i++){
					$j=$i+1;
					$data['value'][$i]=$query[$j]['zip'];
				} 
				$data['exist'] = true;
			}
		break;
		default:
		$data['value']=array(false);
	}
	
	echo json_encode($data);