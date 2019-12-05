<font color="black"><h3>Instrucciones:</h3></font>

<font color="black">1. Selecciona el RFC dentro de la lista de rfc´s.<br></font>
<font color="black">2. Si eres nuevo usuario selecciona nueva rfc y complementa el formulario.<br></font>
<font color="black">3. Presiona Guardar y Continuar.<br></font>
<br>
<br>
<br>
<font color="black"><b>Lista de RFC</b></font>
<select name="rfcId" id="rfcId" onChange="addRFC()">
	<option value="">Nuevo RFC</option>
	{foreach from=$lstRFC item=item key=key}   
	<option value="{$item.rfcCId}" {if $infoVta.rfcCId eq $item.rfcCId} selected {/if}>{$item.rfc}</option>
	{/foreach}
	
</select>
<div id="divRfc">
	{include file="{$DOC_ROOT}/templates/lists/rfc.tpl"}
</div>

<div class="txtErrMsg" style="color:red"></div>
<div class="loader" ></div>
<button class="button small" style="background:#990000" onclick="Next(2)">Guardar y Continuar</button>


