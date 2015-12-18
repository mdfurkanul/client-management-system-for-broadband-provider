function _(el){
	return document.getElementById(el);
} 
function callFile(uri){  
	var allText=''; 
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

function dashboardLoading(){
	$('#admin-panel-content').html('<div style="margin-top:100px;text-align:center"><img src="images/loading.GIF" width="50" height="50"/></div>');
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