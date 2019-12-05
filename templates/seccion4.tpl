<section class="container" >
				<hr class="vertical-space3">
 
    	<div class="latest-f-blog clearfix">
    		<div class="sixteen columns">
    			<div class="sub-content">
				
				
	<form id="frmFiltro">
		Productos<input type="text" name="producto" id="producto" onkeyup="LoadPage()">
	</form>
	<button class="btn yellow" onclick="LoadPage()">Buscar</button>
	<div class="portlet-body" id="tblContent">
		
	</div>
				
		
					<h1 class="h-sub-content">PRECIOS BAJOS GARANTIZADOS</h1>
				</div>
    		</div>
      		<div class="nine columns">
					<h2>Nota del Mes</h2>
       		 	<article class="blog-post clearfix ">
       		 		<figure class="pad-r20">
       		 			<img src="{$infoNota.rutaImagen}" alt="">
						
       		 		</figure>
         	 		<div class="one columns alpha">
            			<div class="blog-date-sec">
              				<h3></h3>
              				<span>||||</span>
              			</div>
          			</div>
	          	<div class="eight columns omega">
			
	            	<h4><a href="#">{$infoNota.titulo}</a></h4>
	              	<p class="blog-author"><strong></strong> {$infoNota.autor}<br>{$infoNota.fechaPublicacion}<strong></strong> <a href="#"></a></p>
	            <p class="blog-detail" style="text-align:justify">
				{$infoNota.texto}
				</p>
	            <a href="{$WEB_ROOT}/promo"  class="readmore">ver mas promociones</a> </div>
		</article>
		
      </div>	   
	 <!-- <div class="seven columns omega">
	  <h2>Promociones</h2>
		{foreach from=$lstPromoinde item=item key=key} 
		{if $key < 4}
      	<article class="blog-line clearfix">
          	<a href="#" class="img-hover"><img src="{$WEB_ROOT}/images/productos_categorias/{$item.nombre_archivo}.{$item.extension}" alt=""></a>
			<a href="#" style="color:#622181; font-size:22px">{$item.nombre}</a>
			<br>
            <a href="#">{$item.descripcion}</a>

			  <p class="price"><small>$ {$item.precioAnterior}</small><span class="amount">$ {$item.precioActual}</span></p>
        </article>
		{/if}
		{/foreach}
      </div>-->
	  <div class="seven columns omega">
	  <article class="blog-line clearfix">
	       <div class="sixteen columns">				
					<h6 class="h-sub-content">Conoce nuestros Productos</h6>					
				</div>				
			</div>
			
	  </article>
	  <div class="one_third">
      <figure class="our-team"> <img src="images/tips/c05487351.jpg" alt="">
        <figcaption><font color="orange"><h4><strong><b>Remate..!!<b><br></font>
          <small><font color="orange">Laptop HP 15-bs011la</font></small></strong></h4>
        <p align="justify">HP presenta modernidad y diseño atractivo en esta laptop equipada con los mejores elementos para garantizarte productividad y rapidez. Recibirás el mejor almacenamiento de archivos con 1TB de DD y 8GB de RAM, combinación perfecta para darte rendimiento y velocidad. Asimismo, podrás desempeñar multitareas en este equipo de cómputo sin dificultad gracias a las características del procesador Intel Core i3.</p>
      </figure>
      <!-- end Our Team -->
    </div>
	 <div class="one_third">
      <figure class="our-team"> <img src="images/tips/Casa Madero Merlot-500x500.png" alt="">
        <figcaption><font color="orange"><h4><strong><b>Remate..!!<b><br></font>
          <small><font color="orange">Casa Madero Merlot</font></small></strong></h4>
        <p align="justify">Fermentación a temperatura controlada en tanques de auto-fermentación
De 12 a 15 meses en barricas de roble francés y americano
Grado alcohólico: 13,5% Vol. Alc.</p>
	    </figure>
      <!-- end Our Team -->
    </div>
	 <div class="one_third">
      <figure class="our-team"> <img src="images/tips/domecq xa-500x500.png" alt="">
        <figcaption><font color="orange"><h4><strong><b>Remate..!!<b><br></font>
          <small><font color="orange">Sangre de Cristo</font></small></strong></h4>
        <p>Este vino mexicano, es un vino tinto rojo de sabor afrutado y dulce. Para aquellas personas que no tienen la costumbre de beber vino, este sería el indicado para iniciar pues es muy amable al paladar.</p>
        </figure>
      <!-- end Our Team -->
    </div>
	 <div class="one_third">
      <figure class="our-team"> <img src="images/tips/SANGRE D E CRISTO-500x500.png" alt="">
        <figcaption><font color="orange"><h4><strong><b>Remate..!!<b><br></font>
          <small><font color="orange">Sauvignon XA Domecq</font></small></strong></h4>
        <p align="justify">Nariz delicada y armónica con frutos rojos como moras, creza y ciruelas pasas, mezclados con vainilla y chocolate amargo que le otorgan su gran complejidad. Roble Profundo e intenso con matiz rojo carmín y muy brillante.</p>
        </figure>
      <!-- end Our Team -->
    </div>	
      <!-- end Our Team -->
    </div>
    </div>	
	
	
	<!--<section class="latest-works">   	
<hr class="vertical-space1">
<div class="icon-top-title aligncenter">
<i class="li_diamond"></i>
<hr class="vertical-space1">
<h1>Producto Estrella</h1>
<h4>Son aquellos con un alto crecimiento y una alta cuota de mercado. Se caracterizan por ser productos líderes y requerir grandes inversiones para sostener su crecimiento. En el futuro, estos productos serán los denominados “Vacas lecheras”.</h4>
<br>

</div>
<hr class="vertical-space2">	
	<script src="isotope/isotope.js"></script>
    <script src="isotope/isotope-custom.js"></script>
    <script src="js/jquery.prettyPhoto.js" ></script>
</section>-->
	
<hr class="vertical-space3">
</section>