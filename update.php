<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'urok38');
	$UPDATE = mysqli_query($connect , "UPDATE users SET name = '". $_GET['name'] ."',
	 						phone = '". $_GET['phone'] ."', email = '". $_GET['email'] ."'    WHERE id = '".$_GET['id']."' ");
	header('Location: http://urok38/home.php?id="'.$_GET['id'].'"');
	exit();
?>