<?php

    $user->AllowAccess(15);
    $user->AllowAccess(18);

	$encuesta->setId($_GET['x']);
	$data = $encuesta->EnumeratePreguntas();
	
	$encuesta->setId($_GET['x']);
	$info = $encuesta->Info();

	if(!empty($clientes))
		$smarty->assign('datatable_flag',true);

	$smarty->assign('encuestaId',$_GET['x']);
	$smarty->assign('info',$info);
	$smarty->assign('registros',$data);
	
?>