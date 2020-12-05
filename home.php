<!-- 2 уровень -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PUBG - Stand United: PGC 2019 Trailer</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		.box:hover {
			background-color: lightgray;
		}
	</style>
</head>
<body>
	<!-- header -->
	<div class="col-12 py-3" style="">
		<!-- 2 уровень -->
		<div class="row">
			<!-- лого youtube -->
			<div class="col-4">
				<div class="row">
					<div class="col-1">
						<img src="img/1.png" alt="" class="w-75">
					</div>
					<div class="col-3">
						<img src="img/2.png" alt="" class="w-75">
					</div>
				</div>
					
			</div>
			<!-- поиск видео -->
			<div class="col-6">
				<div class="row">
					<div class="col-7 pr-0">
						<input type="text" placeholder="Введите запрос" class="form-control">
					</div>
					<div class="col-1 pl-0">
						<button class="btn btn-light"><img src="img/3.png" class="w-50" alt=""></button>
					</div>
				</div>
			</div>
			<?php 
				$con = mysqli_connect('127.0.0.1', 'root', '', 'urok38'); 
				$text_zaprosa_vstavit = "SELECT*FROM videos WHERE userID = {$_GET['id']}";
				$query = mysqli_query($con, $text_zaprosa_vstavit);
				$res = $query->fetch_assoc();

			?>
			<!-- значки создать видео, колокольчик и т.п. -->
			<div class="col-2">
				<div class="row">
					<div class="col-2">
						<img src="img/4.png" alt="" class="w-100">
					</div>
					<div class="col-2">
						<img src="img/5.png" alt="" class="w-75">
					</div>
					<div class="col-2">
						<img src="img/6.png" alt="" class="w-75">
					</div>
					<div class="col-2 px-0">
						<!--аккаунт-->
						
					<a href="account.php?id=<?php echo $res['id'] ?>"><img src="img/7.jpg" alt="" class="w-100"></a>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- content -->
	<div class="col-12 px-3" style="">	
		<div class="row">
			<div class="col-2 bg-white">
				<div class="row  mb-3 ml-2 box">
					<div class="col-2 py-2 text-center">
						<img src="img/home.png" class="w-100">
					</div>
					<div class="col-8 py-2 px-0" >
						<h5 >Главная</h5>
					</div>
				</div>
				<div class="row  mb-3 ml-2 box">
					<div class="col-2 py-2 text-center">
						<img src="img/tr.png" class="w-100">
					</div>
					<div class="col-8 py-2 px-0" >
						<h5 >В тренде</h5>
					</div>
				</div>
				<div class="row  mb-3 ml-2 box">
					<div class="col-2 py-2 text-center">
						<img src="img/subs.png" class="w-100">
					</div>
					<div class="col-8 py-2 px-0" >
						<h5 >Подписки</h5>
					</div>
				</div>															
			</div>
			<!-- Колонка с видео -->
			<?php 
					
				for ($i=0; $i < $query->num_rows; $i++) {
					
					
				

			?>
				<div class="col-10 bg-light pt-3" style="">
					<div class="row">
						<div class="col-3"> <!--ВИДЕО -->
							<div class="embed-responsive embed-responsive-16by9 mb-3">
								<iframe class="embed-responsive-item" src=" <?php echo $res['source'] ?>" fram="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<div class="row">
								<div class="col-3 text-center">
									<img src="<?php echo $res['img'] ?>" class="w-75 rounded-circle">
								</div>
								<div class="col-9">							
									<h5><?php echo $res['videoname'] ?></h5>
									<a href=""><p class="font-weight-bold mb-0"><?php echo $res['chanelname'] ?></p></a>	
									<p class="text-secondary"><?php echo $res['descr'] ?></p>
								</div>
							</div>						
						</div> <!--КОНЕЦ ВИДЕО -->		
					</div>	
				</div>

			<?php 
				}
			?>
		</div>
	</div>
</body>
</html>