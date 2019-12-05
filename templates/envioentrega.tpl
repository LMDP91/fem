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
      <p align="right"> <Center><h1>Envío y Entrega</h1></center></p>
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
        <span class="acc-trigger active"><a href="#"><strong>Tiempo de entrega</strong></a></span>
        <div class="acc-container">
          <article class="content">
            <p><b>YA REALICÉ MI COMPRA</b>
			</p align="justify">Por favor, revisa la confirmación de envío que enviamos a tu correo electrónico para conocer la fecha estimada de entrega en la que recibirás tu producto. Identifica el pedido deseado, y aparecerá la fecha de entrega estimada.
			<p>
			</p>
          </article>
        </div>
        <!-- Question #2 -->
        <span class="acc-trigger"><a href="#"><strong>Aún no he realizado mi compra</strong></a></span>
        <div class="acc-container">
          <article class="content">
            <p>Puedes conocer el tiempo de entrega agregando el producto a tu carrito de compras. </p>
          </article>
        </div>
        <!-- Question #3 -->
        <span class="acc-trigger"><a href="#"><strong>De interes</strong></a></span>
        <div class="acc-container">
          <article class="content">
            <p>Recuerda que el tiempo de entrega depende de diferentes factores:</p>
            <li>Características del producto (peso, dimensiones).</li>
            <li>Distancia entre el lugar de envío y el lugar de entrega.</li>
            <li>Paquetería que hace el envío.</li>
            <li>Tipo de envío elegido: regular o express*.</li>

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