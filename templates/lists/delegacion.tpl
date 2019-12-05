<div class="table-container">
{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}
<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th>Nombre </th>
            <th>Estado </th>
            <th>Municipio </th>
			<th>Nombre BD </th>
            <th>DNS / IP </th>
            <th>Clave </th>
            <th>Acci&oacute;n </th>
        </tr>
    </thead>
    <tbody>
    	{foreach from=$registros.result item=item key=key}        	
        <tr>
            <td>{$item.nombre}</td>
            <td>{$item.estado}</td>
            <td>{$item.municipio}</td>
			<td>{$item.base_datos}</td>
            <td>{$item.dns_ip}</td>
            <td>{$item.clave_delegacion}</td>
    
            <td><div align="center">
				<a href="javascript:void(0)" onClick="EditReg({$item.delegacion_id})" title="Editar tramite">
					<img src="{$WEB_ROOT}/images/png-icon/big/glyphicons_150_edit.png" border="0">
				</a>
				<!-- <a href="{$WEB_ROOT}/config_tramite/id/{$item.delegacion_id}" title="Configurar tramite" data-toggle="modal" class="btn">
					<img src="{$WEB_ROOT}/images/png-icon/big/glyphicons_136_cogwheel.png">
				</a>
				 -->
            </div>
            </td>
        </tr>
        {foreachelse}
        <tr>
        	<td colspan="7"><div align="center">Ning&uacute;n registro encontrado.</div></td>
        </tr>
        {/foreach}
    </tbody>
</table>
</div>
{include file="{$DOC_ROOT}/templates/lists/pages.tpl" pages=$registros.pages info=$registros.info}