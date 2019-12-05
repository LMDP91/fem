<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> 
<html lang="en" class="no-js"> <!--<![endif]-->
<head><!--
	{include file="{$DOC_ROOT}/templates/1-default-meta.tpl"}
	{include file="{$DOC_ROOT}/templates/2-default-css.tpl"}-->
	{include file="{$DOC_ROOT}/templates/header.tpl"}
	<style type="text/css"> 
	
.infos_bloc .content {
	text-decoration:none;   
    width:150px;
    height: 150px;
    /*background:#f6f6f6;*/
    text-align:center;
    min-height:150px;
    font-family: 'Roboto', sans-serif;
    font-weight:400;
}

.infos_bloc a.content {
    display:block;
    position: relative;
    overflow:hidden;
    -moz-transition: all .4s;
    -webkit-transition: all .4s;
    -o-transition: all .4s;
    transition: all .4s;
    cursor:pointer;
}

.infos_bloc a.content .overlay_bloc {
    background-color:rgba(174, 182, 191, 0);
    width:100%;
    height:100%;
    position:absolute;
    top:0;
    left:0;
    z-index: 9900;
    -moz-transition:all 1s;
    -webkit-transition:all 1s;
    -o-transition:all 1s;
    transition:all 1s;
}

.infos_bloc a.content:hover .overlay_bloc {
    display:block;
    background-color:rgba(174, 182, 191, 0.7);
}

.infos_bloc a.content span {
    background: #622181;
    width:100%;
    height:50px;
    color: white;
    text-transform:uppercase;
    font-size:11px;
    line-height:60px;
    position:absolute;
    display:block;
    bottom:0px;
    left:0;
    z-index: 9910;
    -moz-transition: all .4s;
    -webkit-transition: all .4s;
    -o-transition: all .4s;
    transition: all .4s;
}

.infos_bloc a.content:hover span {
    bottom:0;
    height:60px;
    color: #ffffff;
}

/*
.contenedor {
        height:100%;
        text-align: center;
    }
.bloque {
        height:300px;
        background: rgba(255,204,51,1);
        margin-bottom: 20px;
    }

.clearfix:before, clearfix:after, .contenedor:before, .contenedor:after, .fila:before, .fila:after{
display: table;
content: " ";
}

*/
	</style>


</head>
<body class="" >
	<div id="sticker">
		{include file="{$DOC_ROOT}/templates/menus/main.tpl"}	
	</div>			
			{include file="{$DOC_ROOT}/templates/slider.tpl"}
			<section class="blox dark blackbox promoblox" style="background: url({$WEB_ROOT}/images/ari/{$img1}?{$time}) no-repeat center center; border-top: 3px solid #7F0000; border-bottom: 2px solid #7F0000">
				<!--rgba(98, 33, 129, 0.7); width:100%; height:100%;--->
				<div class="container" style="background-color: ">
					<div class="twelve columns"> 
					<h1><b><font style="color:white; font-weight: 900" >ROMPE EL SILENCIO ALTO A LA VIOLENCIA</font></b></h1>
					<h6><font style="color:white; font-weight: 900" >MUJERES FUERTES Y SEGURAS DE SI MISMAS</font></h6>
					</div>
					<a class="button" style="background:; " href="{$WEB_ROOT}/docs/online.pdf" target="_blank">APOYA A UNA VICTIMA DE LA VILENCIA</a>
				</div>
				<div class="pattern-bg">
				</div>
			</section>
		

			{**include file="{$DOC_ROOT}/templates/seccion1.tpl"**}
			{**include file="{$DOC_ROOT}/templates/seccion2.tpl"**}
			{**include file="{$DOC_ROOT}/templates/seccion3.tpl"**}
			<div id="divNosotros">
			{include file="{$DOC_ROOT}/templates/seccion6.tpl"}
			</div>
			<div id="divProo" <!--class="bloque" data-rotate-x="90deg" data-move-z="-500px" data-move-y="200px"-->
			{include file="{$DOC_ROOT}/templates/seccion5.tpl"}
			</div>
			<div id="divProo5" <!--class="bloque" data-rotate-x="90deg" data-move-z="-500px" data-move-y="200px"-->
			{include file="{$DOC_ROOT}/templates/seccion4.tpl"}
			</div>
			{include file="{$DOC_ROOT}/templates/footer.tpl"}
			
	
	{include file="{$DOC_ROOT}/templates/3-default-js.tpl"}
	<script type="text/javascript">
		jQuery(document).ready(function() {    
		   App.init(); // initlayout and core plugins		   
		});
	</script>	
</body>

</html>