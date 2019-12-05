<?php
include_once('../init.php');
include_once('../config.php');
include_once(DOC_ROOT.'/libraries.php');

session_start();
switch($_POST['type']){
    case "getQuestions":
        $encuesta->setEncuestaId($_POST["id"]);
        $preguntas =  $encuesta->muestraPreguntas();


        $smarty->assign('preguntas',$preguntas);
        $smarty->display(DOC_ROOT.'/templates/lists/preguntas.tpl');
    break;
}//switch


