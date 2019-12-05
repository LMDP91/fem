<?php
	
	//comprobar privilegios de acceso a modulo
	// if($_SESSION['Usr']["role_id"]!=1)
	 // $rbac->enforce('usuario',$_SESSION['Usr']["usuarioId"]);
 
 
	$objRole->setRoleId($_SESSION['Usr']["role_id"]);
	$lisPermisos = $objRole->permisoSegunRol();
	if($_SESSION['Usr']["role_id"] <> 1){
		 if(!in_array(7,$lisPermisos)){
			echo "<font color='red'>El usuario no tiene permisos para ingresar a esta seccion</font>";
			exit;
		 }
	}
	$util->PrintErrors2();
	$registros = $usuario->EnumerateAll();
	if(!empty($registros))
		$smarty->assign('datatable_flag',true);
 

	$smarty->assign('registros',$registros);
	
?>