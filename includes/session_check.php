<?php

require_once 'global.php';
require_once 'db_connect_pdo.php';

if($_POST['usuario'] && $_POST['password']) {

	$usuario = trim($_POST['usuario']);
	$md5_password = md5($_POST['password']);

	// Verifica existencia del usuario
	$S = $DB->prepare("SELECT COUNT(usuario) FROM usuarios WHERE usuario = :usuario ");
	$S->execute(array('usuario'=>$usuario));
	if($S->fetchColumn()==1) {

		// Obtiene sal y ups
		$S = $DB->prepare("SELECT sal, ups FROM usuarios WHERE usuario = :usuario ");
		$S->execute(array('usuario'=>$usuario));
		$row = $S->fetch(PDO::FETCH_ASSOC);
		$sal = $row['sal'];
		$ups = $row['ups'];

		// Si no hay sal ni ups, reasigna datos
		if(!$sal && !$ups) {
			$sal = sal(32);	
			$ups = md5(sha1($usuario.$md5_password.$sal));
			$DB->exec("UPDATE usuarios SET ups = '$ups', sal = '$sal' WHERE usuario = '$usuario' ");
		}

		// Verifica que los datos coincidan
		if( md5(sha1($usuario.$md5_password.$sal)) == $ups ) {
			session_set_cookie_params(0);
			session_start();
			$_SESSION['usuario'] = $usuario;
			$_SESSION['password'] = $md5_password;
		} else
			$error = 2;
	} else
		$error = 1;
	
	if($error)
		header('Location: '.R.'login?error='.$error);
	else
		header('Location: '.R);
	die();

} else {

	// Crea sesión
	session_set_cookie_params(0);
	session_start();

	// Variables iniciales
	$usuario = $_SESSION['usuario'];
	$md5_password = $_SESSION['password'];

	// Verifica existencia de valores
	if($usuario && $md5_password) {

		// Verifica existencia del usuario
		$S = $DB->prepare("SELECT COUNT(usuario) FROM usuarios WHERE usuario = :usuario ");
		$S->execute(array('usuario'=>$usuario));
		if($S->fetchColumn()==1) {

			// Obtiene sal y ups
			$S = $DB->prepare("SELECT sal, ups FROM usuarios WHERE usuario = :usuario ");
			$S->execute(array('usuario'=>$usuario));
			$row = $S->fetch(PDO::FETCH_ASSOC);
			$sal = $row['sal'];
			$ups = $row['ups'];

			// Verifica que los datos coincidan
			if( md5(sha1($usuario.$md5_password.$sal)) == $ups ) {
				// :)
			} else
				$error = 5;

		} else
			$error = 4;

	} else
		$error = 3;

	if($error && !$is_login_form) {
		header('Location: '.R.'login?error='.$error);
		die();
	}

}

?>