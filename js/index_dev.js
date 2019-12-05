var AJAX_PATH = WEB_ROOT+"/ajax/index_dev.php";

function openNew(){
	$('html,body').animate({
					scrollTop: $("#divProo").offset().top
				}, 2000);
}

function openNewN(){
	$('html,body').animate({
					scrollTop: $("#divNosotros").offset().top
				}, 2000);
}



function openNewP(){
	$('html,body').animate({
					scrollTop: $("#divProo5").offset().top
				}, 2000);
}

$(window).load(function(){
$('.bloque').smoove({offset:'40%'});
})



function edit(Id){
	
	$.ajax({
	  	type: "POST",
	  	url: AJAX_PATH,
	  	data: "type=edit&Id="+Id,		
	  	success: function(response) {

			console.log(response)
			var splitResp = response.split("[#]");
				$("#draggable").html(splitResp[1]);					
			if(splitResp[0] == "ok")
				$("#draggable").html(splitResp[1]);
			else
				alert(msgFail);
		},
		error:function(){
			alert(msgError);
		}
    });
	
	$("#draggable").modal("show");
	
}//AddReg



function upFile(Id,reqId,tramiteId){
	
		$("#type").val("upFile");
		$("#auxrequisito").val(reqId);

		// En esta var va incluido $_POST y $_FILES
			var fd = new FormData(document.getElementById("frmGral"));
			$.ajax({
				url: AJAX_PATH,
				data: fd,
				processData: false,
				contentType: false,
				type: 'POST',
				xhr: function(){
						var XHR = $.ajaxSettings.xhr();
						XHR.upload.addEventListener('progress',function(e){
							console.log(e)
							var Progress = ((e.loaded / e.total)*100);
							Progress = (Progress);
							console.log(Progress)
							$('#progress').val(Math.round(Progress));
							$('#porcentaje').html(Math.round(Progress));
							
						},false);
					return XHR;
				},
				beforeSend: function(){		
					$("#loader").html(LOADER);
					$("#erro").hide(0);
				},
				success: function(response){
					
					console.log(response);
					var splitResp = response.split("[#]");

					$("#loader").html("");
					
					if(splitResp[0] == "ok"){
						// $("#preLoad_"+reqId).html(splitResp[1]);
						location.reload();						
					}else if(splitResp[0] == "fail"){
						$("#erro"+reqId).show(0);
						$("#erro").html(splitResp[1]);		
						$("#txtErrMsg").show();
						$("#txtErrMsg").show();
						$("#txtErrMsg").html(splitResp[1]);				
					}else{
						alert(msgFail);
					}
				},
			})
			
		}