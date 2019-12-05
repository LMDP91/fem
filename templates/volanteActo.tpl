<!-- BEGIN PAGE HEADER-->
	<div class="page-bar">
		 <ul class="page-breadcrumb">
			<li>
				<i class="icon-home"></i>
				<a href="index.html">Inicio</a> 
				<i class="fa fa-circle"></i>
			</li>
			<li>
				<a href="#">Volantes</a>
				<i class="fa fa-circle"></i>
			</li>
			<li><a href="#">Actos en volante</a></li>
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
    <!-- <div class="row">
    	<div class="col-md-12">
    		{include file="{$DOC_ROOT}/templates/forms/form-volante.tpl"}
    	</div>
    </div> -->
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
        {foreach from=$registros item=item key=key}
		<div class="col-md-12">
		  <div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">-
				   <i class="icon-settings font-green"></i>{$item.tramite}
				 </div>
				 <div class="tools">
				   <a class="collapse" href="javascript:;" data-original-title="" title=""> </a>  
			     </div>
			</div>
			<div class="portlet-body form">
              <div class="form-body">
              	<div class="row">
              	     <div class="col-md-3">
              	     <div class="mt-element-list">
              	      <div class="mt-list-container list-default ext-1">
              	     	<ul>
              	         {foreach from=$item.procesos item=item2 key=key2}
							<li class="mt-list-item done">
								<div class="list-icon-container">
                                    <a href="javascript:;">
                                        <i class="icon-check"></i>
                                    </a>
                                </div>
                                <div class="list-item-content">
	                                <h3>
	                                    <a href="javascript:;" onclick="ShowInfoProceso({$item2.procesoId},{$item.volanteActoId})">{$item2.nombre}</a>
	                                </h3>
                                </div>
							</li>	
              	         {/foreach}
              	     	</ul>
              	      </div>
              	      </div>
              	     </div>
              	     <div class="col-md-9" id="procesoDetalle">
              	     </div>
              	</div>
              </div>
			</div>
		</div>
		</div>
		{/foreach}
		
   </div>
<!-- end row -->
<!-- END PAGE CONTENT-->	