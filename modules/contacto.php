<?php
	
	// echo "<pre>"; print_r($_GET);
	// exit;
	/* For Session Control - Don't remove this */
	// $user->AllowAccess();	
	/* End Session Control */
	// $usr = $_SESSION['Usr'];
	
	// $parametro = array(
		// 'filtro' => true,
		// 'establoId' => $usr['establoId']
	// );
	$imagen->setId($_GET["cat"]);
	$infcontacto = $imagen->infcontacto();
	
	// $Infcontacto  = $util->EncodeRow($Infcontacto);
	// $registros = $producto->Enumerate( $parametro );
	
	// echo'<PRE>';
	// print_r($Infcontacto);
	// exit;
	// exit;
	$smarty->assign('infcontacto',$infcontacto);
	
?>