{include file="{$DOC_ROOT}/templates/boxes/messages.tpl"}

&nbsp; 
&nbsp; 
<table class="table table-striped table-bordered table-hover" id="sample_3">
   
    	{foreach from=$lstToday item=item key=key}        	
        <tr class="odd gradeX">
            <td>
				<h4>{$item.horario}</h4>
				{foreach from=$item.agenda item=item2 key=key}
					
					{if $item2.tipoagenda eq "comercial"}
						(C)
					{else}
						(D)
					{/if}
				
				{if $item2.estatusTarea eq "abierta"}
					<a href="javascript:void(0)" onClick="verAgenda({$item2.agendaId})" >
					{if $item2.prioridad eq "alta"}
						<span class="label label-important">{$item2.agendaId} - {$item2.cliente}</span>
					{else if $item2.prioridad eq "media"}
						<span class="badge badge-warning">{$item2.agendaId} - {$item2.cliente}</span>
					{else}
						<span class="badge badge-info">{$item2.agendaId} - {$item2.cliente}</span>
					{/if}
					</a>
				{else}
				
					
					{if $item2.prioridad eq "alta"}
						<span class="label label-important"><strike>{$item2.agendaId} - {$item2.cliente}</strike></span>
					{else if $item2.prioridad eq "media"}
						<span class="badge badge-warning"><strike>{$item2.agendaId} - {$item2.cliente}</strike></span>
					{else}
						<span class="badge badge-info"><strike>{$item2.agendaId} - {$item2.cliente}</strike></span>
					{/if}
					
					
				{/if}
				{/foreach}
			</td>
            <td><div align="center">
      
            <!--
			 <a href="{$WEB_ROOT}/ficha/x/{$item.idReg}"  title="FICHA TECNICA">
            	<img src="{$WEB_ROOT}/images/icons/recibo.png" border="0">
            </a>
			 <a href="javascript:void(0)"  onClick="addClave({$item.idReg})" title="AGREGAR CLAVE">
            	<img src="{$WEB_ROOT}/images/close.jpg" border="0">
            </a>
			 <a href="javascript:void(0)"  onClick="addAgenda({$item.idReg})" title="AGENDAR">
            	<img src="{$WEB_ROOT}/images/address-book--plus.png" border="0">
            </a>
			
			<a href="javascript:void(0)" onClick="EditReg({$item.idReg})" title="Editar">
            	<img src="{$WEB_ROOT}/images/icons/edit.png" border="0">
            </a>
            <a href="javascript:void(0)" onClick="DeleteReg({$item.idReg})" title="Eliminar">
            	<img src="{$WEB_ROOT}/images/icons/delete.gif" border="0">
            </a>-->
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

