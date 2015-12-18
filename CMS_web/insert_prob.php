
<?php

session_start();
include('database/access-new.php');
if(isset($_POST['submit'])){
	$title = $_POST['title'];
	$msg = $_POST['msg'];
	$cid = $_SESSION['UserID'];
	$date=Date('Y-m-d');
	$query = $db->insertRow(array('problems','cid','title','message','date'),array($cid,$title,$msg,$date));
	if(!($query['Exec']))
	 echo $query['errMsg'];
	else{
	 header('location:dashboard.php');
	 echo '<script type="text/javascript">alert("Your statement was send! please wait.\nWe response as soon as possible!\nThank you!")</script>';
	 }
}

?>