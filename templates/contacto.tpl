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

	  <h3><font color="#622181">Contacto</font></h3>	
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
	</p>
	<br class="clr">
	<div class="shop-wrap">
		{foreach from=$lstSucursales item=item key=key}       
				 <div class="post-bottom-section">
				  <div class="right">
					<div class="navigation">
					  <div class="alignleft"></div>
					  <div class="alignright"></div>
					</div>
					<ol class="commentlist">
					  <li class="comment even thread-even depth-1" id="comment-2">
						<div class="comment-info"> <img src="{$WEB_ROOT}/images/b1.jpg" alt="" style="width:4%">
						<cite> {$item.nombre}
						  <span class="comment-data"><a href="#comment-2" title=""></a></span> </cite> </div>
						<div class="comment-text">
						  <p>{$item.telefono}</p>
						</div>
					  </li>

					</ol>
				  </div>
				</div>
		{/foreach}
	</div>
	
		<hr class="vertical-space1">
     
	  <hr class="vertical-space2">
	</section>
    <!-- end-main-content -->
    <aside class="four columns offset-by-one sidebar">
		<div id="divCar">

				<img src="{$WEB_ROOT}/images/nosotros.png" width="900" id="img-logo" alt="logo">
		</div>
	  <br class="clear">

      <br class="clear">
    
      <br class="clear">

      <!-- end-product-list -->
      <br class="clear">
      
	  </aside>

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