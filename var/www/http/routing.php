<?php 
	/**
	* Archivo que redirecciona al contenido que se va incrustar dentro de la header y el footer
	* Autor: Elivar Largo
	* Sitio Web: wwww.ecodeup.com
	**/
	if (empty($_GET['menu'])) {
		require_once('paginas/login.php');
	}else{
	if ($_GET['menu']=='cliente') {
		require_once('paginas/cliente.php');
	}if ($_GET['menu']=='tipo_producto') {
		require_once('Paginas/tipo_producto.php');
	} 


	
	}
 ?>
