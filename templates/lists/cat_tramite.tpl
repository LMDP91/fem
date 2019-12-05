<div class="table-container">
{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}
<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th>Nombre </th>
            <th>Descripcion </th>
			<th>Clave </th>
			<th>Estado </th>
            <th>Acci&oacute;n </th>
        </tr>
    </thead>
    <tbody>
    	{foreach from=$registros.result item=item key=key}        	
        <tr>
            <td>{$item.nombre_corto}</td>
            <td>{$item.descripcion}</td>
            <td>{$item.clave_tramite}</td>
			<td>{$item.status}</td>
    
            <td><div align="center">
                {if in_array('edit_tramite',$privilegios) or $Usr.role_id eq "1"}
				<a href="javascript:void(0)" onClick="EditReg({$item.catalogo_tramite_id})" title="Editar tramite">
					<img src="{$WEB_ROOT}/images/png-icon/big/glyphicons_150_edit.png" border="0">
				</a>
                {/if}
                {if in_array('config_tramite',$privilegios) or $Usr.role_id eq "1"}
				<a href="{$WEB_ROOT}/config_tramite/id/{$item.catalogo_tramite_id}" title="Configurar tramite" data-toggle="modal" class="btn">
					<img src="{$WEB_ROOT}/images/png-icon/big/glyphicons_136_cogwheel.png">
				</a>
                {/if}
                
				
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
<!-- {include file="{$DOC_ROOT}/templates/lists/pages.tpl" pages=$registros.pages info=$registros.info} -->