<?php
// echo "<pre>"; print_r($_POST);
// exit;
	include_once('../init.php');
	include_once('../config.php');
	include_once(DOC_ROOT.'/libraries.php');

	session_start();
	
	$page = 'poll';
	
	
	$smarty->assign('page',$page);
	
	// $_POST["type"]= $_GET["type"];
	switch($_POST['type']){
	
		case 'add':
					
				$encuesta->setId($_POST['id']);
				$info = $encuesta->Info();
				
				// echo '<pre>'; print_r($info);
				// exit;
				echo 'ok[#]';	
				$smarty->assign('info',$info);				
				$smarty->assign('titleFrm','Agregar cliente');				
				$smarty->display(DOC_ROOT.'/templates/boxes/poll.tpl');
																
		break;
		
		
		case 'addQuestion':
				
				
				
				$encuesta->setId($_POST['id']);
				$info = $encuesta->InfoPregunta();

				$r = explode("_",$info["rango"]);
				$de = $r[0];
				$a = $r[1];
				
				$r = explode("_",$info["opcional"]);
				$o1 = $r[0];
				$o2 = $r[1];
				$o3 = $r[2];
				$o4 = $r[3];
				$o5 = $r[4];
			// echo '<pre>'; print_r($info);
				// exit;
						
				$smarty->assign('o1',$o1);				
				$smarty->assign('o2',$o2);				
				$smarty->assign('o3',$o3);				
				$smarty->assign('o4',$o4);				
				$smarty->assign('o5',$o5);				
				$smarty->assign('de',$de);				
				$smarty->assign('a',$a);	
				echo 'ok[#]';	
				$smarty->assign('info',$info);				
				$smarty->assign('preguntaId',$_POST['id']);				
				$smarty->assign('encuestaId',$_POST['Id']);				
				$smarty->assign('titleFrm','Agregar Pregunta');				
				$smarty->display(DOC_ROOT.'/templates/boxes/question.tpl');
																
		break;
		
		case 'edit':
				
				$cliente->setId($_POST['id']);
				$info = $cliente->Info();
				// $info = $util->EncodeRow($info);	
				echo 'ok[#]';
				$smarty->assign('titleFrm','Editar cliente');
				$smarty->assign('info',$info);				
				$smarty->display(DOC_ROOT.'/templates/boxes/add_catalogo.tpl');
																
			break;
		case 'save':

				$encuesta->setNombre($_POST['nombre']);
				$encuesta->setInicio($_POST['inicio']);
				$encuesta->setFin($_POST['fin']);
				$encuesta->setId($_POST['encuestaId']);
				
				$success = $encuesta->Save();
				
				if($success){									
					echo 'ok[#]';     					
				}else{
					echo "fail[#]";					
					$util->ShowErrors();					
				}
				
		break;
		
		case 'SaveQuestions':
		
				if($_POST["tipo"]=="punto"){
					if($_POST["de"]=="" or $_POST["a"]==""){
						echo "fail[#]";
						echo "<font>Campo requerido: Rango</font>";
						exit;
					}
				}
				else if($_POST["tipo"]=="opcional"){
			
					for($i=1;$i<=5;$i++){
						if($_POST["res_".$i]==""){
							$va  = $va + 1;
						}
					}
					
					if($va > 3 ){
						echo "fail[#]";
						echo "<font>Se necesitan por lo menos dos parametros</font>";
						exit;
					}
				}
				
				$idReg = $_POST['encuestaId'];
				
				$rango = $_POST["de"]."_".$_POST["a"];
				$opcional = $_POST["res_1"]."_".$_POST["res_2"]."_".$_POST["res_3"]."_".$_POST["res_4"]."_".$_POST["res_5"];
								

				$encuesta->setEncuestaId($_POST["encuestaId"]);
				$encuesta->setPregunta($_POST['nombre']);
				$encuesta->setTipoEncuesta($_POST['tipo']);
				$encuesta->setRango($rango);
				$encuesta->setOpcional($opcional);
				if($_POST['caracter']){
					$encuesta->setNumCaracter($_POST['caracter']);
				}
				
				$encuesta->setId($_POST['preguntaId']);
				
				
				
				$success = $encuesta->SaveQuestions();
				
				if($success){									
					echo 'ok[#]';     					
				}else{
					echo "fail[#]";					
					$util->ShowErrors();					
				}
		
		break;
		 
		case 'update':

		        $cliente->setId($_POST['id']);
				$cliente->setNombre($_POST['nombre']);
				$cliente->setPaterno($_POST['apaterno']);
				$cliente->setMaterno($_POST['amaterno']);
				$cliente->setEmail($_POST['email']);
				$success = $cliente->Update();
				if($success){									
					echo 'ok[#]';									
				}else{
					echo "fail[#]";					
					$util->ShowErrors();					
				}
				
			break;
								
		case 'DeleteReg':
				
				$encuesta->setId($_POST['id']);
				if($encuesta->Delete()){					
					echo 'ok[#]';				
				}else
				{
					echo 'fail[#]';
				}
				
	    break;
	    case 'activar':
				$cliente->setId($_POST['id']);
				if($cliente->Activar()){					
					echo 'ok[#]';				
				}else
				{
					echo 'fail[#]';
				}
				
	    break;
		
		
		
		case 'DeleteQuestion':
				
				$encuesta->setId($_POST['id']);
				if($encuesta->DeleteQuestion()){					
					echo 'ok[#]';				
				}else
				{
					echo 'fail[#]';
				}
				
	    break;
		
}//switch

?>