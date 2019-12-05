<?php
	
	/* For Session Control - Don't remove this */
	$user->AllowAccess();	
	/* End Session Control */
	// $producto->setValor($_GET["q"]);
	// exit;
	$infoVta = $producto->infoVenta(); 	

	$lstDir = $producto->misDirecciones();
	
	$lstRFC = $producto->misRFC();
	
	$lstCar = $producto->detalleCarrito();
	
	$lstM = $producto->enumerateMunicipio();
	foreach($lstM  as $key=>$aux){
		
		$lstM[$key]["nombre"] = utf8_encode($aux["nombre"]);
	}

	
	
	// echo "<pre>"; print_r($lstM );
	// exit;

	$smarty->assign('lstM',$lstM);
	$smarty->assign('lstRFC',$lstRFC);
	$smarty->assign('lstDir',$lstDir);
	$smarty->assign('infoVta',$infoVta);
	$smarty->assign('lstCar',$lstCar);

	
?>