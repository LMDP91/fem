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


<?php
include_once('classes/imagen.class.php');
$imagen = new Imagen;

$imagen->setImagenId($_GET["Id"]);
$InfoImg = $imagen->Info();

$imagen->setImagenId($_GET["Id"]);
$InfoFicha = $imagen->InfoFicha();

$imagen->setImagenId($_GET["Id"]);
$InfoVideos = $imagen->InfoVideos();

// echo "<pre>"; print_r($InfoFicha);
// exit;
$imagen->setCategoriaId($_GET["catId"]);
$InfoCategoria = $imagen->InfoCategoria();

$imagen->setCategoriaId($_GET["catId"]);
$ltsImagen = $imagen->Enumerate();

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
  <section id="headline">
    <div class="container">
      <h3><small>PRODUCTOS</small>|<?php echo ($InfoCategoria["nombre"])?></h3>
    </div>
  </section>
  
  


		
   <section class="container page-content" >
    <hr class="vertical-space2">
    <section class="eleven columns">
		<div class="shop-wrap">
     <figure class="shop-item one_half">
	  <span class="onsale"><?php if($_GET["used"]=="no"){ ?>Rentame!<?php } else{ ?>Comprame!<?php } ?></span>	 
		 <br>
		 <br>
		<div class="img-item"> 
		<img src="images/<?php echo $InfoImg["ruta"]?>" alt="" style="width:230px">
			<div class="zoomex2"><h6>Mex Rental<br><small>2015</small></h6>
			<a href="images/<?php echo $InfoImg["ruta"]?>" class="prettyPhoto zoomlink1" >
				<i class="fa-plus"></i>
				</a>
			<a href="categoria.php?cat=6&page=categoria" class="zoomlink2" >

			</a>
		</div>
	</div> 
		 
		 
	</figure>
      <!-- end-product-item-->
	  <div class="one_half column-last">
		  <h1><?php echo $InfoImg["nombre"]?></h1>
		 <!-- <h2 class="price"><small>$ 51</small><span class="amount">$ 39</span></h2>-->
		  <p><?php echo $InfoImg["descripcion"]?></p>
		  <hr class="vertical-space">
		  <div class="quantity buttons_added">
		 <!-- <input class="minus" type="button" value="-"></input>
		  <input type="text" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text">
		  <input class="plus" type="button" value="+"></input>-->
		  <!--<a href="#" class="addtocart">Add to Cart</a>-->
		  </div>
	  </div> 
	  	  
<hr class="vertical-space1">

      <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#Description" data-toggle="tab">Ficha Tecnica</a></li>
        <li><a href="#Reviews" data-toggle="tab">Solicitar Información</a></li>
        <li><a href="#videos" data-toggle="tab">Videos</a></li>
      </ul>
	  
	  <div id="myTabContent" class="tab-content">
        <div class="tab-pane active" id="Description">
          <hr class="vertical-space1">
          <p>
			<table>
				
					<?php foreach($InfoFicha as $key=>$aux){?>
					<tr><td><b><?php echo $aux["field"]?></b></td>
					<td><?php echo $aux["value"]?></td></tr>
					<?php }?>
				
			</table>
		  </p>
        </div>
        <div class="tab-pane" id="Reviews">
          <hr class="vertical-space1">
		   <h5><strong></strong></h5>
			<p>Por favor completa los campos del formulario, y uno nuestros asesores se pondrá en contacto contigo</p>
			<h5><strong></strong></h5>
			<label>Nombre</label> 
			<input name="" type="text">
			<label>Correo Electronico</label> 
			<input name="" type="text">
			<label>Comentario</label> 
			<textarea name="" cols="" rows=""></textarea>
			<br>
			<input name="" type="submit" class="small" value="Enviar">
        </div>       
         <div class="tab-pane" id="videos">
			<table>
				<tr>
					<?php foreach($InfoVideos as $key=>$aux){?>
					
					<td>
						<?php echo $aux["description"]?>
						<br>
						<br>
						<?php echo $aux["url"]?>
					</td>
					<?php }?>
				</tr>
			</table>
		</div>
      </div>
	  
	  <hr class="vertical-space2">
	  
	  <h4 class="subtitle">Mex Rental</h4>
	  <hr class="vertical-space1">
	 
     
     
      <!-- end-product-item-->
	  </div>

	</section>
    <!-- end-main-content -->
	
    <aside class="four columns offset-by-one sidebar">
      <div class="side-cart">
	  <h4 class="subtitle"><i class="fa-shopping-cart"></i>Productos Relacionados</h4>
        <ul class="side-list">
		
		<?php
		foreach($ltsImagen as $key=>$aux)
		{
			if($key<=4)
			{	
		?>
			  <li><button type="button" class="close" data-dismiss="alert">&times;</button>
			  <a href="product.php?used=no&Id=<?php echo $aux["imagenId"]?>&catId=<?php echo $aux["categoriaId"]?>"><img src="images/<?php echo $aux["ruta"]?>" alt=""></a>
			  <h5><a href="product.php?used=no&Id=<?php echo $aux["imagenId"]?>&catId=<?php echo $aux["categoriaId"]?>"><?php echo $aux["nombre"]?></a></h5>
			  <p class="price"><span class="amount"><?php if($aux["modelo"] == ""){ echo "&nbsp;";}else{ echo $aux["nombre"];}?></span></p>
			  </li>
		<?php
			}
		}
		?>
    
        </ul>
		
      </div>
	  <br class="clear">
      <h4 class="subtitle">Otros Productos</h4>
		<?php 
		if($_GET["page"]=="used")
		{
		?>
			<div class="side-list">
				<ul>
				  <li>
				  <a href="used.php?cat=1&page=used"><img src="images/index/compactacion/1.png" alt=""></a> 
				  <h5><a href="used.php?cat=1&page=used">Compactación</a></h5>
				  <p class="price"><span class="amount">&nbsp;</span></p>
				  </li>
				  <li>
				  <a href="used.php?cat=2&page=used"><img src="images/index/concreto/2.png" alt=""></a>
				  <h5><a href="used.php?cat=2&page=used">Concreto</a></h5>
				  <p class="price"><span class="amount">&nbsp;</span></p>
				  </li>
				  <li><a href="used.php?cat=7&page=used"><img src="images/index/complementario/1.png" alt=""></a>
				  <h5><a href="used.php?cat=7&page=used">Complementarios</a></h5>
				  <p class="price"><span class="amount">&nbsp;</span></p>
				  </li>
				  <li><a href="used.php?cat=4&page=used"><img src="images/index/demolicion/2.png" alt=""></a>
				  <h5><a href="used.php?cat=4&page=used">Demolición</a></h5>
				  <p class="price"><span class="amount">&nbsp;</span></p>
				  </li>
				  <li><a href="used.php?cat=6&page=used"><img src="images/index/bombeo/bombeo_3.png" alt=""></a>
				  <h5><a href="used.php?cat=6&page=used">Bombeo</a></h5>
				  <p class="price"><span class="amount">&nbsp;</span></p>
				  </li>
				</ul>
			  </div>
		<?php
		}
		else{
		?>
			  <div class="side-list">
				<ul>
				  <li>
				  <a href="categoria.php?cat=1&page=categoria"><img src="images/index/compactacion/1.png" alt=""></a> 
				  <h5><a href="categoria.php?cat=1&page=categoria">Compactación</a></h5>
				  <p class="price"><span class="amount">&nbsp;</span></p>
				  </li>
				  <li>
				  <a href="categoria.php?cat=2&page=categoria"><img src="images/index/concreto/2.png" alt=""></a>
				  <h5><a href="categoria.php?cat=2&page=categoria">Concreto</a></h5>
				  <p class="price"><span class="amount">&nbsp;</span></p>
				  </li>
				  <li><a href="categoria.php?cat=7&page=categoria"><img src="images/index/complementario/1.png" alt=""></a>
				  <h5><a href="categoria.php?cat=7&page=categoria">Complementarios</a></h5>
				  <p class="price"><span class="amount">&nbsp;</span></p>
				  </li>
				  <li><a href="categoria.php?cat=4&page=categoria"><img src="images/index/demolicion/2.png" alt=""></a>
				  <h5><a href="categoria.php?cat=4&page=categoria">Demolición</a></h5>
				  <p class="price"><span class="amount">&nbsp;</span></p>
				  </li>
				  <li><a href="categoria.php?cat=6&page=categoria"><img src="images/index/bombeo/bombeo_3.png" alt=""></a>
				  <h5><a href="categoria.php?cat=6&page=categoria">Bombeo</a></h5>
				  <p class="price"><span class="amount">&nbsp;</span></p>
				  </li>
				</ul>
			  </div>
		<?php
		}			
		?>
      <!-- end-product-list -->
      <br class="clear">
   
    
      <br class="clear">

    </aside>
    <!-- end-sidebar-->
    <br class="clear">
  </section>
  <!-- container -->
  
	
	<?php
	include("pie.php");
	?>
	

</body>
</html>