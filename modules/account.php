<?php
	
	/* For Session Control - Don't remove this */
	$user->AllowAccess();	
	/* End Session Control */

	$lstCar = $producto->detalleVta();
	
	$smarty->assign('lstCar',$lstCar);
	
?>