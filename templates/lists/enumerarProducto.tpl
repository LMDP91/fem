<div class="table-responsive">
<table class="table" id="sample_3">
	<thead> 
		<tr>
			<th width="100"><div align="center">Producto</div></th>
			<th width="100"><div align="center">Cantidad (ml)</div></th>
			<th width="100"><div align="center">Via de administracion</div></th>
			<th width="100"><div align="center">Costo</div></th>
			{if !$info.view}
			<th width="10"><div align="center">Accion</div></th>
			{/if}
		</tr>
	</thead>
	<tbody id="">

		{foreach from=$enumerarProducto item=item key=key}
		<tr class="odd gradeX">
			<td><div align="center">{$item.nombre}</div></td>
			<td>
				{if !$info.view}
				<input type="number" onkeypress="return soloNumeros(event)" onchange="ActualizarProducto({$item.id})" class="m-wrap span12" name="cantidad_{$item.id}" id="cantidad_{$item.id}"  value="{$item.cantidad}" maxlength="5"> 
				{else}
					{$item.cantidad}
				{/if}
			
			</td>
			<td><div align="center">{$item.vAdministracion}</div></td>
			<td><div align="center">${$item.costo|number_format:2:'.':','}</div></td>
			{if !$info.view}
			<td>
			<a href="javascript:void(0)" onClick="DeleteProducto({$item.id})" title="Eliminar">
					<img src="{$WEB_ROOT}/images/icons/delete.gif" border="0">
				</a>
			</td>
			{/if}
			
		</tr>
		{foreachelse}
		<tr class="odd gradeX">
			<td colspan="5"><div align="center">Ning&uacute;n registro encontrado.</div></td>
		</tr>
		{/foreach}
	</tbody>
	<tfoot>
		<tr>
			<td colspan=""><span style="color: blue;font-weight:bold;">TOTALES</span></td>
			<td align="" style="height:5px; font-size:10px;"><b>
				{if !$info.view}
				{$totales.cantidad} ml
				{else}
					{$info.cantidad} ml
				{/if}
				
				</b></td>
			<td align="" style="height:5px; font-size:10px;"><b></b></td>
			<td align="" style="height:5px; font-size:10px;"><b><div align="center">
				{if !$info.view}
				${$totales.costo|number_format:2:'.':','}
				{else}
					${$info.costo|number_format:2:'.':','}
				{/if}
				
				</div></b></td>
			{if !$info.view}
				<td align="" style="height:5px; font-size:10px;"><b></b></td>
			{/if}
		</tr>
	</tfoot>
</table>
</div>