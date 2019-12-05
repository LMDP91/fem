<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> 
<html lang="en" class="no-js"> <!--<![endif]-->
<head><!--
	{include file="{$DOC_ROOT}/templates/1-default-meta.tpl"}
	{include file="{$DOC_ROOT}/templates/2-default-css.tpl"}-->
	{include file="{$DOC_ROOT}/templates/header.tpl"}
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
  $( function() {
    $( "#slider" ).slider();
  } );
  </script>
</head>

<body class="" >
	<div id="wrap" class="colorskin-0">
				{include file="{$DOC_ROOT}/templates/menus/main.tpl"}
    <div class="container"><div class="container iniciar">
      <p align="right"> <Center><h6>En esta sección podrás consultar información de utilidad que debes considerar al momento de realizar la compra de tus productos.
<p>En las siguientes guías de compra encontrarás características, beneficios, recomendaciones y tips sobre algunos de nuestros productos disponibles tanto en línea como en tu tienda más cercana.</p>
<b>Juntos ¡Hagamos más!</b></h6></center></p>
    </div>



  
  <section class="container page-content" >
    <hr class="vertical-space2">
    <section class="eleven columns">
     
	  <article class="blog-post"><div class="flexslider">
        <ul class="slides">
          <li> <img src="images/tips/Comprar.jpg" alt=""> </li>
          <li> <img src="images/tips/televisores.jpg" alt=""> </li>
          <li> <img src="images/tips/familia-comprando-internet-1.jpg" alt=""> </li>
          <li> <img src="images/tips/tumblr_ngn7fmxpZg1tax10ao1_1280.jpg" alt=""> </li>
        </ul>
      </div>
        <div class="two columns alpha">        
        </div>
        <div class="nine columns omega">
          <h3><a href="blog-single.html">Aprovecha todo el sitio comprando en línea</a></h3>
          <div class="postmetadata">
            <h6 class="blog-author"><a href="{$WEB_ROOT}/tips-descuento">Aproveche los descuentos</a> </h6>			
            <h6 class="blog-cat"><strong>in</strong> <a href="#">Business</a>, <a href="#">News</a>, <a href="#">Company</a> </h6>
          </div>
          <p align="justify">Sin duda alguna, la ventaja más destacada que te ofrece la compra online. Poder comprar desde cualquier dispositivo móvil, estés donde estés y a cualquier hora del día, es un punto a favor muy a tener en cuenta.</p>
		  <p>Te damos la oportunidad de comprar en nuestra tienda online los 365 días del año, las 24 horas.</p>
          <a href="blog-single.html"  class="readmore">Leer Más</a> </div>
        <hr class="vertical-space1">
      </article>
      <article class="blog-post"> <img src="images/tips/co2.jpg" alt=""><br>
        <p align="justify">La disponibilidad es otra de las cosas que puede contar como ventaja de Internet al momento de comprar, aquí no importan los horarios como en las tiendas físicas, la hora es lo de menos en Internet, puede comprar lo que quiera cuando quiera y recibirlo en la comodidad de su casa.</p>
      
        <hr class="vertical-space1">
      </article>
    
    
      <br class="clear">
     
      <div class="vertical-space2"></div>
    </section>
	
    <!-- end-main-content -->
    <aside class="four columns offset-by-one sidebar">     
      <h4 class="subtitle">Temas de interes</h4>
      <div class="listbox1">
        <ul>
          <li><a href="http://www.bancomundial.org/">Banco Mundial (DOING BUSINESS) </a></li>
          <li><a href="http://mexico.cnn.com/">Noticias</a></li>
          <li><a href="http://www.imss.gob.mx/tramites/imss02008">Servicios</a></li>
          <li><a href="http://www.turismochiapas.gob.mx/sectur/index.php">otro </a></li>
        </ul>
      </div>
      <!-- end-listbox1 -->
      <br class="clear">      
      <h4 class="subtitle">Inspírate</h4>
      <div class="listbox1">
        <ul>
          <li><a href="#">Diciembre 2018</a></li>
          <li><a href="#">Enero 2018</a></li>
          <li><a href="#">Marzo 2018</a></li>
          <li><a href="#">Abril 2018</a></li>
        </ul>
      </div>
      <!-- end-listbox1 -->
	  
      </div>
      <!-- end-product-list --> 
    </aside>
    <!-- end-sidebar-->
    <br class="clear">
  </section>  
    </div>
	
  {**include file="{$DOC_ROOT}/templates/seccion3.tpl"**}
	{include file="{$DOC_ROOT}/templates/footer.tpl"}
			
	{include file="{$DOC_ROOT}/templates/3-default-js.tpl"}
	<script type="text/javascript">
		jQuery(document).ready(function() {    
		   App.init(); // initlayout and core plugins		   
		});
	</script>
    
</body>
</html>