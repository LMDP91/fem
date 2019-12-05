<?php
//require_once("Connections/connSare.php");

if(!isset($_SESSION))
	session_start();
	
if($_GET['uid'] == 1)
	$archivo = "jre-7u25-windows-i586.exe";
	
if($_GET['uid'] == 2)
	$archivo = "Instalador_Windows_2.2.exe";

if($_GET['uid'] == 3)
	$archivo = "FileZilla_Server-0_9_57.exe";



//mysql_select_db($database_connSare,$connSare);
/*$query_insrtDescarga = "INSERT INTO usuario_fea_descarga (Username,TipoArchivo,FechaDescarga,IP,DataServer,FechaHora) VALUES ('".$_SESSION['MM_Username']."','".$archivo."',NOW(),'".$_SERVER['REMOTE_ADDR']."','".serialize($_SERVER)."',NOW())";
$insrtDescarga = mysql_query($query_insrtDescarga,$connSare) or die(mysql_error());
*/
if (file_exists($archivo)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($archivo));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($archivo));
    ob_clean();
    flush();
    readfile($archivo);
    exit;
}
else
{
	echo "<p>File doesn't exist</p>";
	exit();
}

?>
