<ul id="myTab" class="nav nav-tabs"><!--
<li><a href="#Service1" data-toggle="tab">Web </a></li>-->
<li {if $infoVta.paso eq 1} class="active" {/if}><a href="#Service2"  data-toggle="tab"><font color="white">Dirección de Envio</font></a></li>
<li {if $infoVta.paso eq 2} class="active" {/if}><a href="#Service3"  data-toggle="tab"><font color="white">Información de Facturación</font></a></li>
<li {if $infoVta.paso eq 3} class="active" {/if}><a href="#Service4"  data-toggle="tab"><font color="white">Resumen</font></a></li>
</ul>
<div id="myTabContent" class="tab-content">
<!--
<div class="tab-pane" id="Service1">
<hr class="vertical-space1">
<article class="icon-box"><i class="li_lab"></i>
<h5 class="helvetic5">Web Design</h5>

<p>

</p>

</article>
</div>-->
<div class="tab-pane {if $infoVta.paso eq 1} active{/if}" id="Service2">
<hr class="vertical-space1">
<article class="icon-box">
<h5 class="helvetic5"></h5>
	{include file="{$DOC_ROOT}/templates/forms/direccion.tpl"}
	
</article>
</div>
<div class="tab-pane {if $infoVta.paso eq 2} active{/if}" id="Service3">
<hr class="vertical-space1">
<div class="icon-box">
<h5 class="helvetic5"></h5>
		{include file="{$DOC_ROOT}/templates/forms/facturacion.tpl"}
</div>
</div>

<div class="tab-pane {if $infoVta.paso eq 3} active{/if}" id="Service4">
<hr class="vertical-space1">
<article class="icon-box">
<h5 class="helvetic5"></h5>
	
<div class="txtErrMsg" style="color:red"></div>
<div class="loader" ></div>
{include file="{$DOC_ROOT}/templates/forms/resumen.tpl"}
<button class="button small" style="background:#990000" onclick="enviarPedido()">Enviar Pedido</button>
</article>
</div>


</div>


<section class="container page-content" >
    <hr class="vertical-space2">
    <section class="eleven columns">
     
	  <article class="blog-post"><div class="flexslider">
        <ul class="slides">
          <li> <img src="images/tips/Saldi.jpg" alt=""> </li>
          <li> <img src="images/tips/hombre-y-mujer-con-bolsas-de-compras.jpg" alt=""> </li>
          <li> <img src="images/tips/caminos-en-la-industria-del-retail-e1463423273118.png" alt=""> </li>
        </ul>
      </div>
        <div class="two columns alpha">        
        </div>
        <div class="nine columns omega">
          <h3><a href="blog-single.html">Aprovecha las promociones que tenemos para ti</a></h3>
          <p align="justify">Hay miles de productos publicados, las mejores marcas y los precios más bajos.</p>
		 <hr class="vertical-space1">
      </article>
    </section>
    <!-- end-main-content -->
    <aside class="four columns offset-by-one sidebar">     
     
      <!-- end-listbox1 -->
      <br class="clear">
      <br class="clear">
      <h4 class="subtitle">Consulta la guia rapida para realizar tu pedido</h4>
      <div class="listbox1">
        <ul>
          <li><a href="{$WEB_ROOT}/encuentro">¿Cómo encuentro mi producto?</a></li>
          <li><a href="{$WEB_ROOT}/realizar">¿Cómo realizar mi pedido?</a></li>
          <li><a href="{$WEB_ROOT}/car">Carrito de Compras</a></li>
          <li><a href="{$WEB_ROOT}/envioentrega">Envío y entrega</a></li>
          <li><a href="{$WEB_ROOT}/estadop">Estado de mi pedido</a></li>
        </ul>
      </div>
      <!-- end-listbox1 -->
	 
      <!-- end-product-list --> 
    </aside>
	  
    <!-- end-sidebar-->
    <br class="clear">
  </section>
	
	
	
	


<!-- end -->