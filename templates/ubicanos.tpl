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

<body  onload="initialize()">
	<div id="wrap" class="colorskin-0">
			{include file="{$DOC_ROOT}/templates/menus/main.tpl"}	
			{**include file="{$DOC_ROOT}/templates/slider.tpl"}
			{include file="{$DOC_ROOT}/templates/seccion1.tpl"}
			{include file="{$DOC_ROOT}/templates/seccion2.tpl"}
			{include file="{$DOC_ROOT}/templates/seccion3.tpl"}
			{include file="{$DOC_ROOT}/templates/footer.tpl"**}
			
			<section id="headline">
	
				<div class="container">
				<!-- end-hero-->
					<h3><font color="#622181">UBICA TU SUCURSAL</font></h3>	
				</div>
				
			</section>
			
			<section class="full-width">
			<div id="contact-map">
			 <div id="map_canvas" style="width:1500px; height:500px"></div>
			 <!-- END-Google Map -->
			</div><!-- END-contact Map -->     
			</section><!-- END-Google Map Section -->
							
	</div>
	{include file="{$DOC_ROOT}/templates/3-default-js.tpl"}
	<script type="text/javascript">
		jQuery(document).ready(function() {    
		   App.init(); // initlayout and core plugins		   
		});
	</script>

    
</body>
</html>