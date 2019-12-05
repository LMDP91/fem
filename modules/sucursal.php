<?php
	

	$imagen->setValor($_GET["q"]);
	$Infosucursal = $imagen->Infosucursal();

		// $Infosucursal["productos"] = utf8_encode($Infosucursal["productos"]);
		// $Infosucursal["direccion"] = utf8_encode($Infosucursal["direccion"]);
		// $Infosucursal["encargado"] = utf8_encode($Infosucursal["encargado"]);
		
	// echo "<pre>"; print_r($Infosucursal);
	// exit;

	$smarty->assign('Infosucursal',$Infosucursal);
	
?>