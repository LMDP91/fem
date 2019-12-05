<!-- BEGIN PAGE HEADER-->
	<div class="page-bar">
		<div class="span12">           
			<h3 class="page-title">
				<!--Dependencia-->
			</h3>
		 <ul class="page-breadcrumb">
			<li>
				<i class="icon-home"></i>
				<a href="{$WEB_ROOT}/index">Inicio</a> 
				<i class="fa fa-circle"></i>
			</li>
		</ul>
		</div>
	</div>
	 <!-- BEGIN PAGE TITLE-->
		<h1 class="page-title">
<!--		Proceso Iniciado-->
			<small></small>
		</h1>
	 <!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->   
	
<!-- BEGIN PAGE CONTENT-->
<div style="float:right">
	<a onclick="openSOS(1)" >
	¿Necesitas Ayuda?
	</a>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="portlet light portlet-fit portlet-datatable bordered" style="-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75); -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75); box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
			<div class="portlet-title" style="background: url({$WEB_ROOT}/images/sub.png) no-repeat center center;">
				<div class="caption">
				   <i class="icon-settings font-green"></i>
				   <span class="caption-subject font-green sbold">Nuevo Volante</span>
				 </div>  
				<div class="actions">
				    
				</div>
			</div>
			<form id="frmMaster">
				<input type="hidden" name="volanteId" id="volanteId" value="{$infoV.info.volanteIdC}" />
				<input type="hidden" name="type" id="type" class="type" value="" />
			</form>
			<div class="portlet-body" id="tblContent">
				<div style="float:right"><button onclick="openNew()" class="bb" style="width:150px"> Agregar Tramite</button></div>
				<h4><b>Datos del Volante</b></h4>
				<form id="frmVolante">
				<div id="dataVolante" class="Secciones">
					{include file="{$DOC_ROOT}/templates/forms/volante.tpl"}
				</div>
				</form>
				<br>
				<div id="divNuevo" style="display:none; height:600px; overflow:scroll">
					<h4><b>Agregar Tramite</b></h4>
					<div id="dataNuevo" class="Secciones" style="height:580px;" >
						{include file="{$DOC_ROOT}/templates/forms/categoria-tramites.tpl"}
						<div style="clear: both"></div>
						 <div id="divCatTramite">
						 </div>
					</div>
				</div>
				<br>
				<h4><b>Tramites Agregados</b></h4>
				<div id="dataTramites" class="Secciones">
					{include file="{$DOC_ROOT}/templates/forms/tramites-agregados.tpl"}
				</div>
				<br>
				<h4><b>Tramite en Proceso</b></h4>
				<div id="dataProceso">
				</div>
				<br>
				<div id="dataPagos">
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- END PAGE CONTENT-->	