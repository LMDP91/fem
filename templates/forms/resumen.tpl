{**include file="{$DOC_ROOT}/templates/boxes/messages.tpl"**}
<h3>Productos</h3>
<form id="frmGralPedido" onsubmit="return false;">
<input type="hidden" name="type" id="type" value="enviarPedido">
<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center"><font color="white">Imagen</font></div></th>
            <th width="200"><div align="center"><font color="white">Producto</font></div></th>
            <th class="hidden-480" width="150"><div align="center"><font color="white">Precio</font></div></th>
            <th class="hidden-480" width="200"><div align="center"><font color="white">Cantidad</font></div></th>
            <th class="hidden-480"><div align="center"><font color="white">Total</font></div></th><!--
            <th class="hidden-480" width="100"><div align="center"></div></th>-->
        </tr>
    </thead>
    <tbody>

    	{foreach from=$lstCar.carrito item=item key=key}        	
        <tr class="odd gradeX">
		    <td>
				<img src="{$WEB_ROOT}/images/productos_categorias/{$item.nombre_archivo}.{$item.extension}" alt="">
			</td>			
            <td>
				<font color="black">{$item.nombre}</font><br>
				{$item.descripcion}
			</td>
			<td><div align="center"><font color="black">${$item.precioActual|number_format:2:'.':','}</font></div></td>
            <td><div align="center"><!--<input type="" name="cantidad_{$key}" id="cantidad_{$key}" value="{$item.cantidad}" style="width:50px">-->{$item.cantidad}</div></td>
            <td><div align="center"><font color="black">${$item.total|number_format:2:'.':','}</font></div></td>
            <!--<td><div align="center">
				<a href="javascript:void(0)" onClick="deleteCar('{$item.key}')" title="Eliminar">
					<img src="{$WEB_ROOT}/images/delete.png" border="0">
				</a>
				</div>
            </td>-->
        </tr>
		
        {foreachelse}
        <tr class="odd gradeX">
        	<td colspan="6"><div align="center">Ning&uacute;n registro encontrado.</div></td>
        </tr>
        {/foreach}

		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td><b><font color="black">Subtotal:</font></b></td>
			<td><font color="black">${$lstCar.total|number_format:2:'.':','}</font></td>
			
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td><b><font color="black">Total:</font></b></td>
			<td><font color="black">${$lstCar.total|number_format:2:'.':','}</font></td>
			
		</tr>

    </tbody>
</table>
<h3>Dirección de Envio</h3>

<table>
		<tr>
			<td><font color="black">Calle:</font><input type="text" name="calle" id="calle" disabled value="{$infoVta.calle}"></td>
			<td><font color="black">Numero Interior:</font><input type="text" name="numInterior"  disabled id="numInterior" value="{$infoVta.numeroInterior}"></td>
			<td><font color="black">Numero Exterior:</font><input type="text" name="numExterior" disabled id="numExterior" value="{$infoVta.numeroExterior}"></td>
		</tr>
		<tr>
			<td><font color="black">Entre Calle 1:</font><input type="text" name="entre1" disabled id="entre1" value="{$infoVta.entreCalle1}"></td>
			<td><font color="black">Entre Calle 2:</font><input type="text" name="entre2"  disabled id="entre2" value="{$infoVta.entreCalle2}"></td>
			<td><font color="black">Referencias de tu domicilio:</font><input type="text"  disabled name="referencia" id="referencia" value="{$infoVta.referencias}"></td>
		</tr>
		<tr>
			<td><font color="black">Codigo Postal:</font><input type="text" name="cp"  disabled id="cp" value="{$infoVta.cp}"></td>
			<td><font color="black">Colonia:</font><input type="text" name="colonia" disabled id="colonia" value="{$infoVta.colonia}"></td>
			<td><font color="black">Delegación o Municipio:</font>
				<select name="municipio" id="municipio">
				<option></option>
				{foreach from=$lstM item=item key=key}
					
					<option value="{$item.municipioId}" {if $infoVta.municipio eq $item.municipioId} selected {/if}><font color="black">{$item.nombre}</font></option>
				{/foreach}
			</select>
			</td>
		</tr>
		<!--<tr>
			
			<td>Delegación o Municipio:<input type="text" disabled name="municipio" id="municipio" value="{$infoVta.municipio}"></td>
			<td></td>
			<td></td>
		</tr>-->
	</table>

<h3>Información de Facturación</h3>
<table>
		<tr>
			<td>Razón Social:<input type="text" name="nombreFac" id="nombreFac" value="{$infoVta.rs}"></td>
			<td>RFC:<input type="text" name="rfcFac" id="rfcFac" value="{$infoVta.rfc}"></td>
			<td>Calle:<input type="text" name="calleFac" id="calleFac" value="{$infoVta.cf}"></td>
		</tr>
		<tr>
			<td>Num Interior:<input type="text" name="numInteriorFac" id="numInteriorFac"  value="{$infoVta.ni}"></td>
			<td>Num Exterior:<input type="text" name="numExteriorFac" id="numExteriorFac" value="{$infoVta.ne}"></td>
			<td>Colonia:<input type="text" name="coloniaFac" id="coloniaFac"  value="{$infoVta.cf}"></td>
		</tr>
		<tr>
			<td>Codigo Postal:<input type="text" name="cpFac" id="cpFac" value="{$infoVta.cpf}"></td>
			<td>Estado:<input type="text" name="estadoIdFac" id="estadoIdFac" value="{$infoVta.ef}"></td>
			<td>Delegación o Municipio:<input type="text" name="municipioFac" id="municipioFac" value="{$infoVta.mf}"></td>
		</tr>
		<tr>
			
			
			<td>Telefono:<input type="text" name="telefonoFac" id="telefonoFac" value="{$infoVta.tf}"></td>
			<td>Correo Electronico:<input type="text" name="correoFac" id="correoFac" value="{$infoVta.cf}"></td>
			<td></td>
		</tr>
	</table>




</form>

{include file="{$DOC_ROOT}/templates/lists/pages.tpl" pages=$registros.pages info=$registros.info}