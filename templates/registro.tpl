<!DOCTYPE html>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Business Portfolio Parallax HTML5 Template">
		<meta name="author" content="XpeedStudio">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Document Title -->
		<title></title>
		<meta property="og:title" content="Tersus - Business Portfolio Parallax HTML5 Template - Style 01" >

		<!-- Favicon and Touch Icons -->
		<link rel="shortcut icon" href="{$WEB_ROOT}/assets_registro/img/favicon.ico">
		<link rel="apple-touch-icon" href="{$WEB_ROOT}/assets_registro/img/favicon-36x36.png">
		<link rel="apple-touch-icon" sizes="72x72" href="{$WEB_ROOT}/assets_registro/img/favicon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="{$WEB_ROOT}/assets_registro/img/favicon-114x114.png">
		<meta property="og:image" content="{$WEB_ROOT}/assets_registro/img/favicon-220x220.png" >

		<!-- StyleSheets -->
		<!-- dependencies | 3rd party components -->
		<link href='https://fonts.googleapis.com/css?family=Raleway:100,400,300,500,700%7CDynalight' rel='stylesheet' type='text/css'>

		<link href="{$WEB_ROOT}/assets_registro/css/bootstrap.css" rel="stylesheet">
		<link href="{$WEB_ROOT}/assets_registro/css/animate.min.css" rel="stylesheet" type='text/css' media="screen">
		<link href="{$WEB_ROOT}/assets_registro/css/hover-min.css" rel="stylesheet" type='text/css' media="screen">
		<link href="{$WEB_ROOT}/assets_registro/css/magnific-popup.css" rel="stylesheet" type='text/css' media="screen">
		<link href="{$WEB_ROOT}/assets_registro/css/font-awesome.min.css" rel="stylesheet" type='text/css' media="screen">

		<!-- plugin | necessary plugins -->
		<link href="{$WEB_ROOT}/assets_registro/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">

		<!-- core | template style -->
		<link href="{$WEB_ROOT}/assets_registro/css/tersus-custom.css" rel="stylesheet" media="screen">
		<link href="{$WEB_ROOT}/assets_registro/css/tersus-responsive.css" rel="stylesheet" media="screen">

		
	</head>

	<body class="tersus-style-02 tersus-blog" background="{$WEB_ROOT}/images/body1.jpg " style="background-attachment: fixed;">

		

		<!-- Disabled Javascript notification -->
		<div class="no-js-alert alert alert-danger no-radius alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			Please enable <strong>JavaScript</strong> to improve your experience.
		</div>


  		<!-- PRELOADER
  		==================================================================== !-->
		<!-- .preloader //begin -->
		<div class="preloader">
			<div class="preloader-container">
				<div class="sk-folding-cube">
					<div class="sk-cube1 sk-cube"></div>
					<div class="sk-cube2 sk-cube"></div>
					<div class="sk-cube4 sk-cube"></div>
					<div class="sk-cube3 sk-cube"></div>
				</div>
			</div>
		</div>
		<!-- .preloader //end -->


  		<!-- NAVIGATION
  		==================================================================== !-->
		<!-- .tersus-navigation-2 //begin -->
		<div style="background-color: white; border: 0px;" id="navigation-1" class="navbar navbar-fixed-top navbar-uppercase navbar-inverse tersus-navigation-2">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navbar-offcanvas" data-canvas="body">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand scroll-to" href="#intro">
				<!--<img src="assets_registro/img/logo-white.png" alt="tersus" />
					-->
					</a>
						<div style="filter:alpha(opacity=50); opacity:0.9;">
						<img src="{$WEB_ROOT}/images/logo.png" alt="tersus" style="width:80%" />
						</div>
				</div>
				<div id="navigation-1-collapse" class="navbar-offcanvas offcanvas navbar-right canvas-push" >
					
				</div><!--/.nav-collapse -->
			</div>
		</div>
  	
	
		<!-- tersus block page content //begin -->
		<div class="section spacing-sm tersus-block-page-content" >
			<div class="container">

				<div class="row">
					<div class="col-md-12">
						<div class="tersus-block-featured-1">
									<!-- featured content //begin -->
									<div class="featured-content" id="featured-1-content">
									
								
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>


				<div id="divRegistro" style="width:45%; background-color: rgba(211, 215, 226, 0.41); border-radius: 5px;" > <!--class="pattern-dot bg-dark contact-form spacing-sm"--> 
				<br>
				<img src="{$WEB_ROOT}/images/4.png" alt="tersus" style="width:10%" />
				<br>
				<br>
				<div style="background:gray"> <!--style="background-image:url('assets/img/style-02/contact-bg-img.jpg');"--></div>
				<div class="container">
					<form  id="frmGral"  class="form-ajax form-stripped" action="{$WEB_ROOT}/assets_registro/plugins/contactform/contact.php">
						

						<div class="form-group">
							<label><font color="white">Correo Electronico</font></label>
							<input required name= "email" id="email" type="text" class="form-control" placeholder="Correo Electronico" onblur="valida('correo',1)">
							<div id="res_1" class="alert alert-danger alert-dismissable" style="display:none; font-weight: 900">
							  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  <strong></strong>
							</div>
						</div>
						<div class="form-group">
							<label><font color="white">Contraseña</font></label>
							<input required name= "pass" id= "pass" type="password" class="form-control" placeholder="Contraseña" onblur="valida('contrasena',2)">
							
						</div>
						<div class="form-group">
							<label><font color="white">Confirma Contraseña</font></label>
							<input required name= "confirmapass"  id= "confirmapass" type="password" class="form-control" placeholder="Confirma Contraseña" onblur="valida('contrasena',2)">
							<div id="res_2" class="alert alert-danger alert-dismissable" style="display:none; font-weight: 900">
							  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  <strong></strong>
							</div>
						</div>
						
						<div class="form-group">
							<label><font color="white">Nombre</font></label>
							<input required name= "nombre" id= "nombre" type="text" class="form-control" placeholder="Nombre">
						</div>

						<div class="form-group">
							<label><font color="white">Apellido Paterno</font></label>
							<input required name= "apellidop" id= "apellidop" type="text" class="form-control" placeholder="Apellido Paterno">

						</div>
						<div class="form-group">
							<label><font color="white">Apellido Materno</font></label>
							<input required name= "apellidom" id= "apellidom" type="text" class="form-control" placeholder="Apellido Materno">

						</div>
						<div class="form-group">
							<label><font color="white">Telefono</font></label>
							<input required name= "telefono" id= "telefono" type="text" class="form-control" placeholder="Telefono">

						</div>
						<div class="form-group">
							<label><font color="white">Calle</font></label>
							<input required name= "direccion" id= "direccion" type="text" class="form-control" placeholder="Calle">

						</div>
						<div class="form-group">
							<label><font color="white">No. Interior</font></label>
							<input required name= "interior" id= "interior" type="text" class="form-control" placeholder="No. Interior">

						</div>
						<div class="form-group">
							<label><font color="white">No. Exterior</font></label>
							<input required name= "exterior" id= "exterior" type="text" class="form-control" placeholder="No. Exterior">

						</div>
						<div class="form-group">
							<label><font color="white">Colonia</font></label>
							<input required name= "colonia" id= "colonia" type="text" class="form-control" placeholder="Colonia">

						</div>
						<div class="form-group">
							<label><font color="white">Municipio</font></label>
							<select name="municipio" id="municipio" class="form-control">
								<option></option>
								<option>a</option>
							</select>

						</div>
						<div class="form-group">
							<label><font color="white">Tipo de Usuario</font></label>
							<select name="tipoUser" id="tipoUser" class="form-control">
								<option></option>
								{foreach from=$lstTipo item=item key=key}  
								<option value="{$item.tipousuarioId}">{$item.nombre}</option>
								{/foreach}
							</select>

						</div>
						
						
<!--
						<div class="form-group">
							<label>Message</label>
							<textarea required name= "message" class="form-control" rows="8" placeholder="Enter Your Message"></textarea>
						</div>-->
						
						
					</form>
					<!--
					<div class="alert alert-danger alert-dismissable">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  <strong>Success!</strong> Indicates a successful or positive action.
					</div>-->
	
					<div id="txtErrMsg" class="alert alert-danger alert-dismissable" style="display:none; font-weight: 900">
					  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  <strong></strong>
					</div>
					<div id="loader"></div>
					<button type="submit" style="" class="btn btn-primary pull-right" onClick="enviarDatos()" id="btnEnviar">Enviar</button>
				</div>
			</div>
								

							</div>
							
						</div>

						

					</div>
				</div>
			</div>
		</div>
		<!-- tersus block page content //end -->






  		<!-- Footer
  		==================================================================== !-->
		<!-- footer //begin -->
		<div id="footer" class="footer bg-dark footer-style-01">
			<div class="footer-before">
				<a href="#top" class="scroll-to btn-scroll-top">
					<img src="{$WEB_ROOT}/assets_registro/img/arrow-up.png" alt="tersus" />
				</a>
			</div>
			<div class="spacing-sm social-icons-style-1">
				<div class="container">
					<ul class="social-icons wow fadeInUp">
						<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a class="gplus" href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a class="behance" href="#"><i class="fa fa-behance"></i></a></li>
						<li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a class="github" href="#"><i class="fa fa-github"></i></a></li>
						<li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
						<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="footer-text">
				<div class="container">
				
				</div>
			</div>

		</div>
		<!-- footer //end -->

		<div id="fixer"></div>


		<!-- JavaScript -->
		<!-- config | template seetings -->
		<script type='text/javascript'>
		var tersusConfig = { 
		mapLat :     '23.70992', 
		mapLng :     '90.40714' 
		};


		</script>

		<!-- Custom Modernizr for checking css3 compablity -->
		
		
		<script src="{$WEB_ROOT}/assets_registro/js/modernizr.custom.js"></script>

		<!-- jQuery library -->
		<script src="{$WEB_ROOT}/assets_registro/js/jquery-1.11.3.js"></script>
		<script src="{$WEB_ROOT}/assets_registro/js/jquery-migrate.min.js"></script>

		<!-- dependencies | 3rd party components -->
		<script src="{$WEB_ROOT}/assets_registro/js/bootstrap.min.js"></script>
		<script src="{$WEB_ROOT}/assets_registro/js/smoothscroll.js"></script>
		<script src="{$WEB_ROOT}/assets_registro/js/waypoints.min.js"></script>
		<script src="{$WEB_ROOT}/assets_registro/js/wow.min.js"></script>
		<script src="{$WEB_ROOT}/assets_registro/js/counterup.js"></script>
		<script src="{$WEB_ROOT}/assets_registro/js/jquery.stellar.min.js"></script>
		<script src="{$WEB_ROOT}/assets_registro/js/jquery.magnific-popup.js"></script>
		<script src="{$WEB_ROOT}/assets_registro/js/isotope.pkgd.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsMtPkr4qxauBA7ci39C83IGCW7XPxaYY"></script>
		<script src="{$WEB_ROOT}/assets_registro/js/gmaps.js"></script>

		<!-- plugin | necessary plugins -->
		<script src="{$WEB_ROOT}/assets_registro/plugins/fancybox/jquery.fancybox.pack.js"></script>

		<!-- core | template script -->
		<script src="{$WEB_ROOT}/assets_registro/js/tersus-custom.js"></script>
		<script src="{$WEB_ROOT}/assets_registro/js/styles/style-02.js"></script>
		
		{include file="{$DOC_ROOT}/templates/3-default-js.tpl"}
		<script type="text/javascript">
		jQuery(document).ready(function() {    
		   App.init(); // initlayout and core plugins		   
		});
		</script>

	</body>
</html>