<input type="text" id="name" placeholder="Name"/>
<input type="text" id="email" placeholder="eMail"/>
<input onClick="ajaxFunction()" type="button" value="Add"/>
<h3>Result:<span id="output"></span></h3>
<script language="javascript" type="text/javascript"> 
function ajaxFunction(){
	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var param = 'name='+name+'&email='+email;
	var ajaxRequest;   
	try{ 
		ajaxRequest = new XMLHttpRequest();
	}catch(e){ 
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		}catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			}catch (e){ 
				alert("Your browser broke!");
				return false;
			}
		}
	} 
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			var output = JSON.parse(ajaxRequest.responseText);
			if(output.status=='Success'){
				success();
			}
			else{
				failed();
			}
		}
	}
	success();
	ajaxRequest.open("GET", "insert.php?"+param, true);
	success();
	ajaxRequest.send(null); 
	success();
} 
function failed(){
	alert('Query Failed');
}
function success(){
	alert('Query Success');
}
function success(){
	alert('Query working');
}

</script>