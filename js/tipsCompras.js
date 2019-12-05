var AJAX_PATH = WEB_ROOT+"/ajax/tipsCompras.php";






function SaveEncuesta(Id){
	
	$.ajax({
	  	type: "POST",
	  	url: AJAX_PATH,
	  	data: "type=SaveEncuesta&Id="+Id+'&'+$("#frmGral").serialize(true),
		beforeSend: function(){			
			// $(".loader").html(LOADER);
			// $(".txtErrMsg").hide(0);
		},		
	  	success: function(response) {		
			$(".loader").html('');
			console.log(response)
			var splitResp = response.split("[#]");
									
			if(splitResp[0] == "ok"){							
				// window.location.href = WEB_ROOT+"/account";
				$("#msjEncuesta").html(splitResp[1]);
				$("#div_encuesta").hide();
				$(".iniciar").show();
			}else if(splitResp[0] == "fail"){
				
				console.log(splitResp[1]);
				// alert(splitResp[1])
				$("#msj").html(splitResp[1]);
			}else{
				alert("Ocurrio un error al cargar los datos.");
			}
		},
		error:function(){
			alert(msgError);
		}
    });

}//enviarPedido

function iniciarEncuesta(){
	
	$("#msjEncuesta").html('');
	$("#div_encuesta").show();
	$(".iniciar").hide();
}


