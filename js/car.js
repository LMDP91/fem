var AJAX_PATH = WEB_ROOT+"/ajax/car.php";



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



function updateCar(Id){
	
	$.ajax({
	  	type: "POST",
	  	url: AJAX_PATH,
	  	data: "type=updateCar&Id="+Id+'&'+$("#frmGral").serialize(true),		
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

}//updateCar