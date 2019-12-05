var AJAX_PATH = WEB_ROOT+"/ajax/account-create.php";


function SaveCuenta(){
	
			
	$.ajax({
	  	type: "POST",
	  	url: AJAX_PATH,
	  	data: $("#frmGral").serialize(true)+'&type=enviarDatos',
		beforeSend: function(){			
			$("#btnEnviar").hide();
			$("#loader").html(LOADER);
			$("#txtErrMsg").hide(0);
		},
	  	success: function(response) {	
		console.log(response);
			var splitResp = response.split("[#]");

			$("#loader").html("");
			
			if(splitResp[0] == "ok"){
				$("#divRegistro").html(splitResp[1])
					
				// LoadPage(p);
			}else if(splitResp[0] == "fail"){
				$("#btnEnviar").show();
				$("#txtErrMsg").show();
				$("#txtErrMsg").show();
				$("#txtErrMsg").html(splitResp[1]);				
			}else{
				alert(msgFail);
			}
			
		},
		error:function(){
			alert(msgError);
		}
    });
		
}//SaveReg


function valida(tipo,field){
	
			
	$.ajax({
	  	type: "POST",
	  	url: AJAX_PATH,
	  	data: $("#frmGral").serialize(true)+'&type=valida&tipo='+tipo,
		beforeSend: function(){			
			$("#loader").html(LOADER);
			$("#txtErrMsg").hide(0);
			$("#res_"+field).hide();
		},
	  	success: function(response) {	
		console.log(response);
			var splitResp = response.split("[#]");

			$("#loader").html("");
			if(splitResp[0] == "fail"){
				$("#txtErrMsg").show();
				$("#txtErrMsg").html(splitResp[1]);	
				// $("#res_"+field).html(splitResp[1]);	
				// $("#txtErrMsg").show();
				// $("#txtErrMsg").show();
							
			}
			
		},
		error:function(){
			alert(msgError);
		}
    });
		
}//valida



function fnFechaNa(Id)
	{
		// alert("hola")
		// $.datepicker.setDefaults( $.datepicker.regional['es'] );
		$('#fnacimiento').datepicker({
		 dateFormat: 'yy-mm-dd',
		}).focus();

	}