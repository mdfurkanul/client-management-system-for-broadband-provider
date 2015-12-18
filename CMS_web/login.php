<?php 
	ob_start();
	session_start();
	if(isset($_SESSION['UserID'])):
      header('location:dashboard.php');
    endif;
	$login=true;
	include('headerlog.php');
	include('database/access-db.php');
	if(isset($_POST['signin'])){
		$email=$_POST['inputSuccess5'];
		$paswd=$_POST['inputGroupSuccess4'];
		
		$data=$Do->fetchRow(array('login','cid'),'WHERE uname=? AND pass=?',array($email,$paswd));  
		if($data['rowFound']){
			$_SESSION['UserID']=$data['cid'];
			$_SESSION['UserEmail']=$email;
			header('location:dashboard.php');
		}
		else{
			$errMsg=true;
		}
	} 
	if(isset($errMsg) && $errMsg){
?>
<div class="container-fluid"  id="loginp">	
<div class="alert alert-danger" role="alert">Error: Invalid login details!<a href="#" class="close" data-dismiss="alert">×</a></div>
<?php
	}
?>
<div class="row" style="margin:100px 0">
    <div class="col-sm-4 col-sm-offset-4"> 
        <div class="modal-content">
            <div class="row">
                <div class="col-sm-12" style="background-color:#00A6A6;border-bottom: 2px solid black;">
                    <h3 class="text-center" style="color:white;">Login...</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12" style="background-color:#6699FF;"> 
                    <form method="post" action="" style="margin-top:25px;margin-bottom:25px;">
                        <div class="form-group">
                            <label class="control-label sr-only" for="inputSuccess5">Enter valid email</label>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-envelope"></span>
                                <input type="text" required="" class="form-control" placeholder="UserName" name="inputSuccess5"  id="inputSuccess5" aria-describedby="inputGroupSuccess4Status">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label sr-only" for="inputGroupSuccess4">Input valid password</label>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-lock"></span>
                                <input type="password" required="" class="form-control" placeholder="Password" name="inputGroupSuccess4" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status">
                            </div>
                        </div>
                        <div class="input-group checkbox"> 
                            <a href="forget_password.php" id="a_big"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> Forget password?</a>
							<br>
							<a href="sign_up.php" id="a_big"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> Request for new line?</a>
                        </div> 
						<div class="row">
							<div class="col-md-6">
								<a href="index.php" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"> </span> Back to home</a>
							</div>
							<div class="col-md-6">
							    <div style="float:right; margin-bottom:10px;">
									<button type="submit" class="btn btn-default" name="signin" id="signin">Sign in <span class="glyphicon glyphicon-arrow-right"> </span></button>
								</div>	
							</div>
						</div>
                    </form> 
                </div>
            </div>
        </div> 
    </div>
</div>
</div>

<script>
$(document).ready(function(){
	$('#loginp').height($(window).height());
});
</script>