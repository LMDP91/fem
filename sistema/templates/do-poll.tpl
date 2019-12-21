<!-- BEGIN PAGE HEADER-->
	<div class="page-bar">
		<div class="span12">           
			<h3 class="page-title">
				<!--Dependencia-->
			</h3>
		 <ul class="page-breadcrumb">
			<li>
				<i class="icon-home"></i>
				<a href="{$WEB_ROOT}">Inicio</a>
				<i class="fa fa-circle"></i>
			</li>
			<li>
				<a href="{$WEB_ROOT}/do-poll">Encuestas Aplicadas</a>
				<i class="fa fa-circle"></i>
			</li>
			 <li>
				 <a href="{$WEB_ROOT}/do-poll">Nueva encuesta</a>
				 <i class="fa fa-circle"></i>
			 </li>
		 </ul>
		</div>
	</div>
	 <!-- BEGIN PAGE TITLE-->
		<h1 class="page-title">
			<small></small>
		</h1>
	 <!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->
	<div class="row">
		<div class="col-md-12">
			<div class="portlet light bordered" id="frm-poll-wizard">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-layers font-red"></i>
						<span class="caption-subject font-red bold uppercase">Nueva encuesta</span>
					</div>
				</div>
				<div class="portlet-body form">
					<!--form action="#" class="form-horizontal" method="post" id="submit_form" -->
						<div class="form-wizard">
							<div class="form-body">
								<ul class="nav nav-pills nav-justified steps">
									<li>
										<a href="#tab1" data-toggle="tab" >Datos Personales</a>
									</li>
									{foreach from=$encuestas item=item key=key}
										<li>
											<a href="#tab{$item.encuestaId}" data-toggle="tab" data-id="{$item.encuestaId}" data-name="tab{$item.encuestaId}">
												{$item.nombre|ucfirst}
											</a>
										</li>
									{/foreach}
								</ul>
								<!--div id="bar" class="progress progress-striped" role="progressbar">
									<div class="progress-bar progress-bar-success"></div>
								</div> -->
								<div class="tab-content">
									<div class="tab-pane active" id="tab1">
										{include file="{$DOC_ROOT}/templates/forms/frm-datos-personales.tpl"}
									</div>
									{foreach from=$encuestas item=item key=key}
										<div class="tab-pane" id="tab{$item.encuestaId}">
										</div>
									{/foreach}
								</div>
							</div>
							<!--div class="form-actions">
								<div class="row">
									<div class="col-md-offset-3 col-md-9">
										<a href="javascript:;" class="btn default button-previous">
											<i class="fa fa-angle-left"></i> Atras </a>
										<a href="javascript:;" class="btn btn-outline green button-next"> Continuar
											<i class="fa fa-angle-right"></i>
										</a>
										<a href="javascript:;" class="btn green button-submit"> Guardar
											<i class="fa fa-check"></i>
										</a>
									</div>
								</div>
							</div-->
						</div>
					<!--/form-->
				</div>
		</div>
	</div>