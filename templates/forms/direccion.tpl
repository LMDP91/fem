<h3><font color="black">Instrucciones:</font></h3>

<font color="black">1. Selecciona la dirección dentro de la lista de direcciones.</font><br>
<font color="black">2. Si eres nuevo usuario selecciona nueva sucursal y complementa el formulario.</font><br>
<font color="black">3. Presiona Guardar y Continuar.</font><br>
<br>
<br>
<br>
<b><font color="black">Lista de Direcciones</font></b>
<select name="direccionId" id="direccionId" onChange="addDireccion()">
	<option value="">Nueva Direccion</option>
	{foreach from=$lstDir item=item key=key}   
	<option value="{$item.direccionCId}" {if $infoVta.direccionCId eq $item.direccionCId} selected {/if} ><font color="black">{$item.calle}</font></option>
	{/foreach}
	
</select>
<div id="divDirec">
	{include file="{$DOC_ROOT}/templates/lists/direccion.tpl"}
</div>

<div class="txtErrMsg" style="color:red"></div>
<div class="loader" ></div>
<button class="button small" style="background:#990000" onclick="Next(1)">Guardar y Continuar</button>