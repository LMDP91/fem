<div class="side-cart">
  <h4 class="subtitle"><i class="fa-shopping-cart"></i>Carrito de Compras</h4>
	<ul class="side-list">
	
		 {foreach from=$lstCar.carrito item=item key=key}          
			 <li><button type="button" class="close" data-dismiss="alert" onClick="deleteCar('{$item.key}')">&times;</button>
			  <a href="#"><img src="{$WEB_ROOT}/images/productos_categorias/{$item.nombre_archivo}.{$item.extension}" alt=""></a>
			  <h5><a href="#">{$item.nombre}</a></h5>
			  <p class="price"><span class="amount">$ {$item.precioActual}</span></p>
			  </li>
		 {/foreach}	 
	
	</ul>
	
<p class="total">Subtotal: <strong>$ {$lstCar.total}</strong></p>
<button class="button small" onclick=" location.href='{$WEB_ROOT}/car' ">Carrito</button> 
<button class="button small" style="background:#990000" onclick=" location.href='{$WEB_ROOT}/checkout' ">Realizar Pedido</button>
