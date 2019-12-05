<div class="table-container">
{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}
<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre </th>
            <th>Informacion</th>
            <th>Tramite En Linea</th>
        </tr>
    </thead>
    <tbody>
    	{foreach from=$ltsTramites item=item key=key}        	
        <tr>
            <td>{$key+1}</td>
            <td>{$item.nombre_corto}</td>
            <td style="text-align:center"><button href="javascript:void(0)" onClick="ViewTramite('{$item.id}')" class="bb"> Ver</button></td>
			<td><div align="center">
				<!--onclick="window.location.href='{$WEB_ROOT}/new/id/{$item.id}'--> 
				<button  onClick="addTramite('{$item.id}')" class="bb" style="width:150px"> Iniciar Tramite</button>
				
				<!--
				<a href="{$WEB_ROOT}/new/id/{$item.id}"  title="INICIAR TRAMITE"  style="background:rgb(3, 141, 208); color:white" class="bb">
					Iniciar Tramite
				</a>-->
				<!-- <a href="javascript:void(0)" onClick="EditReg({$item.requisito_id})" title="Configurar tramite">
					<img src="{$WEB_ROOT}/images/png-icon/big/glyphicons_136_cogwheel.png">
				</a> -->
				
            </div>
            </td>
        </tr>

        {/foreach}
    </tbody>
</table>
</div>
<!--
{include file="{$DOC_ROOT}/templates/lists/pages.tpl" pages=$registros.pages info=$registros.info}-->