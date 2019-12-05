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
      <h3>Bienvenido</h3>
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
	
	<br>
	<br>
	<div id="divRegistro">
			<form  id="frmGral"  class="form-ajax form-stripped" >
				<input type="hidden" name="key" value="{$usuarioId}">
				<input type="hidden" name="type" id="type" value="ActivaCuenta">
		
				
				
				
				<br>
				<br>
				<br>
				<font color="#622181" size=4>
				Por Favor Presiona el Boton "Activar Cuenta", para Ingresar al Sistema.
				</font>
			</form>
			<br>
			<br>
			<br>
			<br>
			
			
			
			<div id="txtErrMsg" class="alert alert-danger alert-dismissable" style="display:none; font-weight: 900">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <strong></strong>
			</div>
			<div id="loader"></div>
			<button type="submit" style="width:300px; height:80px; font-size:25px" class="btn btn-primary pull-right" onClick="ActivaCuenta()" id="btnEnviar">Activar Cuenta</button>	
	</div>
	
	
	
	</div>
		<hr class="vertical-space1">
      <div class="pagination2">
       <!-- 2 -->
      </div>
	  <hr class="vertical-space2">
	</section>
    <!-- end-main-content -->
    <aside class="four columns offset-by-one sidebar">
		<div id="divCar">
			<!--3-->
		</div>
	  <br class="clear">
      <br class="clear">
      <br class="clear">
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