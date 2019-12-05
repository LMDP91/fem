<?php	
	
	// if($_SESSION['Usr']["role_id"]!=1)
    	// $rbac->enforce('rol',$_SESSION['Usr']["usuarioId"]);
	
	
	$objRole->setRoleId($_SESSION['Usr']["role_id"]);
	$lisPermisos = $objRole->permisoSegunRol();

	if($_SESSION['Usr']["role_id"] <> 1){
		 if(!in_array(6,$lisPermisos)){
			echo "<font color='red'>El usuario no tiene permisos para ingresar a esta seccion</font>";
			exit;
		 }
	}
    
	$util->PrintErrors2();
	$roles = $objRole->Enumerate();
	if(!empty($roles))
		$smarty->assign('datatable_flag',true);
	
	$smarty->assign('registros',$roles);
	
?>