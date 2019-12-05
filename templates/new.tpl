<!-- BEGIN PAGE HEADER-->
	<div class="page-bar">
		<div class="span12">           
			<h3 class="page-title">
				<!--Dependencia-->
			</h3>
		 <ul class="page-breadcrumb">
			<li>
				<i class="icon-home"></i>
				<a href="index.html">Inicio</a> 
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
<div class="row">
	<div class="col-md-12">
		<div class="portlet light portlet-fit portlet-datatable bordered" style="-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75); -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75); box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
			<div class="portlet-title" style="background: url({$WEB_ROOT}/images/sub.png) no-repeat center center;">
				<div class="caption">
				   <i class="icon-settings font-green"></i>
				   <span class="caption-subject font-green sbold">Proceso Iniciado</span>
				 </div>  
				<div class="actions">
				    
				</div>
			</div>
			<form id="frmMaster">
				<input type="hidden" name="tramiteId" id="tramiteId" value="{$item2.infoTramite.tramiteId}" />
				<input type="hidden" name="type" id="type" class="type" value="" />
			</form>
			<div class="portlet-body" id="tblContent">
			 {include file="{$DOC_ROOT}/templates/lists/new.tpl"}
			</div>
		</div>
	</div>
</div>
	<!-- END PAGE CONTENT-->	