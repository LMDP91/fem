<?php
	
	/* For Session Control - Don't remove this */
	$user->AllowAccess();	
	/* End Session Control */

	$registros = $cliente->Enumerate();
	
	// echo '<pre>'; print_r($registros);
	// exit;
	// $registros['result'] = $util->EncodeResult($registros['result']);
	

	
	$smarty->assign('registrosC',$registrosC);
	$smarty->assign('registros',$registros);
	
?>