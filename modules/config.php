<?php
	// echo "<pre>"; print_r($_GET);
// exit;	
	/* For Session Control - Don't remove this */
	$user->AllowAccess();	
	/* End Session Control */
	
	$registros = $documento->Enumerate();

	// echo "<pre>"; print_r($registros );
	// exit;
	$smarty->assign('registros',$registros);
	
?>