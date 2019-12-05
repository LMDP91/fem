<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> 
<html lang="en" class="no-js"> <!--<![endif]-->
<head><!--
	{include file="{$DOC_ROOT}/templates/1-default-meta.tpl"}
	{include file="{$DOC_ROOT}/templates/2-default-css.tpl"}-->
	{include file="{$DOC_ROOT}/templates/header.tpl"}
</head>

<body class="" >
	<div id="wrap" class="colorskin-0">
		
			{include file="{$DOC_ROOT}/templates/menus/main.tpl"}		
			
			
			
			<section class="container page-content" >
   <div class="sixteen columns">
   <hr class="vertical-space2">
   <h2 class="aligncenter">Sucursal {$Infosucursal.nombre}</h2>
<hr class="vertical-space1">

<img src="{$WEB_ROOT}/webmaster/images/sucursales/{$Infosucursal.rutaFoto}?{$time}">

   <h4 class="subtitle"></h4>
   <hr class="vertical-space1">
<div class="one_half">
<article class="icon-box icon-colorx">
<i class="li_pen"></i>
<h4><strong>Dirección</strong></h4>
<p>{$Infosucursal.direccion}</p>
</article>
</div>
<div class="one_half column-last">
<article class="icon-box icon-colorx">
<i class="fa-search"></i>
<h4><strong>Horario</strong></h4>
<p>{$Infosucursal.horario}</p>
</article>
</div>

<div class="one_half">
<article class="icon-box icon-colorx">
<i class="fa-cube"></i>
<h4><strong>Contacto</strong></h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Aenean nisl orci aliqua.adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore in tandem with innovative technology magna..</p>
</article>
</div>
<div class="one_half column-last">
<article class="icon-box icon-colorx">
<i class="fa-mobile"></i>
<h4><strong></strong></h4>
<p></p>
</article>
</div>
<hr class="vertical-space2">
   
	
	
	
	
</div>
  </section><!-- container -->
			
			
			
			{**include file="{$DOC_ROOT}/templates/seccion1.tpl"**}
			{**include file="{$DOC_ROOT}/templates/seccion2.tpl"**}
			{**include file="{$DOC_ROOT}/templates/seccion3.tpl"**}
			{include file="{$DOC_ROOT}/templates/footer.tpl"}
			
	</div>
	{include file="{$DOC_ROOT}/templates/3-default-js.tpl"}
	<script type="text/javascript">
		jQuery(document).ready(function() {    
		   App.init(); // initlayout and core plugins		   
		});
	</script>
    
</body>
</html>