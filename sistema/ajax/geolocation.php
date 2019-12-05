<?php
	include_once('../init.php');
	include_once('../config.php');
	include_once(DOC_ROOT.'/libraries.php');

	session_start();
	
	$page = 'cliente';
	
	$smarty->assign('page',$page);
	
	switch($_POST['type']){
	
		case 'datas':
								
			$ltsPartidos = $cliente->ubicacionPedidos();
			// echo '<pre>'; print_R($ltsPartidos);
			// exit;
			foreach($ltsPartidos as $key=>$aux){
				$datasem1[] = array ($aux['nombre'], $aux['x'],$aux['y']);
			}
			
			// @$datasem1[]  = array ("'La Especial'", 16.7472113, -93.1187726);
			// @$datasem1[]  = array ("'2a Oriente'", 16.749802, -93.115205);
			// @$datasem1[]  = array ("'La Chiapaneca'", 16.748474, -93.115898);

			header("Content-type: text/x-json");
			print json_encode($datasem1);	
																
		break;
		
		
			
	break;
}//switch

?>