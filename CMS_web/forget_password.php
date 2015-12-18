<?php 
	ob_start();
	session_start();
	if(isset($_SESSION['UserID'])):
      header('location:dashboard.php');
    endif;
	
	include('database/access-new.php');
	
	if(isset($_POST['submit'])){
		$pass = $_POST['pass'];
		
		if($db->countRow('login WHERE uname = ?',array($pass))==1){
		
			$data = $db->fetchRow(array('login','email','pass'),'WHERE uname = ?',array($pass));
			
			$email = $data['email'];
			$pass = $data['pass'];
			
			
			echo '<script type="text/javascript">alert("Your email is=>> ' . $email.'\nAND Password is=>> '.$pass.'")</script>';


			//echo $email.' . '.$pass;
		}
		else{
			// Do Something
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login.....</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet"> 
    <link href="stylesheet/style.com.css" rel="stylesheet" type="text/css" /> 
    <link href="stylesheet/style.custom.css" rel="stylesheet" type="text/css" />
    <link href="stylesheet/zebra.calendar.css" rel="stylesheet" type="text/css" />
	<script src="javascript/jquery.min.js" type="text/javascript"></script>
	<script src="javascript/zebra.datepicker.js" type="text/javascript"></script>
	<script src="javascript/core.datepicker.js" type="text/javascript"></script>
</head>
<body >
	<div id="page-body" class="container-fluid">
		<div class="container">
			<?php 
				include('header.php');
				?>
			
			
			<div class="row" style="margin-top:100px;margin-bottom:100px;">
  <div class="col-sm-4 col-sm-offset-4">
 
<div class="modal-content">
       <div class="row" >
          <div class="col-sm-12" style="background-color:#00A6A6;border-bottom: 2px solid black;">
            <h3 class="text-center" style="color:white;">Forget Login....</h3>
          </div>
       </div>
       <div class="row">
          <div class="col-sm-12" style="background-color:#6699FF;">





<form method="post" action="" style="margin-top:25px;margin-bottom:25px;">
<div class="form-group">
  <label class="control-label sr-only" for="inputSuccess5">Enter valid input</label>
    <div class="input-group">
    <span class="input-group-addon glyphicon glyphicon-envelope"></span>
    <input type="text" class="form-control" placeholder="Username" name="pass" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status">
  </div>
</div>

 
<div style="float:right; margin-bottom:10px;">

<button type="submit" class="btn btn-default" name="submit" id="signin">Submit <span class="glyphicon glyphicon-arrow-right"> </span></button>
</div>
</form>

          </div>
       </div>
    </div> 
  
  
  
  </div>
</div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<!-- -->
		<?php
		include("footer.php");
		?>
		</div>
		<!--container end -->
	</div>
	 <!-- fluid  end-->
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
	<script src="javascript/function.com.js" type="text/javascript"></script>
	<script src="javascript/process.func.js" type="text/javascript"></script>
	<script src="javascript/google.map.js" type="text/javascript"></script>
	<script src="javascript/map.aviators.js" type="text/javascript"></script>
</body>
</html>