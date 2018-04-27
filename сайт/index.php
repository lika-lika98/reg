<?php
session_start();
?>
<html>
	<head>
		<title>Главная страница</title>
		<meta charset="utf-8">
		<link href="login.css" media="all" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<section class="container">
			<div class="login" id="login">
				<h1>Главная страница</h1>
				<form action="login.php" method="post">
					<p>
						<input name="username" type="text" placeholder="Логин">
					</p>
					<p>
						<input name="password" type="text" placeholder="Пароль">
					</p>
					<p>
						<input type="submit" name="submit" value="Войти">
						<br>
						<a href="regpage.php">Создать аккаунт</a> 
					</p>
				</form>
			</div>
		</section>
	</body>
</html>
