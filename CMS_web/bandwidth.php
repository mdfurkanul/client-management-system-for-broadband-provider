<div class="row">
<div class="col-md-10 col-md-offset-1">
 	<form method="post" action="insert_bandwidth.php">
	<div class="form-group">
		<h3>Update Bandwidth:</h3>
			<div class="form-group">
				<label for="sel1">Select Your bandwidth type:</label>
				<select class="form-control" name="bandwidth_type" id="bandwidth_type">
					<option>Shared</option>
					<option>Dedicated</option>
				</select>
			</div>
			<div class="form-group">
				<label for="sel1">Select Your bandwidth:</label>
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
  </div>
  <button type="reset" class="btn btn-default">Clear</button>
  <button type="submit" name="submit" style="float:right;" class="btn btn-default">Submit <span class="glyphicon glyphicon-arrow-right"></span></button>
 </div>
 
   </form>
</div>