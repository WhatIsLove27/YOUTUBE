<!-- 2 уровень -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PUBG - Stand United: PGC 2019 Trailer</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="col-4 mx-auto mt-5 my-5">
		<div class="col-2 mx-auto ">
			<img src="img/logo.png" class="w-100">
		</div>
		<div class="text-center">
			<h1 class="font-weight-light">Один аккаунт. Весь мир Google!</h1>
			<p class="font-weight-light">Чтобы запустить YouTube, войдите в свой аккаунт</p>
		</div>
		<div class="col-8 bg-light mx-auto pt-5 shadow-sm mb-5" >
			<div class="col-4 mx-auto mb-4">
				<img src="img/avatar.png" class="rounded-circle w-100">
			</div>
			<div class="col-9 mx-auto">
				
				<form method="POST" action="regins.php">
					<input type="" name="name" class="form-control my-2  " placeholder="Имя и фамилия">
					<input type="password" name="password" class="form-control my-2 " placeholder="Пароль">
					<input type="" name="email" class="form-control my-2 " placeholder="Эл. адрес">
					<input type="" name="avatar" class="form-control my-2 " placeholder="Аватар">
					<input type="" name="phone" class="form-control my-2 " placeholder="Номер телефона">
					
					<div class="text-center">
						<button class="btn btn-primary btn-sm px-5 my-1 ">Регистрация</button>
						<p class="text-secondary">Регистрируясь, вы принимаете наши Условия, Политику использования данных и Политику в отношении файлов cookie.</p>
					</div>
				</form>			
				<p style="color:red"><?php echo  $_GET["error"] ?></p>				
			</div>
			
		</div>
		<div class="text-center">

			<a href="index.php">есть аккаунт?</a>
		</div>		
	</div>
</body>
</html>