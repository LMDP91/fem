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
      <p align="right"> <Center><h1>Aprovecha nuestras promociones</h1></center></p>
    </div>
</section>



<section class="container page-content">
<hr class="vertical-space2">
   
				<hr class="vertical-space3">    		   
	  <div class="seven columns omega">	  
		{foreach from=$lstPromoinde item=item key=key} 
		{if $key < 4}
      	<article class="blog-line clearfix">
          	<a href="#" class="img-hover"><img src="{$WEB_ROOT}/images/productos_categorias/{$item.nombre_archivo}.{$item.extension}" alt=""></a>
			<a href="#" style="color:#622181; font-size:22px">{$item.nombre}</a>
			<br>
            <a href="#">{$item.descripcion}</a>

			  <p class="price"><small>$ {$item.precioAnterior}</small><span class="amount">$ {$item.precioActual}</span></p>
			  <div class="product-shop ">
			<!--<a  style="background:#990000" onclick="" class="addtocart">Agregar Al Carrito</a>-->
			<button  href="javascript:void(0)" class="button small" style="background:#990000" onclick="addCar('{$item.productoId}')">Agregar A Carrito </button>
			</div>
        </article>
		{/if}
		{/foreach}
      </div>
<hr class="vertical-space3">

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