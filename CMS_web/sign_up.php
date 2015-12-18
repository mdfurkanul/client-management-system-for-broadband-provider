<?php
	ob_start();
	session_start();
if(isset($_SESSION['UserID'])):
header('location:dashboard.php');
endif;

	$_E=true;
	include('header_signup.php'); 
?>
<!--body start  -->
<div class="container">
<div class="row">
    <form method="post" enctype="multipart/form-data" action="signup_pro.php">
		<div class="col-md-12">
		<?php
			if(isset($_GET['action'])){
				if($_GET['action']=="ops")
				{
					$_E='class="alert alert-danger"';
					$M="! some thing wrong.... :( May be userName already exists. Try with different one..";
				}
				else
				{
					$_E='class="alert alert-success"';
					$M='';
				}
		?>
			<div <?php echo $_E ?> role="alert">Message: <?=$_GET['action']; echo $M;?><a href="#" class="close" data-dismiss="alert">×</a></div>
		<?php
			}
		?>
		</div>
        <div class="col-md-6"> 
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" required="" class="form-control" name="name" id="name" placeholder="Name">
            </div>
			<div class="form-group">
                <label for="name">UserName</label>
                <input type="text" required="" class="form-control" name="uname" id="uname" placeholder="UserName">
            </div>
            <div class="form-group">
                <label for="Father-name">Father's Name</label>
                <input type="text" required="" class="form-control" name="fname" id="fname" placeholder="Father's Name">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" required="" class="form-control" name="mobile" id="mobile" placeholder="Mobile">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" required="" class="form-control" name="email" id="email" placeholder="Enter email">
            </div> 
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" required="" class="form-control" name="pass" id="pass" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="password">Re-type Password</label>
                <input type="password" required="" class="form-control" name="cpass" id="cpass" placeholder="Re-type Password">
            </div>
            
        </div> 
        <div class="col-md-6"> 
			<div class="form-group">
                <label for="bdate">Birth date</label>
                <input type="date" required="" class="form-control" name="bdate" id="bdate" placeholder="Birth date">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea required="" class="form-control" name="address" id="address" rows="7"></textarea>
            </div>
			<div class="form-group">
				<label for="type">Select Your bandwidth type:</label>
				<select class="form-control" name="bandwidthType" id="bandwidthType">
					<option>Shared</option>
					<option>Dedicated</option>
				</select>
			</div>
			<div class="form-group">
				<label for="bandwidth">Select Your bandwidth:</label>
				<select class="form-control" name="bandwidth" id="bandwidth">
					<option>324 kbps</option>
					<option>512 kbps</option>
					<option>786 kbps</option>
					<option>1 Mbps</option>
					<option>1.5 Mbps</option>
					<option>2 Mbps</option>
					<option>2.5 Mbps</option>
					<option>3 Mbps</option>
					<option>5+ Mbps</option>
					<option>10+ Mbps</option>
				</select>
			</div>
            <div class="form-group">
                <label for="picture">Add Picture</label>
                <input type="file" class="form-control" name="picture" id="picture">
            </div>
            <button type="reset" class="btn btn-default btn-lg">Clear</button>
            <button type="submit" class="btn btn-primary btn-lg" name="signup">Sign up</button> 
        </div>
    </form>
</div>
</div>
<!--body ended  -->
<?php include( "footer.php"); ?>