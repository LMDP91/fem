<div class="table-container">
{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}
<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th>Tipo</th>
            <th>Descripcion</th>
            <th>Acci&oacute;n </th>
        </tr>
    </thead>
    <tbody>
    	{foreach from=$registros.result item=item key=key}        	
        <tr>
            <td>{$item.Title}</td>
             <td>{$item.Description}</td>     
            <td>
                <div align="center">
                    <a class="btn btn-xs orange" href="javascript:void(0)" onClick="EditReg({$item.ID})" title="Editar rol">
                        <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-xs orange" href="{$WEB_ROOT}/config_role/id/{$item.ID}" title="Configurar rol">
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                    </a>
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