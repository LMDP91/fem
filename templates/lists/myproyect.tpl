{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}

<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center">Nombre del Proyecto</div></th>
            <th class="hidden-480" width="150"><div align="center">Numero Contrato</div></th>
            <th class="hidden-480" width="200"><div align="center">Vigencia</div></th>
            <th class="hidden-480" width="100"><div align="center">Acci&oacute;n</div></th>
        </tr>
    </thead>
    <tbody>
    	{foreach from=$registros item=item key=key}        	
        <tr class="odd gradeX">
            <td>{$item.nombre}</td>
            <td><div align="center">{$item.id_contrato}</div></td>
            <td><div align="center">{$item.inicioVigencia} - {$item.finVigencia}</div></td>
            <td><div align="center">
            <a href="javascript:void(0)" onClick="ViewReportes({$item.id_contrato})" title="VER REPORTE">
            	<img src="{$WEB_ROOT}/images/icons/view.png" border="0">
            </a>
			<!--
            <a href="javascript:void(0)" onClick="EditReg({$item.idReg})" title="Editar">
            	<img src="{$WEB_ROOT}/images/icons/edit.png" border="0">
            </a>
            <a href="javascript:void(0)" onClick="DeleteReg({$item.idReg})" title="Eliminar">
            	<img src="{$WEB_ROOT}/images/icons/delete.gif" border="0">
            </a>-->
            </div>
            </td>
        </tr>
		<tr id="{$item.id_contrato}" style="display:none">
				<td colspan="4">
					<div id="">
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