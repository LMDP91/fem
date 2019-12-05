<div class="table-container">
{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}
<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th>RFC </th>
            <th>Nombre </th>
            <th>Apellido Paterno </th>
            <th>Aperllido Materno</th>
            <th>Acci&oacute;n </th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$item2.herederos item=item key=key}          
        <tr>
            <td>{$item.rfc}</td>
            <td>{$item.nombre}</td>
            <td>{$item.paterno}</td>
            <td>{$item.materno}</td>
            <td>
				<div align="center">
             
				{if in_array('edit_usuario',$privilegios)} 
				<a href="javascript:void(0)" onClick="EditReg({$item.usuarioId})" title="Editar">
					<img src="{$WEB_ROOT}/images/icons/edit.png" border="0">
				</a>
				{/if}
				{if in_array('delet_usuario',$privilegios)}
				<a href="javascript:void(0)" onClick="DeleteReg({$item.usuarioId})" title="Eliminar">
					<img src="{$WEB_ROOT}/images/icons/delete.gif" border="0">
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