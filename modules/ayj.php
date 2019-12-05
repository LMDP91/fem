<?php
	
	/* For Session Control - Don't remove this */
	// $user->AllowAccess();	
	/* End Session Control */
	
	if($_GET["yek"]){
		$clientes->setLLaveMd5($_GET["yek"]);
		$info = $clientes->Info();
		if($info["clienteId"]==null){
			echo "<font color='red'>Acceso No Autorizado</font>";
			exit;
		}
	}else{
		echo "<font color='red'>Acceso No Autorizado</font>";
		exit;
	}
	

	$smarty->assign('usuarioId',$_GET["yek"]);

	
?>