<?php
	
	/* For Session Control - Don't remove this */
	$user->AllowAccess();	
	/* End Session Control */
	
	$usuario->tipoReporte("admin");
	$registros = $usuario->Enumerate();
	$registros['result'] = $util->EncodeResult($registros['result']);
	
	$usuario->tipoReporte("ciudadano");
	$registrosC = $usuario->Enumerate();
	$registrosC['result'] = $util->EncodeResult($registrosC['result']);
	
	$smarty->assign('registrosC',$registrosC);
	$smarty->assign('registros',$registros);
	
?>