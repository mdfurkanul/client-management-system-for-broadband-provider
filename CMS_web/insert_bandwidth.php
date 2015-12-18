
<?php

session_start();
include('database/access-new.php');
if(isset($_POST['submit'])){
	$bandwidth = $_POST['bandwidth'];
	$type = $_POST['bandwidth_type'];
	$cid = $_SESSION['UserID'];
	$date=Date('Y-m-d');
	$query = $db->insertRow(array('bandwidth_update','cid','date','proposed_bandwidth','type'),array($cid,$date,$bandwidth,$type));
	if(!($query['Exec']))
	 echo $query['errMsg'];
	else{
	 header('location:dashboard.php');
	 echo '<script type="text/javascript">alert("Your statement was send! please wait.\nWe response as soon as possible!\nThank you!")</script>';
	 }
}

?> 