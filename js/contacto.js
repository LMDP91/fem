var AJAX_PATH = WEB_ROOT+"/ajax/contacto.php";

function enviarCorreo(){
	
	var p = $("#page").val();
	var id = $("#id").val();
	$("#type").val("enviarCorreo");
			
	$.ajax({
	  	type: "POST",
	  	url: AJAX_PATH,
	  	data: $("#frmGral").serialize(true),
		beforeSend: function(){			
			// $("#loader").html(LOADER);
			$("#txtErrMsg").hide(0);
		},
	  	success: function(response) {
console.log(response);
			var splitResp = response.split("[#]");

			// $("#loader").html("");
			
			if(splitResp[0] == "ok"){
				$("#respuesta").html(splitResp[1]);
				
				if(id == "") 
					p = 0;
					
				// Search(p);
			}else if(splitResp[0] == "fail"){
				$("#txtErrMsg").show();
				$("#txtErrMsg").show();
				$("#txtErrMsg").html(splitResp[1]);				
			}else{
				// alert(msgFail);
			}
			
		},
		error:function(){
			alert(msgError);
		}
    });
		
}//SaveReg

function initialize() {
		var latlng = new google.maps.LatLng(16.7676672,  -93.1184941); 
		var settings= {
			zoom: 15,
			center: latlng,
			mapTypeControl: true,
			mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
			navigationControl: true,
			navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
		var companyPos = new google.maps.LatLng(16.7676672,  -93.1184941);
		var companyMarker = new google.maps.Marker({
			  position: companyPos,
			  map: map,
			  title:"Mex Rental"
		  });
		  
		  var contentString = '<div id="content">'+
				'<div id="siteNotice">'+
				'</div>'+
				'<h1 id="firstHeading" class="firstHeading">Oficinas Centrales EMFRICH </h1>'+
				'<div id="bodyContent">'+
				'<p><br> </p>'+
				'</div>'+
				'</div>';
			 
			var infowindow = new google.maps.InfoWindow({
				content: contentString
			});
		  // google.maps.event.addListener(companyMarker, 'mousedown', function() {
			infowindow.open(map,companyMarker);
			// openInfoWindow(companyMarker);
			// });
		  
		}
		
		
		