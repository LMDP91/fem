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
      <h3>{$infoPo.nombre}</h3>
    </div>
  </section>
   <section class="container page-content" >
    <hr class="vertical-space2">
    <section class="eleven columns">
		<div class="shop-wrap">
      <figure class="shop-item one_half">
	   {if $infoPo.promocion eq "si"}
	  <span class="onsale">Oferta!</span>
	   {/if}
         <img src="{$WEB_ROOT}/images/productos_categorias/{$infoPo.nombre_archivo}.{$infoPo.extension}" alt="">		 </figure>
      <!-- end-product-item-->
	  <div class="one_half column-last">
		  <h1>{$infoPo.nombre}</h1>
		  <h2 class="price"><small>{$infoPo.precioAnterior}</small><span class="amount">$ {$infoPo.precioActual}</span></h2>
		  {if $infoPo.promocion eq "si"}
			<font style="color:#797979; font-size: 19px">Ahorra $ {$infoPo.precioActual-$infoPo.precioAnterior}</font>
		 {/if}
		 <br>
		 <br>
		  <p>{$infoPo.descripcion}</p>
		  <hr class="vertical-space">
		  <div class="quantity buttons_added">
		  <input class="minus" type="button" value="-"><input type="text" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text"><input class="plus" type="button" value="+">
		 <!--<a href="#" class="addtocart">Agregar al Carrito</a>-->
		 &nbsp;
		 &nbsp;
		 &nbsp;
		 &nbsp;
		 &nbsp;
		 &nbsp;
		 &nbsp;
		 &nbsp;
		 <button  href="javascript:void(0)" class="button small" style="background:#990000" onclick="addCar('{$q}')">Agregar A Carrito</button>
		  </div>
		  <!--<div class="quantity buttons_added">
		  <input class="minus" type="button" value="-"></input><input type="text" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text"><input class="plus" type="button" value="+"></input>
		<!--  <a href="#" class="addtocart">Add to Cart</a>
		  </div>-->
	  </div> 
	  	  
<hr class="vertical-space1">

      <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#Description" data-toggle="tab">Caracteristicas</a></li>
        <!--<li><a href="#Reviews" data-toggle="tab">Solicitar Información</a></li>-->
      </ul>
	  
	  <div id="myTabContent" class="tab-content">
        <div class="tab-pane active" id="Description">
          <hr class="vertical-space1">
          <p>descripcion</p>
        </div>
        <div class="tab-pane" id="Reviews">
          <hr class="vertical-space1">
		   <h5><strong>Informacion</strong></h5>
			<p>Por favor envianos un mensaje y uno de nuestros asesores se pondra en contacto contigo</p>
			<!--<h5><strong>Be the first to review “Product”</strong></h5>-->
			<label>Nombre</label> 
			<input name="" type="text">
			<label>Correo</label> 
			<input name="" type="text">
			<label>Mensaje</label> 
			<textarea name="" cols="" rows=""></textarea>
			<br>
			<input name="" type="submit" class="small" value="Enviar">
        </div>       
        
      </div>
	  
	  <hr class="vertical-space2">
	  
	  
      <!-- end-product-item-->
	  </div>

	</section>
    <!-- end-main-content -->
	
    <aside class="four columns offset-by-one sidebar">
      <div class="side-cart">
		  <div id="divCar">

			{include file="{$DOC_ROOT}/templates/carrito.tpl"}
		  </div>
      </div>
	  <br class="clear">
     <!-- <h4 class="subtitle">Promociones</h4>-->
      <div class="side-list">

      </div>
      <!-- end-product-list -->
      <br class="clear">
      <!--
	  <h4 class="subtitle">Text Widget</h4>
      <p>Morlem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor<a href="#"> exercitation</a> ut labore et dolore magna aliqua. Ut enim ad</p>
-->
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