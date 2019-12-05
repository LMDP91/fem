<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	{include file="{$DOC_ROOT}/templates/1-default-meta.tpl"}
	{include file="{$DOC_ROOT}/templates/2-default-css.tpl"}
	{include file="{$DOC_ROOT}/templates/3-default-js.tpl"}
	 <script type="text/javascript">
		// jQuery(document).ready(function() {    
		   // App.init(); // initlayout and core plugins		   
		// });
	</script>
	<script src="http://code.highcharts.com/highcharts.js"></script> 
<script src="http://code.highcharts.com/modules/exporting.js"></script>

</head>

<body class="" >
<br>
<br>
	{include file="{$DOC_ROOT}/templates/header.tpl"}
    
	<!-- BEGIN CONTAINER -->
	<div class="page-container" >
			
		

		<div class="page-sidebar nav-collapse collapse">
			
				{include file="{$DOC_ROOT}/templates/menus/main.tpl"}
			
			
			{if $usr.tipo eq 'operacion'}
				{include file="{$DOC_ROOT}/templates/menus/main-operacion.tpl"}
			{/if}
			
		</div>        

		<!-- BEGIN PAGE -->
		<div class="page-content">
		
		<center> 
			<div style="top:-0px; position:relative">	  
			
			<img src="{$WEB_ROOT}/images/img_se.png" border="0" width="230" height="220" />
	 <img src="{$WEB_ROOT}/images/img_se2.png" border="0" width="220" height="220" />
	 <img src="{$WEB_ROOT}/images/logo.png" border="0" width="120" height="120" />


			</div>	
			</center>
		
			<div class="rows">
				<div class="span4">
				</div>
				<div class="span4">
					

				</div>
				<div class="span4">
				</div>
			</div>	
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12">           
            <h3 class="page-title">
                <!--Dependencia-->
            </h3>
        </div>
    </div>
    <!-- END PAGE HEADER-->
    
    <div id="frmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    </div>
        
    <div class="portlet box purple">
        <div class="portlet-title">
            <div class="caption"><i class="icon-cogs"></i>Graficas</div>
            <div class="actions">            
            	
              <!--  <a href="#" class="btn yellow"><i class="icon-print"></i> Print</a>-->
            </div>
        </div>
        <div class="portlet-body" id="tblContent">
		
            {include file="{$DOC_ROOT}/templates/lists/{$page}.tpl"}
        </div>
    </div>
</div>

    </div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->

	{include file="{$DOC_ROOT}/templates/footer.tpl"}

	
    
	
    
</body>
</html>