
<?php

session_start();
include('database/access-new.php');
if(isset($_POST['pay'])){
	$tid = $_POST['tid'];
	$ref = $_POST['ref'];
	$amount = $_POST['amount'];
	$type = $_POST['type'];
	$cid = $_SESSION['UserID'];
	$wdate=$_POST['wdate'];
	$date=Date('Y-m-d');
	$query = $db->insertRow(array('onlinepaybill','cid','tid','ref','Wdate','date','cat','amount'),array($cid,$tid,$ref,$wdate,$date,$type,$amount));
	if(!($query['Exec'])){
	//echo $query['errMsg'];
	 echo "Your information are used before!";
	 }
	else{
	 header('location:dashboard.php');
	 echo '<script type="text/javascript">alert("Your statement was send! please wait.\nWe response as soon as possible!\nThank you!")</script>';
	 }
}

?>