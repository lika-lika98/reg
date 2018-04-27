<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Your Home Page</title>
		<link href="login.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<section class="container">
			<div class="login" id="login" style="display:block">
				<h1>Добро пожаловать, <i><?php echo $login_session; ?></i>!</h1>
				<h3>Тут будет секретный контент сайта</h3>
				<a href="logout.php">Выйти</a> 
			</div>
		</section>
	</body>
</html>