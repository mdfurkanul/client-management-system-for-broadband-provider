<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<h4 class="modal-title">How reach you?</h4>
</div> 
<div class="modal-body">
	<form class="form-inline">
	  <div class="form-group">
		<label class="control-label col-sm-1" for="leadName">Name</label>
		<div class="col-sm-5">
		  <div class="input-group"> 
			<input type="hidden" id="spId" value="<?=$_GET['spid'];?>"/>
			<input type="text" class="form-control" id="leadName" aria-describedby="inputGroupSuccess2Status">
		  </div> 
		</div>
		<label class="control-label col-sm-1" for="emailAddress">eMail</label>
		<div class="col-sm-5">
		  <div class="input-group">
			<span class="input-group-addon">@</span>
			<input type="text" class="form-control" id="emailAddress">
		  </div> 
		</div>
	  </div>
	</form>
</div> 
<div class="modal-footer"> 
	<div class="col-sm-12"> 
		<button onClick="leadSignUp()" type="button" class="btn btn-primary">Send PQR</button>
	</div>
</div>