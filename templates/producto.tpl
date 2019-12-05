<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> 
<html lang="en" class="no-js"> <!--<![endif]-->
<head><!--
	{include file="{$DOC_ROOT}/templates/1-default-meta.tpl"}
	{include file="{$DOC_ROOT}/templates/2-default-css.tpl"}-->
	{include file="{$DOC_ROOT}/templates/header.tpl"}
	
<style type="text/css"> 



</style>
</head>

<body class="" >
	<div id="wrap" class="colorskin-0">
				{include file="{$DOC_ROOT}/templates/menus/main.tpl"}
				
<section id="headline">
    <div class="container">
	   <h3><font color="BLACK">{$InfoCategoria.infoP.nombre}</font></h3>	
    </div>
</section>
		<section class="container page-content" >
	

	<form id="fltProducto" onsubmit="return false">
	<input type="hidden" name="type" id="type" value="">
	<input type="hidden" name="q" id="q" value="{$q}">

	<table>
		<tr>
			<td>
				<font style="font-weight: bold;">Nombre del Producto:</font><input type="text" name="producto" id="producto">
			</td>
			<td>
				<font style="font-weight: bold;">Sustancia Activa:</font><input type="text" name="sustancia" id="sustancia">
			</td>
			<td>

				<font style="font-weight: bold;">Ordenar Por::</font>
				<select name="order" id="order">
					<option>Nombre</option>
					<option>Precio</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<div id="loader"></div>
				<button class="button small" onclick="buscar()">Buscar</button> 
			</td>
		</tr>
	</table>
	</form>
	
    <hr class="vertical-space2">
    <div id="divResultado">
		{include file="{$DOC_ROOT}/templates/lst-producto.tpl"}
	</div>
    <!-- end-main-content -->
    <aside class="four columns offset-by-one sidebar">
		<div id="divCar">
			{include file="{$DOC_ROOT}/templates/carrito.tpl"}
		</div>
	  <br class="clear">
    <!--  <h4 class="subtitle">Promociones</h4>
      <div class="side-list">
        <ul>
          <li>
		  <a href="#"><img src="images/shopimg/mex-prod03.jpg" alt=""></a>
		  <h5><a href="#">Product Name</a></h5>
		  <p class="price"><span class="amount">$ 58</span></p>
		  </li>
          <li>
		  <a href="#"><img src="images/shopimg/mex-prod05.jpg" alt=""></a>
		  <h5><a href="#">Product Name</a></h5>
		  <p class="price"><span class="amount">$ 58</span></p>
		  </li>
          <li><a href="#"><img src="images/shopimg/mex-prod09.jpg" alt=""></a>
		  <h5><a href="#">Product Name</a></h5>
		  <p class="price"><span class="amount">$ 58</span></p>
		  </li>
          <li><a href="#"><img src="images/shopimg/mex-prod07.jpg" alt=""></a>
		  <h5><a href="#">Product Name</a></h5>
		  <p class="price"><span class="amount">$ 58</span></p>
		  </li>
        </ul>
      </div>-->
      <!-- end-product-list -->
      <br class="clear">
      <!--<h4 class="subtitle">Text Widget</h4>
      <p>Morlem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor<a href="#"> exercitation</a> ut labore et dolore magna aliqua. Ut enim ad</p>-->
      <br class="clear">
      <!--<h4 class="subtitle">Nuevos Productos</h4>
      <div class="side-list">
        <ul>
          <li>
		  <a href="#"><img src="images/shopimg/mex-prod03.jpg" alt=""></a>
		  <h5><a href="#">Product Name</a></h5>
		  <p class="price"><span class="amount">$ 58</span></p>
		  </li>
          <li>
		  <a href="#"><img src="images/shopimg/mex-prod05.jpg" alt=""></a>
		  <h5><a href="#">Product Name</a></h5>
		  <p class="price"><span class="amount">$ 58</span></p>
		  </li>
          <li><a href="#"><img src="images/shopimg/mex-prod09.jpg" alt=""></a>
		  <h5><a href="#">Product Name</a></h5>
		  <p class="price"><span class="amount">$ 58</span></p>
		  </li>
          <li><a href="#"><img src="images/shopimg/mex-prod07.jpg" alt=""></a>
		  <h5><a href="#">Product Name</a></h5>
		  <p class="price"><span class="amount">$ 58</span></p>
		  </li>
        </ul>
      </div>-->
      <!-- end-product-list -->
      <br class="clear">
      <!--<h4 class="subtitle">Tags</h4>
      <div class="tagcloud"> <a href="#">Design</a> <a href="#">vestibulum</a> <a href="#">Web</a> <a href="#">hosting</a> <a href="#">domain</a> <a href="#">HTML</a> <a href="#">vestibulum</a> <a href="#">Web</a> <a href="#">hosting</a> <a href="#">domain</a> <a href="#">CSS</a> <a href="#">vestibulum</a> <a href="#">Web</a> <a href="#">hosting</a> <a href="#">domain</a> <a href="#">Link</a> <a href="#">vestibulum</a> <a href="#">Web</a> <a href="#">hosting</a> <a href="#">domain</a> </div>
  -->  </aside>
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