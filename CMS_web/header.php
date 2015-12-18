<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Client management System of "Future Net BD"</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="stylesheet/style.com.css" rel="stylesheet" type="text/css" />
    <link href="stylesheet/my_css.css" rel="stylesheet" type="text/css" />
	<link href="ihover/src/ihover.css" rel="stylesheet">
    <link href="stylesheet/style.custom.css" rel="stylesheet" type="text/css" />
    <link href="stylesheet/zebra.calendar.css" rel="stylesheet" type="text/css" />
    <script src="javascript/jquery.min.js" type="text/javascript"></script>
    <script src="javascript/zebra.datepicker.js" type="text/javascript"></script>
    <script src="javascript/core.datepicker.js" type="text/javascript"></script>
    <script type="text/javascript">
    </script>
</head>

<body>
    <div class="container-fluid" style="background-color:#000000;">
        <!--
			<div class="row">
				<div class="col-sm-8">
					<div id="company-logo" style="margin:10px 0"> 
						<img src="images/logo.png" width="200" height="50" />
					</div>
				</div>
			</div> 
			<div id="menu-bar"> 	-->
            
				<nav class="navbar navbar-inverse">
				<div class="navbar-inner">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
							<li class=""><img src="images/logo2.png" width="150" height="50" /></li>
								<li <?php if(isset($home)&& $home):?> class="active"<?php endif ?>><a href="index.php" class="scroll"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
								</li>
								<!--
								
								-->
								<?php if(isset($_SESSION['UserID'])):?>
								<li><a href="dashboard.php"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Dashboard</a>
								</li>
								<?php else:?>
								<li <?php if(isset($login)&& $login):?> class="active"<?php endif ?>><a href="sign_up.php" class="scroll"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Request a new line</a>
								</li>
								<?php endif?>
								
								<li class="default"><a href="#packages" class="scroll"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> Packages</a>
								</li>
								<li  class="default"><a href="#contact" class="scroll"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Contact</a>
								</li>  
							</ul> 
							<ul class="nav navbar-nav navbar-right">
								<?php if(isset($_SESSION['UserID'])):?>
								<li><a href="logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a>
								</li>
								<?php else:?>
								<li <?php if(isset($login)&& $login):?> class="active"<?php endif ?>><a href="login.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</a>
								</li> 
								<?php endif?>
							</ul> 
						
						</div>
						</div>
						</div>
				</nav> 