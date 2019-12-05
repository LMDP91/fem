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
	$infpuestos = $imagen->infpuestos();
	
	// $Infpuestos  = $util->EncodeRow($Infpuestos);
	// $registros = $producto->Enumerate( $parametro );
	
	// echo'<PRE>';
	// print_r($Infpuestos);
	// exit;
	// exit;
	$smarty->assign('infpuestos',$infpuestos);
	
?>