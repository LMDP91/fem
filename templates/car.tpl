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
<section id="headline">
    <div class="container">
      <h3>Carrito de Compras</h3>
    </div>
</section>


<section class="container page-content" >
	
	
    <hr class="vertical-space2">
    <section class="eleven columns">
	<div class="shop-wrap">
	<p class="result-count">
	{$InfoCategoria.info}</p>
	<br class="clr">
	<div class="shop-wrap">
		<div id="divCar">
		{include file="{$DOC_ROOT}/templates/lists/car.tpl"}
		</div>
	</div>
	
	<hr class="vertical-space1">
      <div class="pagination2">
       
      </div>
	  <hr class="vertical-space2">
	</section>
    <!-- end-main-content -->
    <aside class="four columns offset-by-one sidebar">
		<div id="divCar">
			
		</div>
	  <br class="clear">
  
      <br class="clear">
      <br class="clear">
    
      <!-- end-product-list -->
      <br class="clear">
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