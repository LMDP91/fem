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
      <h3>{$InfoCategoria.infoP.nombre}</h3>
    </div>
</section>


<section class="container page-content" >
	
	<!--
	<table>
		<tr>
			<td>
				Producto:<input type="text" name="" id="">
			</td>
			<td>

				Order Por:
				<select name="order" id="order">
					<option>Nombre</option>
					<option>Precio</option>
				</select>
			</td>
		</tr>
	</table>-->
	
	
    <hr class="vertical-space2">
    <section class="eleven columns">
	<div class="shop-wrap">
	<p class="result-count">
	{$InfoCategoria.info}</p>
	<br class="clr">
	<div class="shop-wrap">
	{foreach from=$InfoCategoria.result item=item key=key}

		  <figure class="shop-item one_third">
			{if $item.promocion eq "si"}
				<span class="onsale">Oferta!</span>
			{/if}
				
			 <a href="#"><img src="{$WEB_ROOT}/images/productos_categorias/{$item.nombre_archivo}{$item.extension}" alt=""></a>
			<figcaption>
				<h4><a href="{$WEB_ROOT}/dt/q/{$item.productoId}" style="color:#622181">{$item.nombre}</a> </h4>
				  <p class="price">
					{if $item.promocion eq "si"}
					<small>$ {$item.precioAnterior}</small>
					{/if}
					<span class="amount">$ {$item.precioActual}</span>
				</p>
			</figcaption>
			<div class="product-shop "><a href="javascript:void(0)" onclick="addCar('{$item.productoId}')" class="addtocart">Agregar Al Carrito</a></div>
		  </figure>
		  
		  <div style="width:50px; overflow:hidden; float:left; !important">
		  &nbsp;
		  &nbsp;
		  </div>
		 
		{if $key % 3  eq 0}
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>




		{/if}

	{/foreach}
	</div>
	
		<hr class="vertical-space1">
      <div class="pagination2">
        <ul>
          <li class="disabled"><a href="#">&laquo;</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
      </div>
	  <hr class="vertical-space2">
	</section>
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