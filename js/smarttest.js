var AJAX_PATH = WEB_ROOT+"/ajax/smarttest.php";
$(function () {
	$(".step").on("click",function () {
		var id = $(this).data("id");
		var name = $(this).data("name");
		$.ajax({
			type: "POST",
			url: AJAX_PATH,
			data: "type=getQuestions&id="+id,
			beforeSend: function(){
			},
			success: function(response) {
				$("#"+name).html(response);
				if($("#slider").length>0)
					$( "#slider" ).slider();

			},
			error:function(){
				alert(msgError);
			}
		});
	});
});
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


