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
			<li>
				<a href="#">Catalogos</a>
				<i class="fa fa-circle"></i>
			</li>
			<li><a href="#">Tramites y Servicios</a></li>
		</ul>
		</div>
	</div>
	 <!-- BEGIN PAGE TITLE-->
		<h1 class="page-title"> Configurar tramite
			<small></small>
		</h1>
	 <!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->
	<div class="row ">
	 <div class="span9 offset3">
		<div class="portlet light portlet-fit portlet-datatable bordered">
			<div class="portlet-title">
				<div class="caption">
				   <i class="icon-settings font-green"></i>
				   <span class="caption-subject font-green sbold">Configurando {$row.nombre_corto}</span>
				 </div>  
				<div class="actions">
				    		
			    </div>
			</div>
			<div class="portlet-body form">
				{include file="{$DOC_ROOT}/templates/lists/{$page}.tpl"}
			</div>
		</div>
		</div>
	</div>
	<!-- END PAGE CONTENT-->	