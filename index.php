<?php

	include_once('init.php');
	include_once('config.php');
	include_once(DOC_ROOT.'/libraries.php');
			
	if (!isset($_SESSION))
	  session_start();

	$pages = array(	
		'login',
		'logout',	
		'index',	
		'nosotros',	
		'mision',	
		'vision',	
		'oferta',	
		'producto',	
		'contacto',	
		'otro',	
		'sucursal',
		'puestos',
		'ubicanos',
		'dt',
		'account-create',
		'ayj',
		'login-customer',
		'car',
		'checkout',
		'index_dev',
		'account',
		'encuentro',
		'realizar',
		'envioentrega',
		'estadop',
		'promo',
		'fechaentrega',
		'enviomoto',
		#reportes
		'lista',
		'smarttest',
		'tipsCompras',
	);
	

	
	$page = $_GET['page'];
	$section = $_GET['section'];

	if(!in_array($page, $pages))
		$page = 'index';
	
	
		
	include_once(DOC_ROOT.'/modules/user.php');
	include_once(DOC_ROOT.'/modules/'.$page.'.php');
	
	$smarty->assign('page', $page);
	$smarty->assign('section', $section);
	$smarty->assign('time', time());
	
	$pageTpl = ($section == '') ? $page : $page.'_'.$section;
	
	$smarty->assign('pageTpl', $pageTpl);
	$smarty->assign('lang', $lang);
	
	$usr = $_SESSION['Usr'];

	$smarty->assign('usr',$usr);
	
	
	

	
		$lstProducto = $imagen->EnumeraProductos();
		$lstSucursales = $imagen->EnumeraSucursales();
		$lstPromoinde = $imagen->PromocionIndex();
		$infoNota = $imagen->NotadelDia();
		$infoNota["texto"] = utf8_encode($infoNota["texto"]);
		$infoNota["titulo"] = utf8_encode($infoNota["titulo"]);
		$countCar = $producto->CountCarrito();
		
// echo "<pre>"; print_r($lstProducto);
	// exit;
		
		$smarty->assign('countCar',$countCar);
		$smarty->assign('lstProducto',$lstProducto);
		$smarty->assign('lstSucursales',$lstSucursales);
		$smarty->assign('lstPromoinde',$lstPromoinde);
		$smarty->assign('infoNota',$infoNota);
	
	if($page){
		
		$_SESSION['Usr']['page'] = $page;
		$smarty->display(DOC_ROOT.'/templates/'.$page.'.tpl');
	}else{
		$_SESSION['Usr']['page'] = "index";
		$smarty->display(DOC_ROOT.'/templates/index.tpl');
	}
		
	
?>