<?php

include_once(DOC_ROOT.'/properties/errors.es.php');

require(DOC_ROOT.'/libs/Smarty.class.php');
require(DOC_ROOT.'/libs/nusoap.php');
 include_once(DOC_ROOT."/libs/qr/qrlib.php");
include_once(DOC_ROOT.'/libs/pdf/dompdf_config.inc.php');
include_once(DOC_ROOT.'/classes/db.class.php');
$db = new DB;

include_once(DOC_ROOT.'/classes/error.class.php');
$error = new Error;

include_once(DOC_ROOT.'/classes/util.class.php');
$util = new Util;

include_once(DOC_ROOT.'/classes/main.class.php');
$main = new Main;

include_once(DOC_ROOT.'/classes/user.class.php');
$user = new User;

include_once(DOC_ROOT.'/classes/usuario.class.php');
$usuario = new Usuario;

include_once(DOC_ROOT.'/classes/imagen.class.php');
$imagen = new Imagen;

include_once(DOC_ROOT.'/classes/reporte_pdf.class.php');
$reportePdf = new ReportePdf;

include_once(DOC_ROOT.'/classes/proveedor.class.php');
$proveedor = new Proveedor;

include_once(DOC_ROOT.'/classes/encuesta.class.php');
$encuesta = new Encuesta;


include_once(DOC_ROOT.'/classes/ikey.class.php');
$ikey = new Ikey;

include_once(DOC_ROOT.'/classes/producto.class.php');
$producto = new Producto;

include_once(DOC_ROOT.'/classes/clientes.class.php');
$clientes = new Clientes;




include_once(DOC_ROOT.'/classes/class.phpmailer.php');
include_once(DOC_ROOT.'/classes/class.smtp.php');
include_once(DOC_ROOT.'/classes/sendmail.class.php');


$smarty = new Smarty;

$smarty->assign('DOC_ROOT',DOC_ROOT);
$smarty->assign('WEB_ROOT',WEB_ROOT);

$smarty->assign('property', $property);


?>