<div class="portlet box  tabbable">
<!--<div class="portlet-title">
	<div class="caption"><i class="icon-reorder"></i></div>
</div>-->
<h3><b>{$detalle.infoCatTramite.nombre_corto}</b></h3>
<div class="portlet-body">
	<div class="tabbable portlet-tabs">
		<ul class="nav nav-tabs">
			{foreach from=$detalle.proceso item=item key=key}
				<li   {if $item.numero eq $detalle.infoTramite.paso} class="active"  {/if}> 
				<center>
				<div class="principal"  {if $item.numero eq $detalle.infoTramite.paso} style="background:rgba(52, 193, 96, 0.99)" {/if}>
				{$item.numero}
				</div>
				</center>
				
				{if $item.numero eq $item.countProceso}
					<a href="#portlet_tab2_{$key}" data-toggle="tab" onClick="actualizaTab('fin','{$item.numero}')">  {$item.nombre}</a>
				{else}
					<a href="#portlet_tab2_{$key}" data-toggle="tab" onClick="actualizaTab('{$item.procesocattramiteCId}','{$item.numero}')">  {$item.nombre}</a>
				{/if}
				
				</li>
			{/foreach}
			
		</ul>
		<div class="tab-content">
		
			{foreach from=$detalle.proceso item=item2 key=key2}   
				<div {if $item2.numero eq $detalle.infoTramite.paso}  class="tab-pane active" {else} class="tab-pane " {/if}  id="portlet_tab2_{$key2}">				
					<div class="container-fluid">
						<div class="row-fluid">
							<div class="span12">           
								<h3 class="page-title">
								</h3>
							</div>
						</div>
						<div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
						</div>
						 {include file="{$DOC_ROOT}/templates/forms/{$item2.urlFormulario}"}
					</div>	
				</div>
			{/foreach}
				

		</div>
	</div>
	<div id="txtErrMsg" class="txtErrMsg"></div>
	
	</div>
	</div>  