{**include file="{$DOC_ROOT}/templates/boxes/messages.tpl"**}
<form id="frmGral" onsubmit="return false;">
<input type="hidden" name="type" id="type" value="updateCar">
<table class="table table-striped table-bordered table-hover" id="sample_3">
    <thead>
        <tr>
            <th width="200"><div align="center"><font color="white">#</div></th>
            <th width="200"><div align="center"><font color="white">Folio</div></th>
            <th width="200"><div align="center"><font color="white">Fecha de Solicitud</div></th>
            <th width="200"><div align="center"><font color="white">Hora de Solicitud</div></th>
            <th width="200"><div align="center"><font color="white">Num Productos</div></th>
            <th class="hidden-480" width="150"><div align="center"><font color="white">Subtotal</div></th>
            <th class="hidden-480" width="200"><div align="center"><font color="white">I.V.A.</div></th>
            <th class="hidden-480"><div align="center"><font color="white">Total</div></th>
            <th class="hidden-480"><div align="center"><font color="white">Estatus</div></th>
            <th class="hidden-480"><div align="center"><font color="white">Acciones</div></th>
        </tr>
    </thead>
    <tbody>

    	{foreach from=$lstCar.result item=item key=key}        	
        <tr class="odd gradeX">
			<td>
			{$key+1}
			</td>
			<td><div align="center"><font color="black"><b>{$item.folio}</b></div></td>
			<td><div align="center"><font color="black"><b>{$item.fecha}</b></div></td>
			<td><div align="center"><font color="black"><b>{$item.hora}</b></div></td>
            <td>
				{$item.countVta}
			</td>
			<td><div align="center"><font color="black"><b>${$item.subtotal|number_format:2:'.':','}</b></div></td>
            <td><div align="center">$</div></td>
            <td><div align="center"><font color="black"><b>${$item.montoTotal|number_format:2:'.':','}</b></div></td>
            <td><div align="center"><font color="black"><b>{$item.estatus}</b>	</div></td>
            <td>
				<div align="center">
					<a href="{$WEB_ROOT}/ajax/pdf.php?id={$item.ventaId}" target='_blank'>
						<img src="{$WEB_ROOT}/images/ped.png">
					</a>
				</div>
			</td>

        </tr>
		
        {foreachelse}
        <tr class="odd gradeX">
        	<td colspan="6"><div align="center">Ning&uacute;n registro encontrado.</div></td>
        </tr>
        {/foreach}
    </tbody>
</table>
</form>

{include file="{$DOC_ROOT}/templates/lists/pages.tpl" pages=$registros.pages info=$registros.info}