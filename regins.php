<?php 
 	$con = mysqli_connect('127.0.0.1', 'root', '', 'urok38'); 
	$text_zaprosa_vstavit = "INSERT INTO users ( name, password, email, avatar, phone ) 
							VALUES ('".$_POST['name']."','".$_POST['password']."','".$_POST['email']."','".$_POST['avatar']."','".$_POST['phone']."')";

	$zapros_vstavit = mysqli_query($con, $text_zaprosa_vstavit);
	$query = mysqli_query($con, "SELECT*FROM users");	
	$res = $query->fetch_assoc();
	if ($_POST['name'] == "" || $_POST['password'] == "" || $_POST['email']=="" || $_POST['avatar']=="" || $_POST['phone']=="" ) {
		header('Location: http://urok38/reg.php?error=Заполните все поля');
		exit();
	}
	elseif ($_POST['email']==$res['email']) {
		header('Location: http://urok38/reg.php?error=такой аккаунт уже создан');
		exit();
	}
	else{
		header('Location: http://urok38/index.php');
		exit();
	}
?>