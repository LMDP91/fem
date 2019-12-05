{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}
{if $msjConfirma eq "si"}
	<div class="alert alert-success">
    <button class="close" data-dismiss="alert"></button>
    	<strong>!Exito!</strong> El documento se guardo corretamente
</div>
{/if} 


<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center">Clave</div></th>
            <th width="200"><div align="center">Documento</div></th>
            <th width="200"><div align="center">Descripcion</div></th>
            <th width="200"><div align="center">Publico</div></th>
            <th class="hidden-480" width="100"><div align="center">Acci&oacute;n</div></th>
        </tr>
    </thead>
    <tbody>
    	{foreach from=$registros.result item=item key=key}        	
        <tr class="odd gradeX">
            <td>{$item.documentoId}</td>
            <td>{$item.documento}</td>
            <td>{$item.descripcion}</td>
            <td>{$item.abiertoCiudadano}</td>
    
            <td><div align="center">

           
			<a href="javascript:void(0)" onClick="solicitar({$item.documentoId})" title="SOLICITAR DOCUMENTO">
            	<img src="{$WEB_ROOT}/images/fill-090.png" border="0">
            </a>
            </div>
            </td>
        </tr>
        {foreachelse}
        <tr class="odd gradeX">
        	<td colspan="7"><div align="center">Ning&uacute;n registro encontrado.</div></td>
        </tr>
        {/foreach}
    </tbody>
</table>

{include file="{$DOC_ROOT}/templates/lists/pages.tpl" pages=$registros.pages info=$registros.info}