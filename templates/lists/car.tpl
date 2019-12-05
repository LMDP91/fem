{**include file="{$DOC_ROOT}/templates/boxes/messages.tpl"**}
<form id="frmGral" onsubmit="return false;">
<input type="hidden" name="type" id="type" value="updateCar">

<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center"><font color="white">Imagen</font></div></th>
            <th width="200"><div align="center"><font color="white">Producto</font></div></th>
            <th class="hidden-480" width="150"><div align="center"><font color="white">Precio</font></div></th>
            <th class="hidden-480" width="200"><div align="center"><font color="white">Cantidad</font></div></th>
            <th class="hidden-480"><div align="center"><font color="white">Total</font></div></th>
            <th class="hidden-480" width="100"><div align="center"></div></th>
        </tr>
    </thead>
	
    <tbody>

    	{foreach from=$lstCar.carrito item=item key=key}        	
        <tr class="odd gradeX">
			<td>
				<img src="{$WEB_ROOT}/images/productos_categorias/{$item.nombre_archivo}.{$item.extension}" alt="">
			</td>
            <td>
				<font color="black">{$item.nombre}<br><font>
				{$item.descripcion}
			</td>
			<td><div align="center"><font color="black">${$item.precioActual|number_format:2:'.':','}</font></div></td>
            <td><div align="center"><input type="number" name="cantidad_{$key}" id="cantidad_{$key}" value="{$item.cantidad}" style="width:50px"></div></td>
            <td><div align="center">${$item.total|number_format:2:'.':','}</div></td>
            <td><div align="center">
				<a class="btn btn-xs red" button type="button" class="close" data-dismiss="alert" onClick="deleteCar('{$item.key}')">&times;</button>
					<i class="fa fa-trash-o"></i>
				</a>
				</div>
            </td>
			
			 
        </tr>
		
        {foreachelse}
        <tr class="odd gradeX">
        	<td colspan="6"><div align="center">Ning&uacute;n registro encontrado.</div></td>
        </tr>
        {/foreach}
		<tr>
			<td colspan="6" style="text-align: right !important">

			<a href="javascript:void(0)" style="background:white; color:#990000; border: 2px solid #990000; padding: 5px 15px" onClick="updateCar()">
			Actualizar Carrito
			</a>
			</td>
		</tr>
		
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td><b><font color="black">Subtotal:</font></b></td>
			<td><font color="black">${$lstCar.total|number_format:2:'.':','}</font></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td><b><font color="black">Total:</font></b></td>
			<td><font color="black">${$lstCar.total|number_format:2:'.':','}</font></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="6" style="text-align: right !important">
			<button class="button small" style="background:#990000" onclick=" location.href='{$WEB_ROOT}/checkout' ">Realizar Pedido</button>
			</td>
		</tr>
    </tbody>
</table>

</form>
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
	<form id="frmLogin">
	<input type="hidden" name="type" id="type" value="doLogin">
	<table>
		<tr>
			<td>
				Dirección de Correo Electrónico
				<input type="text" name="username" id="username" >
			</td>
			
		</tr>
		<tr>
			<td>
				Contraseña
				<input type="password" name="password" id="password" >
			</td>

		</tr>

	</table>	
	
	
	</form>
	
	<div id="loader"></div>
	<div id="txtErrMsg" style="color:red"></div>
	<button class="button small" style="background:#008080" onclick="DoLogin()">Iniciar Sesión</button> 
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

{include file="{$DOC_ROOT}/templates/lists/pages.tpl" pages=$registros.pages info=$registros.info}