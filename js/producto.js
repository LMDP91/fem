var AJAX_PATH = WEB_ROOT+"/ajax/producto.php";


function addCar(Id){
	
	$.ajax({
	  	type: "POST",
	  	url: AJAX_PATH,
	  	data: "type=addCar&Id="+Id,		
	  	success: function(response) {		

			console.log(response)
			var splitResp = response.split("[#]");
									
			if(splitResp[0] == "ok"){
				$("#divCar").html(splitResp[1]);
			}else if(splitResp[0]=="fail"){
				alert(splitResp[1]);
			}else{
				alert(msgFail);
			}
		},
		error:function(){
			alert(msgError);
		}
    });
	
	// $("#frmModal").modal("show");
	
}//addCar


function deleteCar(Id){
	
	$.ajax({
	  	type: "POST",
	  	url: AJAX_PATH,
	  	data: "type=deleteCar&Id="+Id,		
	  	success: function(response) {		

			console.log(response)
			var splitResp = response.split("[#]");
									
			if(splitResp[0] == "ok")
				$("#divCar").html(splitResp[1]);
			else
				alert(msgFail);
		},
		error:function(){
			alert(msgError);
		}
    });
	
	// $("#frmModal").modal("show");
	
}//deleteCar

// 

function buscar(Id){
	
	$.ajax({
	  	type: "POST",
	  	url: AJAX_PATH,
	  	// data: "type=buscar&Id="+Id,
		data: $("#fltProducto").serialize(true)+'&type=buscar',	
		beforeSend: function(){			
			$("#loader").html(LOADER);
			// $("#txtErrMsgInfo").hide(0);
		},		
	  	success: function(response) {		
			$("#loader").html('');
			console.log(response)
			var splitResp = response.split("[#]");
									
			if(splitResp[0] == "ok")
				$("#divResultado").html(splitResp[1]);
			else
				alert(msgFail);
		},
		error:function(){
			alert(msgError);
		}
    });
	
	// $("#frmModal").modal("show");
	
}//deleteCar
function buscarCategoria(Id){
	
	$.ajax({
	  	type: "POST",
	  	url: AJAX_PATH,
	  	// data: "type=buscar&Id="+Id,
		data: $("#fltProducto").serialize(true)+'&type=buscar',	
		beforeSend: function(){			
			$("#loader").html(LOADER);
			// $("#txtErrMsgInfo").hide(0);
		},		
	  	success: function(response) {		
			$("#loader").html('');
			console.log(response)
			var splitResp = response.split("[#]");
									
			if(splitResp[0] == "ok")
				$("#divResultado").html(splitResp[1]);
			else
				alert(msgFail);
		},
		error:function(){
			alert(msgError);
		}
    });
	
	// $("#frmModal").modal("show");
	
}//deleteCar
