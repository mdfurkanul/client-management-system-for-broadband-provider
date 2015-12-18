<div class="row">
 	<form method="post" action="insert_bill.php">
  <div class="col-md-10 col-md-offset-1">
	<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label for="exampleInputEmail1">Transaction id:</label>
			<input type="text" required="" class="form-control" name="tid" id="tid" placeholder="Enter your Transaction id.">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Reference:</label>
			<input type="text" required="" class="form-control" name="ref" id="ref" placeholder="Enter Reference.">
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="exampleInputPassword1">Amount:</label>
			<input type="number" required="" class="form-control" name="amount" id="amount" placeholder="e.g: 200">
		</div>
		<div class="form-group" >
				<h4>Choice your mobile bank:</h4>
                <input type="radio" name="type" value="bKash" checked>bKash
				<input type="radio" name="type" value="mCash">mCash
				<input type="radio" name="type" value="uCash">uCash
		</div>
	</div>
	</div>
	<div classs="row">
	<div class="col-md-6">
		<div class="form-group">
                <label for="bdate">Which month's bill</label>
                <input type="date" required="" class="form-control" name="wdate" id="wdate" placeholder="Which month's bill">
        </div>
	</div>
	<div class="col-md-6">
	<button type="reset" class="btn btn-default">Clear</button>
  <button type="submit" name ="pay" class="btn btn-default">Pay</button>
	</div>
	</div>
  
 </div>
   </form>
</div>