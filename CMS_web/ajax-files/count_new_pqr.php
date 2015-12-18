<?php
	session_start();
	include("../database/access-db.php");  
	
	echo $Do->countRow("pqr WHERE sp_id=? AND status=?",array($_SESSION['UserID'],"New PQR")).' New';
?>