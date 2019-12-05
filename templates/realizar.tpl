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
<section id="headline">
    <div class="container"><div class="container iniciar">
      <p align="right"> <Center><h1>¿Cómo realizar mi pedido?</h1></center></p>
    </div>
</section>



 <hr class="vertical-space4">
<section class="testimonial">
	<div class="container">
	<div class="eight columns">
			<div class="sub-content">
				<h6 class="h-sub-content">Paso a Paso</h6>
			</div>

        <!-- Question #1 -->
        <span class="acc-trigger active"><a href="#"><strong>Ve a la sesión de productos.</strong></a></span>
        <div class="acc-container">
          <article class="content">
            <p>1.1.	Una vez que estés dentro de la sesión de productos, deberás elegir la categoría del producto que deseas buscar.
			</p>
          </article>
        </div>
        <!-- Question #2 -->
        <span class="acc-trigger"><a href="#"><strong>Selecciona una categoría.</strong></a></span>
        <div class="acc-container">
          <article class="content">
            <p>Dar clic en la categoría que elegiste, para posteriormente puedas agregar al carrito de compras tu producto o servicio.</p>
          </article>
        </div>
        <!-- Question #3 -->
        <span class="acc-trigger"><a href="#"><strong>Finaliza tu selección </strong></a></span>
        <div class="acc-container">
          <article class="content">
            <p> Una vez que ellas realizado tu selección de producto o servicio, podrás hacer las compras que desees</p>
          </article>
        </div>
      <!-- end- accordion -->
	  </div>
		<div class="eight columns">
			<div class="sub-content">
				<h6 class="h-sub-content">Juntos ¡Hagamos más!</h6>
			</div>
<div class="testimonial">
			<div class="testimonial-content">
			  <img src="images/tips/checklist.jpg" alt="" />
			</div>			
      </div>
      <!-- end-Testimonial -->
		</div>
		
        <a href="{$WEB_ROOT}/checkout"  class="readmore">Regresar a la Página anterior</a> </div>
    
	</div>
	
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
</html>>