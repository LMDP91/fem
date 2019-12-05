<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> 
<html lang="en" class="no-js"> <!--<![endif]-->
<head><!--
	{include file="{$DOC_ROOT}/templates/1-default-meta.tpl"}
	{include file="{$DOC_ROOT}/templates/2-default-css.tpl"}-->
	{include file="{$DOC_ROOT}/templates/header.tpl"}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
	<div id="draggable" class="modal fade draggable-modal" tabindex="-1" role="dialog"  aria-hidden="true" style=" z-index: 1000000">
			</div>
	<div id="sticker">
		{include file="{$DOC_ROOT}/templates/menus/main.tpl"}	
	</div>
			<button class="button small" style="background:#e91e63" onclick="edit(1)">Editar Slider Principal</button>
			{include file="{$DOC_ROOT}/templates/slider.tpl"}
			<button class="button small" style="background:#e91e63" onclick="edit({{$infoImg.0.imagenId}})">Edita Descarga nuestro Catálogo</button>
			<section class="blox dark blackbox promoblox" style="background: url({$WEB_ROOT}/images/ari/{$img1}?{$time}) no-repeat center center; border-top: 3px solid #990000; border-bottom: 2px solid #990000">
				<!--rgba(98, 33, 129, 0.7); width:100%; height:100%;--->
				<div class="container" style="background-color: ">
					<div class="twelve columns"> 
					<h1><b><font style="color:black; font-weight: 900" >Descarga nuestro Catálogo</font></b></h1>
					<h6><font style="color:black; font-weight: 900" >Con Nosotros encuentra lo que necesitas</font></h6>
					</div>
					<a class="button" style="background:#622181; " href="{$WEB_ROOT}/docs/catalogo.pdf" target="_blank">Descargar</a>
				</div
				<div class="pattern-bg">
				</div>
			</section>
		
			
			{**include file="{$DOC_ROOT}/templates/seccion1.tpl"**}
			{**include file="{$DOC_ROOT}/templates/seccion2.tpl"**}
			{**include file="{$DOC_ROOT}/templates/seccion3.tpl"**}
			<button class="button small" style="background:#e91e63" onclick="edit({{$infoImg.1.imagenId}})">Edita Imagen Nosotros</button>
			<div id="divNosotros">
			{include file="{$DOC_ROOT}/templates/seccion6.tpl"}
			</div>
			<button class="button small" style="background:#e91e63" onclick="edit({{$infoImg.2.imagenId}})">Edita Imagen Nuestros Productos</button>
			<div id="divProo" <!--class="bloque" data-rotate-x="90deg" data-move-z="-500px" data-move-y="200px"-->
			{include file="{$DOC_ROOT}/templates/seccion5.tpl"}
			</div>
			<div id="divProo5" <!--class="bloque" data-rotate-x="90deg" data-move-z="-500px" data-move-y="200px"-->
			{include file="{$DOC_ROOT}/templates/seccion4.tpl"}
			</div>
			<button class="button small" style="background:#e91e63" onclick="edit({{$infoImg.3.imagenId}})">Edita Footer</button>
			{include file="{$DOC_ROOT}/templates/footer.tpl"}
		
	
	{include file="{$DOC_ROOT}/templates/3-default-js.tpl"}
	
	<script type="text/javascript">
		<!-- jQuery(document).ready(function() {     -->
		   <!-- App.init(); // initlayout and core plugins		    -->
		<!-- }); -->
	</script>
</body>
</html>