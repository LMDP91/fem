<center>
<form id="frmFiltroTramite">
Filtrar por: <br>
<b>Nombre del Tramite</b>
<input type="text" name="nombreTramite" id="nombreTramite" class="form-control" onkeypress="buscaTramites('{$categoriaId}','read')">
</form>
<button class="btn green" onclick="buscaTramites('{$categoriaId}','read')">Buscar</button>

</center>
<div id="divReload">
	{include file="{$DOC_ROOT}/templates/lists/inicio-nuevo.tpl"}
</div>