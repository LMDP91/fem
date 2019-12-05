var AJAX_PATH = WEB_ROOT+"/ajax/account-create.php";

function ActivaCuenta(){
	
	$.ajax({
	  	type: "POST",
	  	url: AJAX_PATH,
		data: $("#frmGral").serialize(true),
	  	success: function(response) {			
			var splitResp = response.split("[#]");
			// console.log(response)						
									
			if(splitResp[0] == "ok")
				window.location.href = WEB_ROOT;
			else
				alert(msgFail);
		},
		error:function(){
			alert(msgError);
		}
    });
	
	$("#frmModal").modal("show");
	
}//AddReg
