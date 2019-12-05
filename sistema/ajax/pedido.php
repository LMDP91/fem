<?php
// echo "<pre>"; print_r($_POST);
// exit;
	include_once('../init.php');
	include_once('../config.php');
	include_once(DOC_ROOT.'/libraries.php');

	session_start();
	
	$page = 'pedido';
	
	
	$smarty->assign('page',$page);
	
	// $_POST["type"]= $_GET["type"];
	switch($_POST['type']){


		case 'loadPage':
			    $pedido->setPage($_POST['p']);
			    $registros = $pedido->Enumerate();
				echo 'ok[#]';
				$usr = $_SESSION['Usr'];
			    //obtener todos los permisos del rol del usuario activo
			    $permisos_general = $rbac->Roles->permissions($usr["role_id"],false);
			    //convertir conjunto de permisos en un array de 1D para obtener solo la columna Title
			    $permisos_titles =  $config->getOnlyColumnArray($permisos_general,"Title");
			    //asignar a una variable smarty el array de permisos para utilizarlo y mostrar ciertos accesos al menu
			    $smarty->assign('privilegios',$permisos_titles);
			    $smarty->assign('usr',$usr);			
				$smarty->assign('registros',$registros);
				$smarty->display(DOC_ROOT.'/templates/lists/'.$page.'.tpl');
				
		break;
		case 'detalle':
			   $pedido->setId($_POST['id']);
			   $detalles =  $pedido->DetallePedido();

			   $smarty->assign('detalles',$detalles);
			   $smarty->display(DOC_ROOT.'/templates/lists/detalle-pedido.tpl');


		break;
		case 'remove':
				
				$pedido->setId($_POST['id']);
				if($pedido->Delete()){					
					echo 'ok[#]';				
				}else
				{
					echo 'fail[#]';
				}
				
	    break;
	    case 'activar':
				$pedido->setId($_POST['id']);
				if($pedido->Activar()){					
					echo 'ok[#]';				
				}else
				{
					echo 'fail[#]';
				}
				
	    break;

        case "buscarPedido":
            //BUSCAR PEDIDOS SEGUN FILTRO DE BUSQUEDA
            //TOMAR EN  CUENTA LA RESTRCCION DE LO USUARIOS POR SUCURSAL

             if(in_array($_SESSION["Usr"]["role_id"],$roles_limitados))
             {
                 if($_POST["sucursalId"]!="")
                   $pedido->setSucursalId($_POST["sucursalId"]);
                 else
                   $pedido->setSucursalId($_SESSION["Usr"]["sucursalId"]);
             }
             $pedido->setFolio($_POST["folio"]);
             // $pedido->searchPedidos();
			 echo 'ok[#]';
			 $pedidos = $pedido->Enumerate();
			 $smarty->assign('registros',$pedidos);
			  $smarty->display(DOC_ROOT.'/templates/lists/pedido.tpl');
			
            break;
        case 'doSearchRankin':
           $result =  $pedido->getRankinPedidos();
           if(!empty($result)){
               echo "ok[#]";
               $smarty->assign('nameField',$_POST["tipoDetalle"]);
               $smarty->assign('result',$result);
               $smarty->display(DOC_ROOT.'/templates/lists/list-rankin-result.tpl');
           }
           else{
               echo "fail[#]";
               echo "<div align='center'>---- No se encontraron resultados del periodo seleccionado ----</div>";
           }
        break;
        case 'doSearchSalesArt':
            $result = $pedido->searchSalesByArticulo();
            if(!empty($result)){
                echo "ok[#]";
                $smarty->assign('nameField',$_POST["tipoDetalle"]);
                $smarty->assign('result',$result);
                $smarty->display(DOC_ROOT.'/templates/lists/list-sales-articulo.tpl');
            }
            else{
                echo "fail[#]";
                echo "<div align='center'>---- No se encontraron resultados del periodo seleccionado ----</div>";
            }
        break;
				
}//switch

?>