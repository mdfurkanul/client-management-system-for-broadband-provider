 <?php
	ob_start();
	session_start();
	if(!isset($_SESSION['UserID']) || $_SESSION['UserID']==''){
		header('location:login.php'); 
	}
	else{
		$home=true;
	}
		include('headerdashboard.php');
?> 
    <div class="panel panel-default top-buffer-homepanel" style="border-radius:0 0 7px 7px; margin-top:5px">
        <div class="panel-body home-panel">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-group adminbar-li button-group"> 
					  <li><a onClick="dashboardLoading()" href="dashboard.php" class="list-group-item"><span class="glyphicon glyphicon-refresh"></span> Dashboard</a></li>
					  <li><a onClick="leftMenuControllar('dash-board')" href="dashboard_pay_bill.php" class="list-group-item"><span class="glyphicon glyphicon-plus"></span> Pay bill</a></li>
					  <li><a onClick="leftMenuControllar('dash-board')" href="dashboard_chat_box.php" class="list-group-item active"><span class="glyphicon glyphicon-comment"></span> Chat Box</a></li>
					</ul>
				</div>
                <div id="admin-panel-content" class="col-md-9" style="margin-top:20px"> 
					<?php
					include('solution.php');
				?>
                </div>
            </div>
        </div>
    </div> 
	<div id="in-progress" class="modal">
	  <div class="modal-dialog modal-dialog-in-progress" style="width:500px">
		  <div class="modal-content">
			<div class="modal-body">
				<span style="margin:0 12px">Operation in progress.....</span> 
				<img src="images/processing.gif" width="465" height="30">
			</div>
		  </div>
	  </div>
	</div> 

	<?php
		include('footer.php');
    ?>