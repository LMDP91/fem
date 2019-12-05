 <section class="eleven columns">
	<div class="shop-wrap">
	<p class="result-count">
	{$InfoCategoria.info}</p>
	<br class="clr">
	<div class="shop-wrap"> 
	{foreach from=$InfoCategoria.result item=item key=key}

		  <figure class="shop-item one_third">
			{if $item.promocion eq "si"}
				<span class="onsale">Oferta!</span>
			{/if}
				
			 <a href="{$WEB_ROOT}/dt/q/{$item.productoId}"><img src="{$WEB_ROOT}/images/productos_categorias/{$item.nombre_archivo}.{$item.extension}" alt=""></a>			 
			<figcaption>
				<h4><a href="{$WEB_ROOT}/dt/q/{$item.productoId}" style="color:#FFA500">{$item.nombre}</a> </h4>
				<font style="font-size:12px">{$item.descripcion55}...</font> <a href="{$WEB_ROOT}/dt/q/{$item.productoId}"> Ver Mas</a>
				  <p class="price">
					{if $item.promocion eq "si"}
					<small>$ {$item.precioAnterior}</small>
					{/if}
					<span class="amount">$ {$item.precioActual}</span>
					{if $item.promocion eq "si"}
					<font style="color:#797979; font-size: 15px">Ahorra $ {$item.precioActual-$item.precioAnterior}</font>
					{/if}
				</p>
			</figcaption>
			<div class="product-shop ">
			<!--<a  style="background:#990000" onclick="" class="addtocart">Agregar Al Carrito</a>-->
			<button  href="javascript:void(0)" class="button small" style="background:#990000" onclick="addCar('{$item.productoId}')">Agregar A Carrito </button>
			</div>
		  </figure>
		  
		  <div style="width:50px; overflow:hidden; float:left; !important">
		  &nbsp;
		  &nbsp;
		  </div>
		 
		{if $key % 3  eq 0}
		


		{/if}

	{/foreach}
	</div>
	
		<hr class="vertical-space1">
      <div class="pagination2">
        <ul>
          <li class="disabled"><a href="#">&laquo;</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
      </div>
	  <hr class="vertical-space2">
	</div>
	</section>
