<?php 
	session_start();
	$vidusr = $_POST['id_usr'];
	
	require_once("include/config/config.php");
	require_once($CONFIG['pathinclude']."config/cx.php");
	require_once($CONFIG['pathinclude']."cls/usuario.php");
	$objUsr = new Datos;
	$BorrarUsr = $objUsr->Borrar_datos($vidusr);
	if (!empty($vidusr)) {
			echo '<script type="text/javascript">
				          alert("El Usuario Fue Borrado Satisfactoriamente");
				          window.location="Admin/paneladm.php?p=usuarios&j=consulta"
				          
				          </script>';
		}	

 ?>