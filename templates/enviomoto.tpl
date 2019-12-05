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
      <p align="right"> <Center><h1>Tiempo estimado de entrega terrestre.</h1></center></p>	  
    </div>
	<a href="{$WEB_ROOT}/account"  class="readmore">Regresar a la Página anterior</a> 
</section>
<!-- otro-->
    <section class="container page-content" >
      <hr class="vertical-space2">        
        <hr class="vertical-space1">
        <center><p><span class="highlight1">Hora de salida:</span><span class="highlight2"></span>{$item.fecha}<span class="highlight1">Hora de entrega:</span><span class="highlight2"></span>{$item.fecha}</p></center>
        <div class="pie" data-percent="19"><span>19</span>%<br></div>
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