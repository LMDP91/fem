<!-- BEGIN PAGE HEADER-->
	<div class="page-bar">
		 <ul class="page-breadcrumb">
			<li>
				<i class="icon-home"></i>
				<a href="index.html">Inicio</a> 
				<i class="fa fa-circle"></i>
			</li>
			<li>
				<a href="#">Documentos</a>
				<i class="fa fa-circle"></i>
			</li>
			<li><a href="#">Volantes</a></li>
		</ul>
		<div class="page-toolbar">
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
    	<div class="col-md-12" id="detailVolante">
    		{include file="{$DOC_ROOT}/templates/forms/form-volante.tpl"}
    	</div>
    </div>
    <hr />
	<div class="row">
	    <div class="col-md-12">
		    <div class="clearfix">
		     <button class="btn btn-success" type="button">Procesar</button>
		     <button class="btn btn-success" type="button">Agregar</button>
		     <button class="btn btn-success" type="button">Editar</button>
		     <button class="btn btn-success" type="button">Otros</button>
		     <button class="btn btn-success" type="button">Agregar a bandeja</button>
		    </div>
		</div>
		<hr/>
		<div class="col-md-12">
			<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
				   <i class="icon-settings font-green"></i>Bandeja
				 </div>  
			</div>
			<div class="portlet-body">
			 <div class="table-responsive" id="tblContent">
			 	{include file="{$DOC_ROOT}/templates/lists/{$page}.tpl"}
			 </div>
			 
			</div>
		</div>
	</div>
   </div>
<!-- end row -->
<!-- END PAGE CONTENT-->	