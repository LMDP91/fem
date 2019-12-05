var AJAX_PATH = WEB_ROOT+"/ajax/pedido.php";


function DeleteReg(id){
	var eliminar =  confirm("¿ Realmente desea eliminar el pedido ?");
	if(!eliminar)
		return;
	else
    {
		$.ajax({
		  	type: "POST",
		  	url: AJAX_PATH,
		  	data: "type=remove&id="+id,		
		  	success: function(response) {	
			console.log(response)		
				var splitResp = response.split("[#]");
										
				if(splitResp[0] == "ok")
					location.reload();
				else
					alert(msgFail);
			},
			error:function(){
				alert(msgError);
			}
	    });
	}	
}//EditReg
function ActiveReg(id){
	var activar =  confirm("¿ Realmente desea activar el pedido ?");
	if(!activar)
		return;
	else{
	$.ajax({
	  	type: "POST",
	  	url: AJAX_PATH,
	  	data: "type=activar&id="+id,		
	  	success: function(response) {	
		console.log(response)		
			var splitResp = response.split("[#]");					
			if(splitResp[0] == "ok")
				location.reload();
			else
				alert(msgFail);
		},
		error:function(){
			alert(msgError);
		}
    });	
  }
}//ActiveReg
function LoadPage(p){
	$.ajax({
	  	type: "POST",
	  	url: AJAX_PATH,
	  	data: "type=loadPage&p="+p,
		beforeSend: function(){			
			$("#tblContent").html(LOADER3);
		},
	  	success: function(response) {	
			var splitResp = response.split("[#]");
			
			if(splitResp[0] == "ok")
			{ 
			  $("#tblContent").html(splitResp[1]);
			}
			else
				alert(msgFail);
		},
		error:function(){
			alert(msgError);
		}
    });
	
}//LoadPage

function buscarPedidos(){
    $.ajax({
        type: "POST",
        url: AJAX_PATH,
        data: $("#frmFiltroPedido").serialize(true),
        beforeSend: function(){
            $("#tblContent").html(LOADER3);
        },
        success: function(response) {
            var splitResp = response.split("[#]");
			console.log(response)
            if(splitResp[0] == "ok")
            {
                $("#tblContent").html(splitResp[1]);
            }
            else
                alert(msgFail);
        },
        error:function(){
            alert(msgError);
        }
    });
}


