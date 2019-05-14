<?php

session_start();

function redirect($url) {
	header('Location: ' . $url);
	exit;
}

$user='';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$_SESSION['nombre'] = trim($_POST['nombre']);
		redirect('inicio.php');

	}

	

