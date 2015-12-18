<div class="table-responsive">
  <table class="table table-hover">
	<thead>
	        <td class="text-left">
                <h4>Sl#</h4>
			</td>
			<td class="text-left">
                <h4>Title</h4>
			</td>
			<td class="text-left">
                <h4>Status</h4>
			</td>
			<td class="text-left">
                <h4>Problems solver</h4>
			</td>
			<td class="text-left">
                <h4>Comment</h4>
			</td>
	</thead>
	<tbody>
<?php
	ob_start();
	session_start();
	include('database/access-new.php');
	$cid=$_SESSION['UserID'];
	$data = $db->fetchTable(array('solution','psid','status','solver','title','Message'),'WHERE cid=?',array($cid));
	for($i=1;$i<=$data['countRow'];$i++){
?>
		<tr>
            <td class="text-left">
                <h5><?=$data[$i]['psid'];?></h5>
			</td>
			<td class="text-left">
                <h5><?=$data[$i]['title'];?></h5>
			</td>
			<td class="text-left">
				<h5><?=$data[$i]['status'];?></h5>
			</td>
			<td class="text-left">
                <h5><?=$data[$i]['solver'];?></h5>
			</td>
			<td class="text-left">
                <p><?=$data[$i]['Message'];?></p>
			</td>
        </tr> 
<?php
}
?>
    </tbody>
  </table>
</div>