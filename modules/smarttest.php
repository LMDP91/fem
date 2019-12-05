<?php
	
	/* For Session Control - Don't remove this */
	// $user->AllowAccess();	
	/* End Session Control */

	$registros = $encuesta->getListEncuesta();
	$smarty->assign('ultima',$ultima);
	$smarty->assign('encuestas',$registros);
	
?>