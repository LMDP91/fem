<?php
	
	/* For Session Control - Don't remove this */
	// $user->AllowAccess();	
	/* End Session Control */

	$registros = $encuesta->muestraPreguntas();
	$ultima = $encuesta->ultimaEncuesta();
	// $registros['result'] = $util->EncodeResult($registros['result']);
	

	
	$smarty->assign('ultima',$ultima);
	$smarty->assign('registros',$registros);
	
?>