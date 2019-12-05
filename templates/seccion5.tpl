<section class="parallax-sec" data-type="background" data-speed="8" style="background:#eee url({$WEB_ROOT}/images/ari/{$img3}?{$time}) center bottom fixed; background-repeat:no-repeat ;   min-height: 400px;  height: 590px;  margin: 0 auto;  width: 100%;  max-width: 1920px;  position: relative; ">
<article class="blox dark">
<div class="container">

 {foreach from=$lstProducto item=item key=key}
	
	  <div style="overflow:hidden; float:left; !important; " id="onglet_sociaux" >
	  <br>
		<div class="infos_bloc" style="border: 1px solid; border-color:7f0000">
		  <a href="{$WEB_ROOT}/producto/q/{$item.categoriaCId}"  class="content" border="0">
			  <img src="{$item.url}{$item.imagen}.{$item.tipo}" style="width:40%">
			  <br>
			  
			  <div class="overlay_bloc"></div>
			  <span> {$item.nombre}</span>
		  </a>
		</div>
	  </div>
	   <div style="overflow:hidden; float:left; !important" id="onglet_sociaux">
		&nbsp;
		&nbsp;
		&nbsp;
		&nbsp;		
	  </div>
 {/foreach}

<div class="eight columns">
<p>&nbsp;</p>
</div>
<!--<div class="eight columns alignleft">
<hr class="vertical-space4">
  <h1 class="extr"></h1>
  <br>
  <h5></h5>
  <br>
  <a class="button jade">Purchase Now</a>	 
  </div>-->
 </div>
  
</article>
</section>

