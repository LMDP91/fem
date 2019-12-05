<!-- BEGIN PAGE HEADER-->
	<div class="page-bar">
		<div class="span12">           
			<h3 class="page-title">
				
			</h3>
		 <ul class="page-breadcrumb">
			<li>
				<i class="icon-home"></i>
				<a href="index.html">Inicio</a> 
				<i class="fa fa-circle"></i>
			</li>
			<li>
				<a href="#">Configuracion</a>
				<i class="fa fa-circle"></i>
			</li>
			<li><a href="#">Roles</a></li>
		</ul>
		</div>
	</div>
	 <!-- BEGIN PAGE TITLE-->
		<h1 class="page-title"> Configurar Rol
			<small></small>
		</h1>
	 <!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->
	<div class="row ">
	 <div class="col-md-12">
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
				   <i class="icon-settings"></i>
				   Configurando {$row.Description}
				 </div>  
				<div class="tools">
				  <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>  		
			    </div>
			</div>
			<div class="portlet-body form">
			 {include file="{$DOC_ROOT}/templates/lists/{$page}.tpl"}
			</div>
		</div>
	  </div>
    </div>
	<!-- END PAGE CONTENT-->	