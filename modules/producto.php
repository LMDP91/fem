<?php
	

	$imagen->setValor($_GET["q"]);
	$InfoCategoria = $imagen->InfoCategoria();
	
	$lstCar = $producto->detalleCarrito();
	
	// echo "<pre>"; print_r($lstCar );
	// exit;

	$smarty->assign('q',$_GET["q"]);
	$smarty->assign('lstCar',$lstCar);
	$smarty->assign('InfoCategoria',$InfoCategoria);
	
?>