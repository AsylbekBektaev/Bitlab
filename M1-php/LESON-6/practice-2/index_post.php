<?php

	session_start();

	if (isset($_POST['id'])) {

		if (!isset($_SESSION['cart'])) {

			$_SESSION['cart'] = [];			
		}

		if (!isset($_SESSION['cart'][$_POST['id']])) {
			$_SESSION['cart'][$_POST['id']] = 0;
		}

		$_SESSION['cart'][$_POST['id']] = $_SESSION['cart'][$_POST['id']] + 1;

	}

	header('Location:index.php');
	
?>