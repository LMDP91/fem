<?php 
ini_set('display_errors', 1);
ini_set('register_globals', '0');
  ini_set('execution_time',3600);
  set_time_limit(3600);
//ini_set("display_errors", "ON"); 
////error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
//error_reporting(E_ALL & ~E_NOTICE);
// error_reporting(E_ALL ^ E_NOTICE);

$version = PHP_MAJOR_VERSION.".".PHP_MINOR_VERSION;

switch($version)
{
 case "5.3": $showErrors = E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT; break;
 case "5.4": $showErrors = E_ALL ^ (E_STRICT | E_NOTICE | E_DEPRECATED); break;
 default: $showErrors = E_ALL ^ (E_STRICT | E_NOTICE | E_DEPRECATED); break;
}
error_reporting($showErrors);

ini_set('display_errors', '1');


date_default_timezone_set('America/Mexico_City');
header('Content-type: text/html; charset=utf-8');

ini_set('default_charset','utf8');

mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
mb_language('uni');
mb_regex_encoding('UTF-8');
ob_start('mb_output_handler');

?>


<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Mex Rental</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/style.css" type="text/css"  media="all">
	<link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700|Roboto+Slab:300,400" rel="stylesheet" type="text/css">


	<!-- JS
  ================================================== -->
   <script type="text/javascript" src="js/jquery.min.js" ></script>
   <!--LIBRERIAS PARA GOOGLE MAPS-->
   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
   <script src="google-map-ciudadano.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="js/modernizr.custom.11889.js" type="text/javascript"></script>
	<![endif]-->
	<!-- HTML5 Shiv events (end)-->
   	
	
	
	<!-- Favicons
  ================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">

    </head>
<body>

	<!-- Primary Page Layout
	================================================== -->

<div id="wrap" class="colorskin-0">
	<?php
	include("menu.php");
	?>
</div>


<!-- end-header -->
<section id="hero" class="tbg1">

    <div id="layerslider-container-fw">
    <div id="layerslider" style="width: 100%; height: 530px; margin: 0px auto; ">
	
		 <div class="ls-layer" style="slidedirection: right; slideoutdirection : top; slidedelay: 5000; durationin: 1500; durationout: 1500; delayout: 500;"> 
			 <img src="images/slide-pics/a.jpg" class="ls-bg" alt="">
			   <h1 class="ls-s3" style="position: absolute; top:200px; left: 0px; color:#fff; slidedirection : top; font-weight:400; slideoutdirection : top; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 600;">Mex Rental Logistic de México</h1>
				<h4 class="ls-s3 l1-s1" style="position: absolute; top:320px; left: 500px; color:#fff; border-color:#fff; font-weight:400; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 700;">Sus Expertos en renta de maquinaria para la construcción</h4>
		 </div>
		 
		 <div class="ls-layer" style="slidedirection: right; slideoutdirection : top; slidedelay: 5000; durationin: 1500; durationout: 1500; delayout: 500;"> 
			<img src="images/slide-pics/bombeo_p.jpg" class="ls-bg" alt="">
				<h1 class="ls-s3" style="position: absolute; top:50px; left: 0px; color:white; slidedirection : top; slideoutdirection : top; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 600; font-weight:700;">Bombeo</h1>
				<a class="button green ls-s8" href="categoria.php?cat=6&page=categoria" style="position: absolute; top:200px; left: 70px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 600; color:#253042; border-color:#253042;">Catálogo</a>
		</div>
		   
		<div class="ls-layer" style="slidedirection: right; slidedelay: 5000; durationin: 1500; durationout: 1500;">
			<img src="images/slide-pics/complementarios_p_n.jpg" class="ls-bg" alt=""> 
			<h1 class="ls-s3" style="position: absolute; top:50px; left: 0px; color:#fff; slidedirection : top; slideoutdirection : top; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 600; font-weight:700;">Complementarios</h1>
			<a class="button green ls-s8" href="categoria.php?cat=7&page=categoria" style="position: absolute; top:150px; left: 250px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 600; color:#253042; border-color:#253042;">Catálogo</a>
		</div>
		<div class="ls-layer" style="slidedirection: right; slidedelay: 5000; durationin: 1500; durationout: 1500;">
			<img src="images/slide-pics/compactacion.jpg" class="ls-bg" alt=""> 
			<h1 class="ls-s3" style="position: absolute; top:50px; left: 0px; color:#fff; slidedirection : top; slideoutdirection : top; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 600; font-weight:700;">compactación</h1>
			<a class="button green ls-s8" href="categoria.php?cat=1&page=categoria" style="position: absolute; top:150px; left: 180px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 600; color:#253042; border-color:#253042;">Catálogo</a>
		</div>
		   
		<div class="ls-layer" style="slidedirection: right; slidedelay: 5000; durationin: 1500; durationout: 1500;">
			<img src="images/slide-pics/concreto_p.jpg" class="ls-bg" alt=""> 
			<h1 class="ls-s3" style="position: absolute; top:50px; left: 120px; color:#fff; slidedirection : top; slideoutdirection : top; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 600; font-weight:700;">Concreto</h1>
			<a class="button green ls-s8" href="categoria.php?cat=2&page=categoria" style="position: absolute; top:170px; left: 250px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 600; color:#253042; border-color:#253042;">Catálogo</a>
		</div>
		  
		<div class="ls-layer" style="slidedirection: right; slidedelay: 5000; durationin: 1500; durationout: 1500;">
			<img src="images/slide-pics/demoilicion_p_n.jpg" class="ls-bg" alt=""> 
			<h1 class="ls-s3" style="position: absolute; top:50px; left: 400px; color:#fff; slidedirection : top; slideoutdirection : top; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 600; font-weight:700;">demolición</h1>
			<a class="button green ls-s8" href="categoria.php?cat=4&page=categoria" style="position: absolute; top:180px; left: 550px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 600; color:#253042; border-color:#253042;">Catálogo</a>
		</div>
		
		<div class="ls-layer" style="slidedirection: right; slidedelay: 5000; durationin: 1500; durationout: 1500;">
			<img src="images/slide-pics/mayor.png" class="ls-bg" alt=""> 
			<h1 class="ls-s3" style="position: absolute; top:50px; left: 400px; color:#fff; slidedirection : top; slideoutdirection : top; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 600; font-weight:700;">Equipo mayor</h1>
			<a class="button green ls-s8" href="categoria.php?cat=4&page=categoria" style="position: absolute; top:180px; left: 550px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 600; color:#253042; border-color:#253042;">Catálogo</a>
		</div>
		
		<div class="ls-layer" style="slidedirection: right; slideoutdirection : top; slidedelay: 5000; durationin: 1500; durationout: 1500; delayout: 500;"> 
			<img src="images/slide-pics/generacion.png" class="ls-bg" alt="">
			<h1 class="ls-s3" style="position: absolute; top:170px; left: 750px; color:#fff; slidedirection : top; slideoutdirection : top; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInBack; delayin : 600; font-weight:700;">generación</h1>
			<a class="button green ls-s8" href="categoria.php?cat=3&page=categoria" style="position: absolute; top:280px; left: 900px; slidedirection : bottom; slideoutdirection : bottom; durationin : 3000; durationout : 750; easingin : easeInOutQuint; easingout : easeInOutQuint; delayin : 600; color:#253042; border-color:#253042;">Catálogo</a>

		</div>
	
   </div>
   </div>
 </section><!-- end-hero-->
  
<section class="latest-works">   	
	<hr class="vertical-space1">
	<div class="icon-top-title aligncenter">
	<!--<i class="li_diamond"></i>-->
	<hr class="vertical-space1">
	<h1 class="mex-title"><B>RENTA DE MAQUINARIA</B></h1><br>
	<h4>Conoce todos nuestros Equipos por Categoria</h4>
	<br>
	 <nav class="primary clearfix">
		  <div class="portfolioFilters">
			<a href="#" class="selected" data-filter="*">Todos</a>
			<a class="" href="#" data-filter=".bombeo">Bombeo </a>
			<a class="" href="#" data-filter=".complementario">Complementarios</a>
			<a class="" href="#" data-filter=".compactacion">Compactación</a>
			<a class="" href="#" data-filter=".concreto">Concreto</a>
			<a class="" href="#" data-filter=".demolicion">Demolición </a>
			<a class="" href="#" data-filter=".mayor">Equipo Mayor</a>
			<a class="" href="#" data-filter=".generacion">Generación</a>
			
			</div>
	</nav>
	</div>
	<hr class="vertical-space2">

	<div class="portfolio">
		
		<figure class="portfolio-item  video bombeo ">
			<div class="img-item">  <img src="images/index/bombeo/bombeo_1.png" alt="" style="width:230px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/bombeo/bombeo_1.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=6&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		  </figure>
		  
		  <figure class="portfolio-item  video bombeo ">
			<div class="img-item">  <img src="images/index/bombeo/bombeo_2.png" alt="" style="width:125px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/bombeo/bombeo_2.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=6&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		  </figure>
		  
		  <figure class="portfolio-item  video bombeo ">
			<div class="img-item">  <img src="images/index/bombeo/bombeo_3.png" alt="" style="width:230px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/bombeo/bombeo_3.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=6&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		  </figure>
	  
		<figure class="portfolio-item  video bombeo ">
			<div class="img-item">  <img src="images/index/bombeo/bombeo_4.png" alt="" style="width:205px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/bombeo/bombeo_4.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=6&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		  </figure>
		  
		  
		  <!-- end-portfolio-item-->
			 
		<figure class="portfolio-item  video complementario ">
			<div class="img-item">  <img src="images/index/complementario/1.png" alt="" style="width:200px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/complementario/1.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=7&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		 
		<figure class="portfolio-item  video complementario ">
			<div class="img-item">  <img src="images/index/complementario/2.png" alt="" style="width:175px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/complementario/2.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=7&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		 
		 <figure class="portfolio-item  video complementario ">
			<div class="img-item">  <img src="images/index/complementario/3.png" alt="" style="width:220px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/complementario/3.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=7&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		 </figure>
		 
		 <figure class="portfolio-item  video complementario ">
			<div class="img-item">  <img src="images/index/complementario/4.png" alt="" style="width:220px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/complementario/4.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=7&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		 </figure>
		 
		 <figure class="portfolio-item  video complementario ">
			<div class="img-item">  <img src="images/index/complementario/5.png" alt="" style="width:220px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/complementario/5.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=7&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		 </figure>
		
		  <!-- end-portfolio-item-->
			 
		<figure class="portfolio-item  video compactacion ">
			<div class="img-item">  <img src="images/index/compactacion/1.png" alt="" style="width:127px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/compactacion/1.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=1&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		 
		<figure class="portfolio-item  video compactacion ">
			<div class="img-item">  <img src="images/index/compactacion/2.png" alt="" style="width:263px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/compactacion/2.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=1&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		 
		
		 
		 <figure class="portfolio-item  video compactacion ">
			<div class="img-item">  <img src="images/index/compactacion/3.png" alt="" style="width:200px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/compactacion/3.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=1&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		 </figure>
		 
		  
		 
		  <figure class="portfolio-item  video compactacion ">
			<div class="img-item">  <img src="images/index/compactacion/5.png" alt="" style="width:200px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/compactacion/5.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=1&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		 </figure>
		 
		  <figure class="portfolio-item  video compactacion ">
			<div class="img-item">  <img src="images/index/compactacion/6.png" alt="" style="width:200px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/compactacion/6.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=1&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		 </figure>
		 
		  <figure class="portfolio-item  video compactacion ">
			<div class="img-item">  <img src="images/index/compactacion/7.png" alt="" style="width:200px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/compactacion/7.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=1&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		 </figure>
		 
		  <figure class="portfolio-item  video compactacion ">
			<div class="img-item">  <img src="images/index/compactacion/8.png" alt="" style="width:200px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/compactacion/8.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=1&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		 </figure>
		 
		 
		 <!-- end-portfolio-item-->
		 <figure class="portfolio-item  video concreto ">
			<div class="img-item">  <img src="images/index/concreto/1.png" alt="" style="width:225px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/concreto/1.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=2&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		 
		<figure class="portfolio-item  video concreto ">
			<div class="img-item">  <img src="images/index/concreto/2.png" alt="" style="width:197px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/concreto/2.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=2&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		 
		<figure class="portfolio-item  video concreto ">
			<div class="img-item">  <img src="images/index/concreto/3.png" alt="" style="width:380px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/concreto/3.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=2&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		 </figure>
		 
		 <figure class="portfolio-item  video concreto ">
			<div class="img-item">  <img src="images/index/concreto/4.png" alt="" style="width:380px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/concreto/4.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=2&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		 </figure>
		 
		
		 
		 <figure class="portfolio-item  video concreto ">
			<div class="img-item">  <img src="images/index/concreto/6.jpg" alt="" style="width:380px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/concreto/6.jpg" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=2&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		 </figure>
		  <!-- end-portfolio-item-->
		 <figure class="portfolio-item  video demolicion ">
			<div class="img-item">  <img src="images/index/demolicion/1.png" alt="" style="width:175px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/demolicion/1.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=4&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		 
		<figure class="portfolio-item  video demolicion ">
			<div class="img-item">  <img src="images/index/demolicion/2.png" alt="" style="width:225px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/demolicion/2.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=4&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		
			<figure class="portfolio-item  video demolicion ">
			<div class="img-item">  <img src="images/index/demolicion/3.jpg" alt="" style="width:225px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/demolicion/3.jpg" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=4&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		
		
		<figure class="portfolio-item  video demolicion ">
			<div class="img-item">  <img src="images/index/demolicion/4.jpg" alt="" style="width:225px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/demolicion/4.jpg" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=4&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		<!--generacion-->
		<figure class="portfolio-item  video generacion ">
			<div class="img-item">  <img src="images/index/generacion/1.png" alt="" style="width:225px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/generacion/1.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=4&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		<figure class="portfolio-item  video generacion ">
			<div class="img-item">  <img src="images/index/generacion/2.png" alt="" style="width:225px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/generacion/2.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=4&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		<figure class="portfolio-item  video generacion ">
			<div class="img-item">  <img src="images/index/generacion/3.png" alt="" style="width:225px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/generacion/3.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=4&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		<figure class="portfolio-item  video generacion ">
			<div class="img-item">  <img src="images/index/generacion/4.png" alt="" style="width:225px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/generacion/4.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=4&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		<figure class="portfolio-item  video generacion ">
			<div class="img-item">  <img src="images/index/generacion/5.png" alt="" style="width:225px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/generacion/5.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=4&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		<figure class="portfolio-item  video generacion ">
			<div class="img-item">  <img src="images/index/generacion/6.png" alt="" style="width:225px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/generacion/6.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=4&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		<figure class="portfolio-item  video generacion ">
			<div class="img-item">  <img src="images/index/generacion/7.png" alt="" style="width:225px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/generacion/7.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=4&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		<figure class="portfolio-item  video generacion ">
			<div class="img-item">  <img src="images/index/generacion/8.png" alt="" style="width:225px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/generacion/8.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=4&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		<figure class="portfolio-item  video generacion ">
			<div class="img-item">  <img src="images/index/generacion/9.png" alt="" style="width:225px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/generacion/9.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=4&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		<figure class="portfolio-item  video generacion ">
			<div class="img-item">  <img src="images/index/generacion/10.png" alt="" style="width:225px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/generacion/10.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=4&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		
		<!--equipo-->
		<figure class="portfolio-item  video mayor ">
			<div class="img-item">  <img src="images/index/equipo/1.jpg" alt="" style="width:225px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/equipo/1.jpg" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=5&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		<figure class="portfolio-item  video mayor ">
			<div class="img-item">  <img src="images/index/equipo/2.png" alt="" style="width:225px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/equipo/2.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=5&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		<figure class="portfolio-item  video mayor ">
			<div class="img-item">  <img src="images/index/equipo/3.png" alt="" style="width:225px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/equipo/3.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=5&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		<figure class="portfolio-item  video mayor ">
			<div class="img-item">  <img src="images/index/equipo/4.png" alt="" style="width:225px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6><a href="images/index/equipo/4.png" class="prettyPhoto zoomlink1" ><i class="fa-plus"></i></a><a href="categoria.php?cat=5&page=categoria" class="zoomlink2" ><i class="fa-arrow-right"></i></a></div></div>
		</figure>
		
		</div>	
		<script src="isotope/isotope.js"></script>
		<script src="isotope/isotope-custom.js"></script>
		<script src="js/jquery.prettyPhoto.js" ></script>
</section>


<section class="container first-block aligncenter" >
<hr class="vertical-space2">
<h1 class="mex-title"><B>CENTRO DE SERVICIO AUTORIZADO</B></h1><br>
<img src="images/logocipsa.jpg" width="20%" class="ls-bg" alt="">
<hr class="vertical-space3">

		<div class="one_fourth">
	      	<article class="icon-box1"><i class="fa-desktop"></i>
	        <h5>Refacciones Originales</h5>
	      
      		</article>
    	</div>
	    <div class="one_fourth">
	    	<article class="icon-box1"><i class="li_bulb"></i>
	        	<h5>Personal Calificado</h5>
	        	
	    	</article>
	    </div>
   	    <div class="one_fourth">
      		<article class="icon-box1"><i class="fa-hand-o-up"></i>
        		<h5>Servicio en Taller y en Obra</h5>
        		
      		</article>
    	</div>
		<div class="one_fourth column-last">
	      	<article class="icon-box1"><i class="fa-laptop"></i>
	        <h5>Garantia en el Servicio</h5>
	      
      		</article>
    	</div>
		<hr class="vertical-space1">
</section>

<section class="container">
<hr class="vertical-space4">
	<div class="icon-top-title aligncenter">
<hr class="vertical-space2">
<i class="fa-group"></i>
  <hr class="vertical-space1">

<h1>Nuestras Marcas</h1>
<h4 class="slight">Las Mejores Marcas en Equipo y Maquinaria</h4>
		<div class="sixteen columns our-clients-wrap">
		<img src="images/clients/marcas.png" alt="">
		<!--
	          <ul id="our-clients" class="our-clients">
	            <li><img src="images/clients/c1.jpg" alt=""></li>
	            <li><img src="images/clients/c2.png" alt=""></li>
	            <li><img src="images/clients/c3.gif" alt="" width="140%" width="140%"></li>
	            <li><img src="images/clients/c4.jpg" alt=""></li>
	            <li><img src="images/clients/c5.png" alt=""></li>
	            <li><img src="images/clients/c6.jpg" alt=""></li>
	
	          </ul>-->
	    </div>  
<hr class="vertical-space4">
</div>
    
	</section>

<section class="container">
<!--
<div class="icon-top-title aligncenter sixteen columns">
<hr class="vertical-space4">
<i class="fa-lightbulb-o"></i>
  <hr class="vertical-space1">

<h3>Florida Beautiful, simple and easy to use</h3>
<h3 class="slight">Fully Responsive and Retina Ready</h3>
<hr class="vertical-space2">
<img src="images/ipadpic01.jpg" alt="" >
<hr class="vertical-space1">
<h6><strong>Florida is an all-in-one solution for business websites that is super sleek <br>
finding harmony between simplicity and striking design elements.</strong></h6>
 <br>
 <a class="magicmore" href="#">Learn More</a>
  <hr class="vertical-space2">
</div>
-->
   <hr>
	  <hr class="vertical-space2">
    <article class="eight columns">
      <div class="pad-r10">
        <h4><strong>Galeria</strong></h4>
        <img src="images/galeria.png" class="alignright" alt="" style="width:150px ">
        <p>Fotografias y videos </p>
  <!--<a href="ourteam.php?cat=1" class="magicmore">Compactación</a><br>
  <a href="ourteam.php?cat=2" class="magicmore">Concreto</a><br> 
  <a href="ourteam.php?cat=3" class="magicmore">Generación</a><br>
  <a href="ourteam.php?cat=4" class="magicmore">Demolición</a><br> 
  <a href="ourteam.php?cat=5" class="magicmore">Equipo Mayor</a><br> 
  <a href="ourteam.php?cat=6" class="magicmore">Bombeo</a><br>   </div>-->
    </article>
    <article class="eight columns alpha omega">
      <div class="brdr-l1 pad-l40">
        <h4><strong>¿Necesitas Ayuda?</strong></h4>
        <img src="images/promo-pic02.png" class="alignright" alt="">
        <p>Asesoria y orientación sin costo, de equipos que requiere para su obra...</p>
        <a href="contact.php" class="magicmore">Llamanos..</a> </div>
    </article>
	<!-- /end-two columns -->
    <hr class="vertical-space3">
	<hr class="vertical-space4">
	<div class="qot-week">
	<div class="qot-pic"></div>
	<h6 class="qot-title">No te Preocupes!!!</h6>
	<blockquote><h3>Tenemos Todo lo que Necesitas...</h3>
	<cite title="">    MEX RENTAL</cite></blockquote>

	</div>
    <hr class="vertical-space3">
</section>


	
	
	<?php
	include("pie.php");
	?>
	
	
	

 
</body>
</html>