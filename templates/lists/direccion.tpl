<form id="frm_1">
	<table>
		<tr>
			<td><font color="black">Calle:</font><input type="text" name="calle" id="calle" value="{$infoVta.calle}"></td>
			<td><font color="black">Numero Interior:</font><input type="text" name="numInterior" id="numInterior" value="{$infoVta.numeroInterior}"></td>
			<td><font color="black">Numero Exterior:</font><input type="text" name="numExterior" id="numExterior" value="{$infoVta.numeroExterior}"></td>
		</tr>
		<tr>
			<td><font color="black">Entre Calle 1:</font><input type="text" name="entre1" id="entre1" value="{$infoVta.entreCalle1}"></td>
			<td><font color="black">Entre Calle 2:</font><input type="text" name="entre2" id="entre2" value="{$infoVta.entreCalle2}"></td>
			<td><font color="black">Referencias de tu domicilio:</font><input type="text" name="referencia" id="referencia" value="{$infoVta.referencias}"></td>
		</tr>
		<tr>
			<td><font color="black">Codigo Postal:</font><input type="text" name="cp" id="cp" value="{$infoVta.cp}"></td>
			<td><font color="black">Colonia:</font><input type="text" name="colonia" id="colonia" value="{$infoVta.colonia}"></td>
			<td><font color="black">Delegación o Municipio:</font>
			<select name="municipio" id="municipio">
				<option></option>
				<font color="black">{foreach from=$lstM item=item key=key}</font>
					
					<option value="{$item.municipioId}" {if $infoVta.municipio eq $item.municipioId} selected {/if}><font color="black">{$item.nombre}</font></option>
				{/foreach}
			</select>
			<!--<input type="text" name="municipio" id="municipio" value="{$infoVta.municipio}">
			--></td>
		</tr>
		<tr>
			
			<td>Coordenada X<input type="text" name="coordenadax" id="coordenadax"></td>
			<td>Coordenada Y<input type="text" name="coordenaday" id="coordenaday"></td>
			<td><br><br></td>
		</tr>
	</table>
	
</form>

