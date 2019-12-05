<?php
	// if($Usr['isLogged']){
		// header('Location: '.WEB_ROOT);
		// exit;
	// }
	
	

	$infoImg = $imagen->getImages();
	$lstSlider = $imagen->getSliderPrincipal();
	
	// $infoImg = $imagen->getImages();
	// $lstSlider = $imagen->getSliderPrincipal();
	
	// echo "<pre>"; print_r($infoImg);
	// exit;
	$smarty->assign('rand',rand());
	$smarty->assign('lstSlider',$lstSlider);
	$smarty->assign('infoImg',$infoImg);
	$smarty->assign('img1',$infoImg[0]["ruta"]);
	$smarty->assign('img2',$infoImg[1]["ruta"]);
	$smarty->assign('img3',$infoImg[2]["ruta"]);
	$smarty->assign('img4',$infoImg[3]["ruta"]);
?>