<?php
ob_start();
session_start();
include('database/access-db.php'); 
	$id = 'SP-'.uniqid();
	$dt = date('d-m-y');
	$cc = rand(11111,99999);
	$_status="Pending";
	$_name = $_POST["name"];
	$_uname = $_POST["uname"];
	$_fname = $_POST["fname"];
	$_mobile = $_POST["mobile"];
	$_email = $_POST["email"];
	$_pass = $_POST["pass"];
	$_cpass = $_POST["cpass"];
	$_bdate = $_POST["bdate"];
	$_address = $_POST["address"];
	$_image=$_FILES['picture']['name'];
	$_bandwidthType = $_POST["bandwidthType"];
	$_bandwidth = $_POST["bandwidth"];
	
	if(empty($_name)){
		header('location:sign_up.php?action=Enter valid name!');
	}
	else if(empty($_uname)){
		header('location:sign_up.php?action=Enter your username name!');
	}
	else if(empty($_fname)){
		header('location:sign_up.php?action=Enter your father name!');
	} 
	else if(empty($_mobile)){
		header('location:sign_up.php?action=Please enter your mobile!');
	}
	else if(empty($_bdate)){
		header('location:sign_up.php?action=Please enter your Birth date!');
	}
	else if(empty($_pass) || empty($_cpass) || $_pass != $_cpass){
		header('location:sign_up.php?action=Please correctly enter your password and confirm password');
	}
	else if(empty($_email) || filter_var($_email, FILTER_VALIDATE_EMAIL)===false){
		header('location:sign_up.php?action=Please enter a valid email address');
	}
	else if(empty($_address)){
		header('location:sign_up.php?action=Please enter your address!');
	}
	else if(empty($_bandwidthType)){
		header('location:sign_up.php?action=Please select your bandwidth Type!');
	}
	else if(empty($_bandwidth)){
		header('location:sign_up.php?action=Please select your bandwidth!');
	}
	else{
		if(getimagesize($_FILES['picture']['tmp_name'])===false){
			$_image='default.png';
		}
		
			$file_size = $_FILES['picture']['size'];
			$file_tmp  = $_FILES['picture']['tmp_name'];
			$file_type = $_FILES['picture']['type'];  
			$file_name =$_FILES['picture']['name'];
			try{       
				$desired_dir="image_uploads";
				if(is_dir($desired_dir)==false){
					mkdir($desired_dir, 0700);
				}
				if(is_file($desired_dir.'/'.$file_name)==false){
					move_uploaded_file($file_tmp,$desired_dir.'/'.$file_name);
					$tbl_col_array = array('name','uname','pass','fname','mobile','email','bdate','address','type','bandwidth','picture','status');
					$value_array = array($_name,$_uname,$_pass,$_fname,$_mobile,$_email,$_bdate,$_address,$_bandwidthType,$_bandwidth,$_image,$_status);
					$query = $Do->insertRow($tbl_col_array,'pendingreq',$value_array);
					if($query['Exec']){
					header('location:sign_up.php?action=Your information are pending now.As son as possible we provide our service!!');
					}
					else{ 
						header('location:sign_up.php?action=ops');
					}
				}else{
					$new_file=time().$file_name;
					$tbl_col_array = array('name','uname','pass','fname','mobile','email','bdate','address','type','bandwidth','picture','status');
					$value_array = array($_name,$_uname,$_pass,$_fname,$_mobile,$_email,$_bdate,$_address,$_bandwidthType,$_bandwidth,$new_file,$_status);
					$query = $Do->insertRow($tbl_col_array,'pendingreq',$value_array);
					move_uploaded_file($file_tmp,$desired_dir.'/'.$new_file) ;   
					if($query['Exec']){
					header('location:sign_up.php?action=Your information are pending now.As son as possible we provide our service!!');
					}
					else{ 
						header('location:sign_up.php?action=ops');
					}
				}
			}catch(PDOException $e){
				echo $e->getMessage();
			}
			
	}
		
?>