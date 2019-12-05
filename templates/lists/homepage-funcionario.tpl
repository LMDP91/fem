<div class="portlet box  tabbable">
<div class="portlet-title">
	<div class="caption"><i class="icon-reorder"></i></div>
</div>
<div class="portlet-body">
	<div class="tabbable portlet-tabs">
		<ul class="nav nav-tabs">
			
						

			<li class="active"><a href="#portlet_tab2_2" data-toggle="tab">Hoy</a></li>
			<li ><a href="#portlet_tab2_1" data-toggle="tab">Busqueda</a></li>
		
			
		</ul>
		<div class="tab-content">
		
			<div class="tab-pane " id="portlet_tab2_1">				
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="span12">           
							<h3 class="page-title">
							</h3>
						</div>
					</div>
					<div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
					</div>
				{**include file="{$DOC_ROOT}/templates/lists/inicio-proceso.tpl"**}
				</div>	
			</div>
			<div class="tab-pane active" id="portlet_tab2_2">
				 <div class="container-fluid">
						<div class="row-fluid">
							<div class="span12">           
								<h3 class="page-title">
								</h3>
							</div>
						</div>
						<div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
						</div>
						{include file="{$DOC_ROOT}/templates/lists/agenda-hoy.tpl"}
					</div>
			</div>
			
			
			

		</div>
	</div>
	</div>
	</div>  