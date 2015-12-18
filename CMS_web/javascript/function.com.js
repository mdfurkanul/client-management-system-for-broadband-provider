function _(el) {
	return document.getElementById(el);
}

function callFile(uri){  
	var allText='Ajax call error.....:('; 
	var status=false; 
	var rawFile = new XMLHttpRequest(); 
	rawFile.open("GET",uri,false);
	rawFile.onreadystatechange = function ()
	{
		if(rawFile.readyState === 4)
		{
			if(rawFile.status === 200 || rawFile.status == 0)
			{ 
				allText = rawFile.responseText; 
				status=true;
			}
		}
	}
	rawFile.send(null); 
	return {'exec':status,'data':allText}; 
}

function leftMenuControllar(pg){
	var uri = pg+'.php';
	var file = callFile(uri);
	if(file.exec){
		dashboardLoading();
		setTimeout(function(){
			_('admin-panel-content').innerHTML = file.data;
		},300); 
	}else{
		alert('Error: Ops! something went wrong..:(');
	}
	var emsg = _("dash-board-error-message");
	if(emsg!==undefined){
		emsg.style.display="none";
	}
	var smsg = _("dash-board-success-message");
	if(smsg!==undefined){
		smsg.style.display="none";
	}
}

function showStaticModal(id){
	$('#'+id).modal({
		backdrop: 'static',
		keyboard: false
	})
}

function showDynamicModal(id){
	$('#'+id).modal('show')
}

function closeModal(id){
	$('#'+id).modal('hide')
}	
 
$(document).ready(function(){
	$('.list-group-item').click(function(){ 
		$('.list-group-item').removeClass('active'); 
		$(this).addClass('active'); 
	});
}); 
function addOption(val,action){  
	var uri = 'database/add-option.php?val='+val+'&action='+action;
	var file = callFile(uri);
	removeOption(action);
	if(file.exec){
		var data = JSON.parse(file.data)
		if(data.exist){
			var option = data.value;
			$.each(option, function( index, value ) {
			   $('#'+action).append($("<option></option>").val(value).html(value));
			}); 		
		}
	}
} 

function removeOption(sel){ 
	$('#'+sel+' option[value!=""]').remove();
}

function sendPQR(sp){
	var file = callFile('ajax-files/check_login_status.php');
	if(file.exec){
		var lead = JSON.parse(file.data);
		if(lead.exist){
			pqrProcess(sp);
		}else{
			newLeadForm(sp);
		}
	} 
}

function pqrProcess(sp){
	var uri = jQuery(location).attr('href').split("?");
	var pash = uri[1].split("#");
	var param = pash[0];
	var file = callFile('ajax-files/send_new_pqr.php?'+param+'&spid='+sp);
	if(file.exec){ 
		var send = JSON.parse(file.data);
		if(send.success){ 
			if(send.next){
				var next = send.nextStep;
				if(next=="askHour"){
					alert("PQR has been sent. in this step we will ask for how many hours you need");
				}
			}else{
				pqrMessage("pqrSuccess");
			}
		}
		else{
			pqrMessage("pqrError");
		}
	}
	else{
		pqrMessage("pqrError");
	}
}

function pqrMessage(msg){
	_(msg).style.display="block";
	setTimeout(function(){
		_("pqrSuccess").style.display="none";
	},5000); 
}

function newLeadForm(sp){
	secondWindow("lead_sign_up_form.php?spid="+sp); 
}

function leadSignUp(){
	var sp = _("spId").value;
	var name = _("leadName").value;
	var email = _("emailAddress").value;
	var uri = "lead_sign_up_process.php?name="+name+"&email="+email;
	var file = callFile(uri);
	if(file.exec){
		closeModal('send-pqr');
		var reg = JSON.parse(file.data);
		if(reg.success){
			pqrProcess(sp);
		}
		else{
			alert("Ops! Something went wrong...:(");
		}
	}
}

function secondWindow(uri){
	var file = callFile("ajax-files/"+uri);
	if(file.exec){
		$("#div-ajax-echo").html(file.data);
		showDynamicModal('send-pqr');
	}
}