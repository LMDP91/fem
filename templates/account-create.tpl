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
    <div class="container"><div class="container"><div class="one_third column-last"><img src="images/nosotros/usuarios1.png" alt=""></div>
      <h3>Ingresa tus Datos</h3>
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
	<form id="frmGral">
	<table>
		<tr>
			<td>
				Nombre
				<input type="text" name="nombre" id="nombre" onblur="valida('contrasena',2)">
			</td>
			<td>
				Apellido Paterno
				<input type="text" name="apellidop" id="apellidop" onblur="valida('contrasena',2)">
			</td>
			<td>
				Apellido Materno
				<input type="text" name="apellidom" id="apellidom" onblur="valida('contrasena',2)">
			</td>			
		</tr>
		<tr>
			<td>
				Sexo
				<select name="sexo" onblur="valida('contrasena',2)">
					<option></option>
					<option>femenino</option>
					<option>masculino</option>
				</select>
			</td>
			
			<td>
				Correo Electrónico
				<input type="text" name="email" id="email" onblur="valida('contrasena',2)">
				
			</td>
			<td>
				Fecha de Nacimiento
				<input type="date" name="fnacimiento" id="fnacimiento" onblur="valida('contrasena',2)" onClick="fnFechaNa()">
			</td>
			
		</tr>
		<tr>
			<td>
				Contraseña
				<input type="password" name="pass" id="pass" onblur="valida('contrasena',2)">
			</td>
			<td>
				Confirma Contraseña
				<input type="password" name="pass2" id="pass2" onblur="valida('contrasena',2)">
			</td>
		</tr>
	</table>
	
	</form>
	
	<div id="loader"></div>
	<div id="txtErrMsg" style="color:red"></div>
	<button class="button small" style="background:#008080" onclick="SaveCuenta()">Crear Cuenta</button> 
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