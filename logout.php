<?php
	session_start();

	unset($_SESSION['username']);

	if (!isset($_SESSION['username'])){
		header('Location: index.php');
	}else{
		header('Location: index.php');
	}

?>