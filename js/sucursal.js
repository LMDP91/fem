function initialize(x,y,nombre,direccion) {
		var latlng = new google.maps.LatLng(x,  y); 
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
		var companyPos = new google.maps.LatLng(x,  y);
		var companyMarker = new google.maps.Marker({
			  position: companyPos,
			  map: map,
			  title:"Mex Rental"
		  });
		  
		  var contentString = '<div id="content">'+
				'<div id="siteNotice">'+
				'</div>'+
				'<h1 id="firstHeading" class="firstHeading">'+nombre+'</h1>'+
				'<div id="bodyContent">'+
				'<p><br>'+direccion+' </p>'+
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
