<?php

	include_once('init.php');
	include_once('config.php');
	include_once(DOC_ROOT.'/libraries.php');
	
	if (!isset($_SESSION))
	  session_start();

	$pages = array(

	    #inicio de session y configuracion	
		'login',
		'logout', 
        'homepage',		
		'config',
		'rol',
		'config_role',
		'perm_accion',
		'usuario',
		'cat_electronico',
		'empresa',
		'nota',
		'colonia',

		#pedidos
        'rankin-pedido',
		'sales-articulo',
		#catalogos
		'cliente',
		'estado',
		'municipio',
		'sucursal',
		'puesto',
		'producto',
		'producto_cat',
		'imagen',
        'download-formato',

		'pedido',
		'detalle-pedido',

		'imagenes',
		
		#documentos
		'doc_crear',
		'doc_lista',
		'birthday',
		'age-ubication',
		'sex-ubication',
		'customer-basic',
		'order-ubication',
		'geolocation',
		'poll',
		'question',
		'poll-analytics',
		'ranking-product',
		
	);
	
	$page = $_GET['page'];
	$section = $_GET['section'];
	if(!in_array($page, $pages))
		$page = 'homepage';
	
	//echo $page; exit;

	include_once(DOC_ROOT.'/modules/user.php');
	include_once(DOC_ROOT.'/modules/'.$page.'.php');
	
	$smarty->assign('page', $page);
	$smarty->assign('section', $section);
	$smarty->assign('time', time());
		
	$pageTpl = ($section == '') ? $page : $page.'_'.$section;
	
	$smarty->assign('pageTpl', $pageTpl);
	$smarty->assign('lang', $lang);
	
	$usr = $_SESSION['Usr'];
    $objRole->setRoleId($_SESSION['Usr']["role_id"]);
    $lstAccesos = $objRole->permisoSegunRol();
    $smarty->assign('privilegios',$lstAccesos);
	$smarty->assign('usr',$usr);

	$smarty->assign('miColor',$miColor);
	$smarty->assign('FOOTER', FOOTER);

	if($page == 'login'){
		$smarty->display(DOC_ROOT.'/templates/login.tpl');
	
	}
	else{
	
		$_SESSION['Usr']['page'] = $page;
		$smarty->display(DOC_ROOT.'/templates/index.tpl');
	}
?>