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
      <p align="right"> <Center><h1>Estado de mi pedido</h1></center></p>
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
        <span class="acc-trigger active"><a href="#"><strong>En donde esta mi pedido</strong></a></span>
        <div class="acc-container">
          <article class="content">
            <p>Recuerda que en la sección <a>"Mis pedidos"</a> siempre podrás encontrar la fecha de entrega estimada para tu producto, para dar seguimiento a tu pedido y conocer su estatus.
			</p>
          </article>
        </div>
        <!-- Question #2 -->
        <span class="acc-trigger"><a href="#"><strong>Rastrear Envío</strong></a></span>
        <div class="acc-container">
          <article class="content">
            <p>Recuerda que, en un pedido, puede haber productos que corresponden a diferentes proveedores.</p>
            <p>En ese caso por favor, dentro de la sección del pedido selecciona consultar, y presiona "rastrear pedido".
			</p>
		  </article>
        </div>
        <!-- Question #3 -->
        <span class="acc-trigger"><a href="#"><strong>De interes </strong></a></span>
        <div class="acc-container">
          <article class="content">
            <p>Por favor, toma en cuenta que si tu pedido está “En camino” no significa que llegará a la dirección de entrega ese mismo día. Recuerda que puedes conocer la fecha de entrega estimada en tu correo de confirmación y en mis pedidos.</p>
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
			  <img src="images/tips/job-seacrhing.jpg" alt="" />
			</div>
		<a href="{$WEB_ROOT}/account"  class="readmore">Ver Estatus</a> </div>	
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
</html>