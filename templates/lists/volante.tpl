{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}
<table class="table table-bordered" id="custom_table">
    <thead>
        <tr>
            <th></th>
            <th>Folio </th>
            <th>Nombre o Razon social </th>
			<th>Calificador</th>
			<th>Etapa </th>
            <th>Pagado </th>
        </tr>
    </thead>
    <tbody>
    	{foreach from=$registros.result item=item key=key}        	
      
        <tr data-id={$item.volanteId}>
            <td><input type="radio" value="{$item.volanteId}" name="accion" id="accion" onclick="ShowDetail(this)"></td>
            <td>{$item.folio}</td>
            <td>{$item.nombreTitular} {$item.apellidosTitular}</td>
            <td>{$item.nombreCalificador} {$item.apellidosCalificador}</td>
            <td>{$item.etapa}</td>
			<td>{$item.pagado}</td>
    
            <td><div align="center">
                {if in_array('procesarVolante',$privilegios) or $usr.role_id==1}
				<a href="javascript:void(0)" onClick="LoadVolante({$item.volanteId})" title="Ir a volante">
					<img src="{$WEB_ROOT}/images/icons/arrow-right.png" border="0">
				</a>
                {/if}
                <!-- {if in_array('verDetalles',$privilegios) or $usr.role_id==1}
				<a href="javascript:void(0)" onClick="VerDetalles('{$item.catalogo_tramite_id|md5}')"title="Detalles volante">
					<img src="{$WEB_ROOT}/images/icons/ver-detalle.png" border="0">
				</a>
                {/if} -->
				
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
{include file="{$DOC_ROOT}/templates/lists/pages.tpl" pages=$registros.pages info=$registros.info}