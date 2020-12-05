<?php 
 	$con = mysqli_connect('127.0.0.1', 'root', '', 'urok38'); 
	$text_zaprosa_vstavit = "SELECT * FROM users 
							WHERE email = '". $_POST['email']. "' and password = '". $_POST['password']. "'";					
	$query = mysqli_query($con, $text_zaprosa_vstavit);
	$res = $query -> fetch_assoc(); 
	if (mysqli_num_rows($query)==0 ){
		header('Location: http://urok38/index.php?error=Нет такого пользователя');
		exit();
	}else{
		header('Location: http://urok38/home.php?id=' . $res['id']);
		exit();	
	}	
?>