<?php	
	//comprobar privilegios de acceso a modulo
// <<<<<<< HEAD
	// if($_SESSION['Usr']["role_id"]!=1)
	 // $rbac->enforce('producto',$_SESSION['Usr']["usuarioId"]);
 
	$objRole->setRoleId($_SESSION['Usr']["role_id"]);
	$lisPermisos = $objRole->permisoSegunRol();

	if($_SESSION['Usr']["role_id"] <> 1){
		 if(!in_array(14,$lisPermisos)){
			echo "<font color='red'>El usuario no tiene permisos para ingresar a esta seccion</font>";
			exit;
		 }
	}
// =======
	// if($_SESSION['Usr']["role_id"]!=1)
	 // $rbac->enforce('imagenes',$_SESSION['Usr']["usuarioId"]);
// >>>>>>> 41b3377b2abacf443d37a4f6023cc9e6602da193
	
	//$cat_tramite->setAll('no');
	$util->PrintErrors2();
	$imagenes = $imagen->EnumerateAll();
	if(!empty($imagenes))
		$smarty->assign('datatable_flag',true);
	$smarty->assign('rand',rand());
	$smarty->assign('registros',$imagenes);
	
?>