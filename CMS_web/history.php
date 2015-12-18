<div class="table-responsive">
  <table class="table table-hover">
	<thead>
	        <td class="text-left">
                <h4>Sl#</h4>
			</td>
			<td class="text-left">
                <h4>Which month's</h4>
			</td>
			<td class="text-left">
                <h4>Status</h4>
			</td>
			<td class="text-left">
                <h4>Receiver</h4>
			</td>
			<td class="text-left">
                <h4>Amount</h4>
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
	$data = $db->fetchTable(array('billshistory','sl','Wdate','amount','status','rname','comment'),'WHERE cid=?',array($cid));
	for($i=1;$i<=$data['countRow'];$i++){
?>
		<tr>
            <td class="text-left">
                <h5><?=$data[$i]['sl'];?></h5>
			</td>
			<td class="text-left">
                <h5><?=$data[$i]['Wdate'];?></h5>
			</td>
			<td class="text-left">
				<h5><?=$data[$i]['status'];?></h5>
			</td>
			<td class="text-left">
                <h5><?=$data[$i]['rname'];?></h5>
			</td>
			<td class="text-left">
                <p><?=$data[$i]['amount'];?></p>
			</td>
			<td class="text-left">
                <p><?=$data[$i]['comment'];?></p>
			</td>
        </tr> 
<?php
}
?>

    </tbody>
  </table>
</div>