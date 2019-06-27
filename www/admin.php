<?php
session_start();
	if(empty($_SESSION['login']) or $_SESSION['admin'] != "true")
		{
			header("Location: /index.php"); 
		}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Админка</title>
</head>
<body>
	<a href="group.php">Добавление группы</a><br>
	<a href="stud.php">Удаление студента</a><br>
	<a href="prep.php">Регистрация/удаление преподователя/администратора</a><br>
	<a href="disc.php">Добавление/Удаление предмета</a><br>
</body>
</html>